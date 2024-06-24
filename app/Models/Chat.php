<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'diskusi_id',
        'kelas_id',
        'user_id',
        'pesan',
        'bab',
        'page',
        'kelas',
        'waktu_terkirim'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function diskusi() : BelongsTo {
        return $this->belongsTo(Diskusi::class);
    }
}
