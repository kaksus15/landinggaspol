<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donatur extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['donatur', 'jumlah_telur', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
