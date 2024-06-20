<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    function create(Request $request) {
        Diskusi::create([
            'kelas_id' => auth()->user()->siswa->kelas_id,
            'judul' => $request->judulDiskusi,
            'pembuat' => auth()->user()->name,
            'bab' => $request->bab,
            'page' => $request->page,
            'status' => 'open'
        ]);

        return response()->json([
            'alert' => 'success',
            'msg' => 'Berhasil membuat diskusi baru!'
        ]);
    }

    function getAllDiskusiByBabPage($bab, $page) {
        $diskusi = Diskusi::where('kelas_id', auth()->user()->siswa->kelas_id)
                    ->where('bab', $bab)
                    ->where('page', $page)
                    ->latest()->get();

        return response()->json($diskusi);
    }
}
