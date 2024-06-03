<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Events\ChatSend;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    function getDataChat(Request $request)
    {
        $kelas = $request->query('k');
        $bab = $request->query('b');
        $page = $request->query('p');

        $dataChat = Chat::where('kelas', $kelas)->where('bab', $bab)->where('page', $page)->get();
        for ($i = 0; $i < count($dataChat); $i++) {
            $dataChat[$i]['senderName'] = $dataChat[$i]->user->name;
        }
        return response()->json([
            'data' => $dataChat,
            // 'length' => count($dataChat)
        ]);
    }

    function sendChat(Request $request)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $newChat = Chat::create([
            'user_id' => auth()->user()->id,
            'pesan' => $request->pesan,
            'bab' => $request->bab,
            'page' => $request->page,
            'kelas' => $request->kelas,
            'waktu_terkirim' => date("H:i")
        ]);

        if ($newChat) {
            event(new ChatSend(auth()->user()->id, $request->pesan, $request->bab, $request->page, $request->kelas));

            return response()->json([
                'msg' => 'Berhasil Terkirim',
                'chat_id' => $newChat->id,
                'chat_content' => $newChat->pesan,
                'sender_id' => auth()->user()->id
            ]);
        } else {
            return response()->json([
                'status' => 'false',
                'msg' => "Terjadi kesalahan!"
            ]);
        }
    }
}
