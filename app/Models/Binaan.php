<?php

namespace App\Models;

use App\Models\Desa;
use App\Models\Instansi;
use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Binaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }


    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
