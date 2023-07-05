<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['instansi'];

    public function kecamatan()
    {
        return $this->belongsToMany(Kecamatan::class, 'binaans');
    }

    public function desa()
    {
        return $this->belongsToMany(Desa::class, 'binaans');
    }
}
