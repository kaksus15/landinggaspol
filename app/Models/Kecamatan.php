<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['kecamatan'];

    public function instansi()
    {
        return $this->belongsToMany(Instansi::class, 'binaans');
    }
}
