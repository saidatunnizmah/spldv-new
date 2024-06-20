<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Events\ChatSend;
use App\Models\Diskusi;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    function getChatsByDiskusi($diskusiId) {
        $diskusi = Diskusi::findOrFail($diskusiId);
        $chats = Chat::where('diskusi_id', $diskusiId)->get();
        foreach ($chats as $chat) {
            $chat['senderName'] = $chat->user->name;
        }
        return response()->json([
            'diskusi' => $diskusi,
            'chats' => $chats
        ]);
    }

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
            'diskusi_id' => $request->diskusiId,
            'pesan' => $request->pesan,
            'waktu_terkirim' => date("H:i")
        ]);

        if ($newChat) {
            event(new ChatSend(auth()->user()->id, $request->pesan, $request->diskusiId));

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
