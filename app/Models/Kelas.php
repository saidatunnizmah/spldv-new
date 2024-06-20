<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    function siswa() : HasMany {
        return $this->hasMany(Siswa::class);
    }
}
