<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardGuruController extends Controller
{
    function index()
    {
        foreach(range('a','d') as $letter){
            $data['dataSiswa'][$letter]['totalSiswa'] = Siswa::where('kelas',strtoupper($letter))->count();

            $data['dataSiswa'][$letter]['bab0'] = Siswa::where('kelas',strtoupper($letter))->where('bab',0)->count();
            $data['dataSiswa'][$letter]['bab1'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',1)->count();
            $data['dataSiswa'][$letter]['bab2'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',2)->count();
            $data['dataSiswa'][$letter]['bab3'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',3)->count();
            $data['dataSiswa'][$letter]['selesai'] = Siswa::where('kelas',strtoupper($letter))->where('bab','>',3)->count();
            
            // Data Kuis 1
            $data['dataSiswa'][$letter]['totalKuis1'] = Nilai::select('siswa_id')->distinct()
                                                                    ->join('siswas','nilais.siswa_id','=','siswas.id')
                                                                    ->where('kelas', strtoupper($letter))                                                    
                                                                    ->where('jenis_kuis',1)->get();
            $data['dataSiswa'][$letter]['totalKuis1Lulus'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 1 AND n2.nilai > 75
                ORDER BY n1.siswa_id;
            ");
            $data['dataSiswa'][$letter]['totalKuis1Gagal'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 1 AND n2.nilai < 75
                ORDER BY n1.siswa_id;
            ");

            // Data Kuis 2
            $data['dataSiswa'][$letter]['totalKuis2'] = Nilai::select('siswa_id')->distinct()
                                                                    ->join('siswas','nilais.siswa_id','=','siswas.id')
                                                                    ->where('kelas', strtoupper($letter))                                                    
                                                                    ->where('jenis_kuis',2)->get();
            $data['dataSiswa'][$letter]['totalKuis2Lulus'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 2 AND n2.nilai > 75
                ORDER BY n1.siswa_id;
            ");
            $data['dataSiswa'][$letter]['totalKuis2Gagal'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 2 AND n2.nilai < 75
                ORDER BY n1.siswa_id;
            ");
            
            //Data Kuis 3    
            $data['dataSiswa'][$letter]['totalKuis3'] = Nilai::select('siswa_id')->distinct()
                                                                    ->join('siswas','nilais.siswa_id','=','siswas.id')
                                                                    ->where('kelas', strtoupper($letter))                                                    
                                                                    ->where('jenis_kuis',3)->get();
            $data['dataSiswa'][$letter]['totalKuis3Lulus'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 3 AND n2.nilai > 75
                ORDER BY n1.siswa_id;
            ");
            $data['dataSiswa'][$letter]['totalKuis3Gagal'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 3 AND n2.nilai < 75
                ORDER BY n1.siswa_id;
            ");
            
            // Data Evaluasi
            $data['dataSiswa'][$letter]['totalEvaluasi'] = Nilai::select('siswa_id')->distinct()
                                                                    ->join('siswas','nilais.siswa_id','=','siswas.id')
                                                                    ->where('kelas', strtoupper($letter))                                                    
                                                                    ->where('jenis_kuis',4)->get();
            $data['dataSiswa'][$letter]['totalEvaluasiLulus'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 4 AND n2.nilai > 75
                ORDER BY n1.siswa_id;
            ");
            $data['dataSiswa'][$letter]['totalEvaluasiGagal'] = DB::select("
                SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                    SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                ) as n1
                LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                INNER JOIN siswas s ON n1.siswa_id = s.id
                WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 4 AND n2.nilai < 75
                ORDER BY n1.siswa_id;
            ");
            
        }
        // dd($data['dataSiswaA']['totalKuis1Lulus']);
        return view('guru.dashboard', $data);
    }

    function dataSiswa()
    {
        foreach (range('a', 'd') as $letter) {
            $data['dataSiswa'][$letter] = Siswa::where('kelas', strtoupper($letter))->get();
            for ($i = 0; $i < count($data['dataSiswa'][$letter]); $i++) {
                $siswaId = $data['dataSiswa'][$letter][$i]->id;
                $data['dataSiswa'][$letter][$i]['kuis1'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 1)->count();
                $data['dataSiswa'][$letter][$i]['kuis2'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 2)->count();
                $data['dataSiswa'][$letter][$i]['kuis3'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 3)->count();
                $data['dataSiswa'][$letter][$i]['evaluasi'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 4)->count();
            }
        }
        return view('guru.data-siswa', $data);
    }
    function getDataSiswa($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        $siswa['user'] = $siswa->user;

        return response()->json($siswa);
    }
    function editDataSiswa($id, Request $request)
    {
        $request->validate([
            'namaInput' => 'required',
            'nisnInput' => 'required',
            'passwordInput' => 'confirmed'
        ]);

        $siswa = Siswa::where('id', $id)->first();
        $siswa->nisn = $request->nisnInput;
        $siswa->save();

        if ($request->emailInput != $siswa->user->email) {
            $request->validate([
                'emailInput' => 'required|email|unique:users,email'
            ]);
        }

        User::where('id', $siswa->user->id)->update([
            'name' => $request->namaInput,
            'email' => $request->emailInput,
        ]);

        

        if ($request->passwrdInput != '') {
            User::where('id', $siswa->user->id)->update([
                'password' => Hash::make($request->passwordInput)
            ]);
        }

        return response()->redirectTo(route('guru.dataSiswa'))->with('success', 'Data berhasil diubah');
    }
    function deleteDataSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        User::find($siswa->user->id)->delete();
        $siswa->delete();

        return response([
            'message' => 'Data berhasil dihapus!'
        ]);
    }

    function dataNilai()
    {
        foreach (range('a', 'd') as $letter) {
            $data['dataSiswa'][$letter] = Siswa::where('kelas', strtoupper($letter))->get();
            for ($i = 0; $i < count($data['dataSiswa'][$letter]); $i++) {
                $siswaId = $data['dataSiswa'][$letter][$i]->id;
                $data['dataSiswa'][$letter][$i]['kuis1Latest'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 1)->latest()->first();
                $data['dataSiswa'][$letter][$i]['kuis2Latest'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 2)->latest()->first();
                $data['dataSiswa'][$letter][$i]['kuis3latest'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 3)->latest()->first();
                $data['dataSiswa'][$letter][$i]['evaluasiLatest'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 4)->latest()->first();
            }

            // dd($data['dataSiswa']['a'][1]['kuis1Latest']);
        }
        return view('guru.data-nilai', $data);
    }

    function getDataNilai($id)
    {
        $kuis1 = Nilai::where('siswa_id', $id)->where('jenis_kuis', 1)->latest()->get();
        $kuis2 = Nilai::where('siswa_id', $id)->where('jenis_kuis', 2)->latest()->get();
        $kuis3 = Nilai::where('siswa_id', $id)->where('jenis_kuis', 3)->latest()->get();
        $evaluasi = Nilai::where('siswa_id', $id)->where('jenis_kuis', 4)->latest()->get();

        return response()->json([
            'kuis1' => $kuis1,
            'kuis2' => $kuis2,
            'kuis3' => $kuis3,
            'evaluasi' => $evaluasi,
        ]);
    }
}
