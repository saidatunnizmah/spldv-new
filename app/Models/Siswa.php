<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kelas',
        'nisn',
        'bab',
        'page',
        'progress'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function nilai(){
        return $this->hasMany(Nilai::class);
    }
}
