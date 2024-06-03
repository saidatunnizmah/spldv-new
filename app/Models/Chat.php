<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
