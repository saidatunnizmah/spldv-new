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
    public $senderId, $senderName, $pesan, $bab, $page, $kelas, $waktuTerkirim;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($senderId, $pesan, $bab, $page, $kelas)
    {
        $this->senderId = $senderId;
        $senderData = User::find($senderId);
        $this->senderName = $senderData->name;
        $this->pesan = $pesan;
        $this->bab = $bab;
        $this->page = $page;
        $this->kelas = $kelas;
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
            new PrivateChannel('chat.' . $this->bab . '-' . $this->page . $this->kelas),
        ];
    }

    public function broadcastAs()
    {
        return 'ChatSend';
    }
}
