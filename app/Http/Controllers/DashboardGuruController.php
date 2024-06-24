<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardGuruController extends Controller
{
    function index()
    {
        $data['kelas'] = Kelas::with('siswa')->get();
        
        foreach ($data['kelas'] as $kelas) {
            $data['kuis1'][$kelas->id] = Nilai::select('siswa_id')->distinct()
                                                                    ->join('siswas','nilais.siswa_id','=','siswas.id')
                                                                    ->where('kelas_id', $kelas->id)                                                    
                                                                    ->where('jenis_kuis',1)->count();
            
            $data['kuis1Lulus'][$kelas->id] =  DB::select("
                    SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                        SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                    ) as n1
                    LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                    INNER JOIN siswas s ON n1.siswa_id = s.id
                    WHERE s.kelas_id = '". $kelas->id ."' AND n2.jenis_kuis = 1 AND n2.nilai > 75
                    ORDER BY n1.siswa_id;
            ");                                                      
            $data['kuis1Gagal'][$kelas->id] =  DB::select("
                    SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
                        SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
                    ) as n1
                    LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
                    INNER JOIN siswas s ON n1.siswa_id = s.id
                    WHERE s.kelas_id = '". $kelas->id ."' AND n2.jenis_kuis = 1 AND n2.nilai < 75
                    ORDER BY n1.siswa_id;
            ");                                                      
        }
        // foreach(range('a','d') as $letter){
        //     $data['dataSiswa'][$letter]['totalSiswa'] = Siswa::where('kelas',strtoupper($letter))->count();

        //     $data['dataSiswa'][$letter]['bab0'] = Siswa::where('kelas',strtoupper($letter))->where('bab',0)->count();
        //     $data['dataSiswa'][$letter]['bab1'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',1)->count();
        //     $data['dataSiswa'][$letter]['bab2'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',2)->count();
        //     $data['dataSiswa'][$letter]['bab3'] = Siswa::where('kelas',strtoupper($letter))->where('bab','=',3)->count();
        //     $data['dataSiswa'][$letter]['selesai'] = Siswa::where('kelas',strtoupper($letter))->where('bab','>',3)->count();
            
        //     // Data Kuis 1
        //     $data['dataSiswa'][$letter]['totalKuis1'] = Nilai::select('siswa_id')->distinct()
        //                                                             ->join('siswas','nilais.siswa_id','=','siswas.id')
        //                                                             ->where('kelas', strtoupper($letter))                                                    
        //                                                             ->where('jenis_kuis',1)->get();
        //     $data['dataSiswa'][$letter]['totalKuis1Lulus'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 1 AND n2.nilai > 75
        //         ORDER BY n1.siswa_id;
        //     ");
        //     $data['dataSiswa'][$letter]['totalKuis1Gagal'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 1 AND n2.nilai < 75
        //         ORDER BY n1.siswa_id;
        //     ");

        //     // Data Kuis 2
        //     $data['dataSiswa'][$letter]['totalKuis2'] = Nilai::select('siswa_id')->distinct()
        //                                                             ->join('siswas','nilais.siswa_id','=','siswas.id')
        //                                                             ->where('kelas', strtoupper($letter))                                                    
        //                                                             ->where('jenis_kuis',2)->get();
        //     $data['dataSiswa'][$letter]['totalKuis2Lulus'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 2 AND n2.nilai > 75
        //         ORDER BY n1.siswa_id;
        //     ");
        //     $data['dataSiswa'][$letter]['totalKuis2Gagal'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 2 AND n2.nilai < 75
        //         ORDER BY n1.siswa_id;
        //     ");
            
        //     //Data Kuis 3    
        //     $data['dataSiswa'][$letter]['totalKuis3'] = Nilai::select('siswa_id')->distinct()
        //                                                             ->join('siswas','nilais.siswa_id','=','siswas.id')
        //                                                             ->where('kelas', strtoupper($letter))                                                    
        //                                                             ->where('jenis_kuis',3)->get();
        //     $data['dataSiswa'][$letter]['totalKuis3Lulus'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 3 AND n2.nilai > 75
        //         ORDER BY n1.siswa_id;
        //     ");
        //     $data['dataSiswa'][$letter]['totalKuis3Gagal'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 3 AND n2.nilai < 75
        //         ORDER BY n1.siswa_id;
        //     ");
            
        //     // Data Evaluasi
        //     $data['dataSiswa'][$letter]['totalEvaluasi'] = Nilai::select('siswa_id')->distinct()
        //                                                             ->join('siswas','nilais.siswa_id','=','siswas.id')
        //                                                             ->where('kelas', strtoupper($letter))                                                    
        //                                                             ->where('jenis_kuis',4)->get();
        //     $data['dataSiswa'][$letter]['totalEvaluasiLulus'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 4 AND n2.nilai > 75
        //         ORDER BY n1.siswa_id;
        //     ");
        //     $data['dataSiswa'][$letter]['totalEvaluasiGagal'] = DB::select("
        //         SELECT n1.siswa_id, n1.maxdate, n2.nilai FROM (
        //             SELECT siswa_id, MAX(created_at) as maxdate FROM nilais GROUP BY siswa_id  
        //         ) as n1
        //         LEFT JOIN nilais n2 ON n1.siswa_id = n2.siswa_id AND n2.created_at = n1.maxdate
        //         INNER JOIN siswas s ON n1.siswa_id = s.id
        //         WHERE s.kelas = '".$letter."' AND n2.jenis_kuis = 4 AND n2.nilai < 75
        //         ORDER BY n1.siswa_id;
        //     ");
            
        // }
        // dd($data['dataSiswaA']['totalKuis1Lulus']);
        // return view('guru.dashboard', $data);
        return view('guru.dashboard', $data);
    }

    // --------------- DATA SISWA --------------------------------
    function dataSiswa()
    {
        $data['kelas'] = Kelas::with('siswa')->get();
        
        foreach ($data['kelas'] as $kelas) {
            foreach ($kelas->siswa as $siswa) {
                $data['kuis1'][$kelas->id][$siswa->id] = Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis',1)->count();
                $data['kuis2'][$kelas->id][$siswa->id] = Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis',2)->count();
                $data['kuis3'][$kelas->id][$siswa->id] = Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis',3)->count();
                $data['evaluasi'][$kelas->id][$siswa->id] = Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis',4)->count();
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

    // ---------------------- DATA NILAI-------------------------
    function dataNilai()
    {
        $data['kelas'] = Kelas::with('siswa')->get();
        foreach ($data['kelas'] as $kelas) {
            foreach ($kelas->siswa as $siswa) {
                $data['kuis1Latest'][$kelas->id][$siswa->id]= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 1)->latest()->first();
                $data['kuis2Latest'][$kelas->id][$siswa->id]= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 2)->latest()->first();
                $data['kuis3Latest'][$kelas->id][$siswa->id]= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 3)->latest()->first();
                $data['evaluasiLatest'][$kelas->id][$siswa->id]= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 4)->latest()->first();
            }
        }
        return view('guru.data-nilai', $data);
    }

    function exportNilaiToPdfByKelas($id){
        $kelas = Kelas::with('siswa')->where('id',$id)->first();
        $data['kelas'] = $kelas;
        foreach ($kelas->siswa as $siswa) {
            $data['siswa'][$siswa->id]['data'] = $siswa;
            $data['siswa'][$siswa->id]['kuis1Latest']= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 1)->latest()->first();
            $data['siswa'][$siswa->id]['kuis2Latest']= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 2)->latest()->first();
            $data['siswa'][$siswa->id]['kuis3Latest']= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 3)->latest()->first();
            $data['siswa'][$siswa->id]['evaluasiLatest']= Nilai::where('siswa_id', $siswa->id)->where('jenis_kuis', 4)->latest()->first();
        }

        $pdf = Pdf::loadView('guru.export-nilai-kelas',$data);

        // return view('guru.export-nilai-kelas', $data);
        return $pdf->download('Nilai Siswa - Kelas '.$kelas->nama.'.pdf');
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

    // -------------------- DATA KELAS --------------------
    function dataKelas() {
        $data['kelas'] = Kelas::all();
        return view('guru.data-kelas', $data);
    }

    function storeKelas(Request $request) {
        $request->validate([
            'namaInput' => 'required|unique:kelas,nama'
        ]);

        Kelas::create([
            'nama' => $request->namaInput
        ]);

        return redirect()->route('guru.dataKelas')->with('success', 'Kelas berhasil dibuat!');
    }

    function updateKelas(Request $request, $id) {
        $kelas = Kelas::findOrFail($id);
        
        $request->validateWithBag('edit',[
            'namaEditInput' => 'required'
        ],[
            'namaEditInput.required' => 'Nama tidak boleh kosong'
        ]);

        if ($request->namaInput != $kelas->nama) {
            $request->validateWithBag('edit',[
                'namaEditInput' => 'unique:kelas,nama'
            ],[
                'namaEditInput.unique' => 'Nama kelas sudah ada'
            ]);
        }

        $kelas->update([
            'nama' => $request->namaEditInput
        ]);

        return redirect()->route('guru.dataKelas')->with('success', 'Kelas berhasil disimpan!');
    }

    function deleteKelas($id) {
        $kelas = Kelas::findOrFail($id);
        $siswaKelas = Siswa::where('kelas_id', $kelas->id)->delete();
        
        $kelas->delete();
        return redirect()->route('guru.dataKelas')->with('success', 'Kelas berhasil dihapus!');   
    }

    function getDataKelasById($id) {
        $kelas = Kelas::findOrFail($id);

        return response()->json($kelas);
    }

    // ------------------ SET KUIS -------------------------
    function setKuis() {
        return view('guru.set-kuis');
    }

    function lihatSet($kuis, $set) {
        $dataKuis = [
            1 => [
                'kuis' => "Bentuk Umum SPLDV",
                'jumlahSoal' => 6,
            ],
            2 => [
                'kuis' => "Penyelesaian SPLDV",
                'jumlahSoal' => 10,
            ],
            3 => [
                'kuis' => "Penerapan SPLDV",
                'jumlahSoal' => 4,
            ],
            4 => [
                'kuis' => "Evaluasi",
                'jumlahSoal' => 10,
            ]
        ];
        $data['kuis'] = $kuis;
        $data['set'] = $set;
        $data['jumlahSoal'] = $dataKuis[$kuis]['jumlahSoal'];
        $data['judulKuis'] = $dataKuis[$kuis]['kuis'];

        for ($i=1; $i <= $dataKuis[$kuis]['jumlahSoal']; $i++) { 
            if (in_array($kuis, [1,2])) {
                $data['soal'][$i] = view('kuis.'.$kuis.'-'. $i .'_'. $set);
            }else{
                $data['soal'][$i] = view('kuis.'.$kuis.'-'. $i);
            }
        }

        return view('guru.lihat-set', $data);
    }
}
