<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatSend implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $senderId, $senderName, $pesan, $diskusiId, $kelasId, $waktuTerkirim;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($senderId, $pesan, $diskusiId)
    {
        $this->senderId = $senderId;
        $senderData = User::find($senderId);
        $this->senderName = $senderData->name;
        $this->pesan = $pesan;
        $this->diskusiId = $diskusiId;
        $this->kelasId = $senderData->siswa->kelas_id;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $this->waktuTerkirim = date("H:i");
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('chat.diskusi-' . $this->diskusiId . '-' . $this->kelasId ),
        ];
    }

    public function broadcastAs()
    {
        return 'ChatSend';
    }
}
