<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherAuthController extends Controller
{
    function authenticate(Request $request)
    {
        $pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'encrypted' => true
            ]
        );

        $socketId = $request->socket_id;
        $channelName = $request->channel_name;
        $user = auth()->user();

        $presenceData = [
            'user_id' => $user->id,
            // 'user_id' => $userId,
            'user_info' => [
                // 'name' => $userName
                'name' => $user->name,
                'role' => $user->role,
            ]
        ];

        $response = $pusher->authorizePresenceChannel($channelName, $socketId, $user->id, $presenceData);
        return response($response);
    }
}
