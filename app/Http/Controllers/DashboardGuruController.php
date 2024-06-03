<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardGuruController extends Controller
{
    function index()
    {
        return view('guru.dashboard');
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
