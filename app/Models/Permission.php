<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // many to many
    public function role()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    // one to many
    public function permission_role()
    {
        return $this->hasMany('App\Models\PermissionRole', 'permission_id');
    }
}
