<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardSiswaController extends Controller
{
    function index()
    {
        $siswaId = auth()->user()->siswa->id;
        $data['nilaiKuis1'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 1)->latest()->take(8)->get();
        $data['nilaiKuis2'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 2)->latest()->take(8)->get();
        $data['nilaiKuis3'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 3)->latest()->take(8)->get();
        $data['nilaiEvaluasi'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 4)->latest()->take(8)->get();

        return view('siswa.dashboard', $data);
    }

    function daftarMateri()
    {
        $siswaId = auth()->user()->siswa->id;
        $data['siswa'] = auth()->user()->siswa;

        if ($data['siswa']->bab == 0) {
            $data['progress1'] = 0;
            $data['progress2'] = 0;
            $data['progress3'] = 0;
        } elseif ($data['siswa']->bab == 1) {
            $data['progress2'] = 0;
            $data['progress3'] = 0;
            if ($data['siswa']->page == 1) {
                $data['progress1'] = 0;
            } elseif ($data['siswa']->page == 2) {
                $data['progress1'] = 50;
            }
        } elseif ($data['siswa']->bab == 2) {
            $data['progress1'] = 100;
            $data['progress3'] = 0;
            if ($data['siswa']->page == 1) {
                $data['progress2'] = 0;
            } elseif ($data['siswa']->page == 2) {
                $data['progress2'] = 50;
            }
        } elseif ($data['siswa']->bab == 3) {
            $data['progress1'] = 100;
            $data['progress2'] = 100;
            $data['progress3'] = 0;
        } else {
            $data['progress1'] = 100;
            $data['progress2'] = 100;
            $data['progress3'] = 100;
        }
        $data['nilaiKuis1'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 1)->latest()->take(3)->get();
        $data['nilaiKuis2'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 2)->latest()->take(3)->get();
        $data['nilaiKuis3'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 3)->latest()->take(3)->get();
        $data['nilaiEvaluasi'] = Nilai::where('siswa_id', $siswaId)->where('jenis_kuis', 4)->latest()->take(3)->get();

        return  view('siswa.daftar-materi', $data);
    }

    function perihal()
    {
        return view('siswa.perihal');
    }

    function progressSiswa() {
        $data['kuis1'] = Nilai::where('siswa_id', auth()->user()->siswa->id)->where('jenis_kuis',1)->latest()->get();
        $data['kuis2'] = Nilai::where('siswa_id', auth()->user()->siswa->id)->where('jenis_kuis',2)->latest()->get();
        $data['kuis3'] = Nilai::where('siswa_id', auth()->user()->siswa->id)->where('jenis_kuis',3)->latest()->get();
        $data['evaluasi'] = Nilai::where('siswa_id', auth()->user()->siswa->id)->where('jenis_kuis',4)->latest()->get();
        return view('siswa.progress',$data);
    }
}
