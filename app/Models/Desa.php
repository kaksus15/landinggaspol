<?php

namespace App\Models;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['kecamatan_id', 'desa'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function instansi()
    {
        return $this->belongsToMany(Instansi::class, 'binaans');
    }
}
