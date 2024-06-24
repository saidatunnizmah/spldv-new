<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    function index() {
        $data['diskusi0_1'] = Diskusi::where('bab',0)->where('page',1)->get();
        $data['diskusi1_1'] = Diskusi::where('bab',1)->where('page',1)->get();
        $data['diskusi1_2'] = Diskusi::where('bab',1)->where('page',2)->get();
        $data['diskusi2_1'] = Diskusi::where('bab',2)->where('page',1)->get();
        $data['diskusi2_2'] = Diskusi::where('bab',2)->where('page',2)->get();
        $data['diskusi3_1'] = Diskusi::where('bab',3)->where('page',1)->get();

        return view('guru.diskusi-materi', $data);
    }

    function create(Request $request) {
        // dd($request);
        $request->validateWithBag('tambah',[
            'judulDiskusi' => 'required',
            'deskripsiDiskusi' => 'required',
            'babSelect' => 'required',
            'pageSelect' => 'required'
        ]);

        Diskusi::create([
            'judul' => $request->judulDiskusi,
            'deskripsi' =>$request->deskripsiDiskusi,
            'bab' => $request->babSelect,
            'page' => $request->pageSelect,
        ]);

        return redirect()->route('guru.diskusi')->with('success', 'Diskusi berhasil dibuat!');
    }

    function update(Request $request, $id){
        $diskusi = Diskusi::findOrFail($id);

        $request->validateWithBag('edit',[
            'judulDiskusi' => 'required',
            'deskripsiDiskusi' => 'required',
            'babSelect' => 'required',
            'pageSelect' => 'required'
        ]);

        $diskusi->update([
            'judul' => $request->judulDiskusi,
            'deskripsi' =>$request->deskripsiDiskusi,
            'bab' => $request->babSelect,
            'page' => $request->pageSelect,
        ]);

        return redirect()->route('guru.diskusi')->with('success', 'Diskusi berhasil diubah!');
    }

    function destroy($id){
        $diskusi = Diskusi::findOrFail($id);
        $chats = Chat::where('diskusi_id', $diskusi->id)->get();
        foreach ($chats as $chat) {
            $chat->delete();
        }
        $diskusi->delete();

        return redirect()->route('guru.diskusi')->with('success', 'Diskusi berhasil dihapus!');
    }

    function getDiskusiById($id){
        $diskusi = Diskusi::findOrFail($id);

        return response()->json($diskusi);
    }

    function getAllDiskusiByBabPage($bab, $page) {
        $diskusi = Diskusi::where('bab', $bab)
                    ->where('page', $page)
                    ->latest()->get();

        return response()->json($diskusi);
    }
}
