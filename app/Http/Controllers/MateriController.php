<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MateriController extends Controller
{
    private $materi = [
        ['Apersepsi'],
        ['Pengenalan SPLDV', 'Bentuk Umum SPLDV'],
        ['Penyelesaian SPLDV: Metode Eliminasi', 'Penyelesaian SPLDV: Metode Substitusi'],
        ['Penerapan SPLDV']
    ];

    function index($bab, $page)
    {
        $data['btnSebelumnya'] = true;
        $data['btnSelanjutnya'] = [
            'type' => 'page',
            'url' => route('siswa.materi', ['bab' => $bab, 'page' => $page + 1])
        ];
        $data['bab'] = $bab;
        $data['page'] = $page;
        $countBabPage = count($this->materi[$bab]);

        if ($page == 1) {
            $data['btnSebelumnya'] = false;
        }

        if ($bab == 0) {
            $data['btnSelanjutnya']['type'] = 'bab';
            $data['btnSelanjutnya']['url'] = route('siswa.materi', ['bab' => $bab + 1, 'page' => 1]);
        } elseif ($page == $countBabPage) {
            $data['btnSelanjutnya']['type'] = 'modal';
        }
        
        $data['title'] = $this->materi[$bab][$page - 1];
        $data['materi'] = view('materi.' . $bab . '-' . $page);
        return view('siswa.materi', $data);
    }

    function updateProgress(Request $request)
    {
        $siswaId = auth()->user()->siswa->id;
        $bab = $request->bab;
        $page = $request->page;
        // $totalCek = $request->totalCek;
        // $cekSelesai = $request->cekSelesai;
        // $progress = $cekSelesai / $totalCek * 100;
        $progress = $request->progress;

        $siswa = Siswa::where('id', $siswaId)->first();
        if ($siswa->bab > $bab || ($siswa->bab == $bab && $siswa->page > $page)) {
            return response([
                'status' => 'no-change'
            ]);
        }

        if ($bab == 0) {
            $bab++;
            $page = 1;
            $progress = 0;
            $jalan = 1;
        } elseif (($bab == 1 || $bab == 2) && $page == 2) {
            $bab++;
            $page = 1;
            $jalan = 2;
        } elseif ($bab == 3) {
            $bab++;
            $page = 1;
            $jalan = 3;
        } else {
            $page++;
            $jalan = 4;
        }

        $siswa->update([
            'bab' => $bab,
            'page' => $page,
            'progress' => $progress
        ]);

        return response([
            'status' => 'updated',
            'jalan' => $jalan
        ]);
    }
}
