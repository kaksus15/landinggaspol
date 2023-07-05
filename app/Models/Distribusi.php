<?php

namespace App\Models;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distribusi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relasi dengan table kecamatan
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    // relasi dengant table desa
    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
