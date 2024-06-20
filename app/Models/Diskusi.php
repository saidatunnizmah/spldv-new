<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diskusi extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'createdd_at', 'updated_at'];

    function kelas(): BelongsTo {
        return $this->belongsTo(Kelas::class);
    }

    function chat() : HasMany {
        return $this->hasMany(Chat::class);
    }
}
