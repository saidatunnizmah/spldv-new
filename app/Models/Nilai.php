<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'jenis_kuis',
        'nilai',
        'percobaan',
        'waktu_pengerjaan'
    ];

    function siswa() {
        return $this->belongsTo(Siswa::class);
    }
}
