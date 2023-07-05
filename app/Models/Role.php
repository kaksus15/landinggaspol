<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // many to many
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function permission()
    {
        // return $this->belongsToMany('App\Models\Permission');
        return $this->belongsToMany(Permission::class);
    }

    // one to many
    public function role_user()
    {
        return $this->hasMany('App\Models\RoleUser', 'role_id');
    }

    public function permission_role()
    {
        return $this->hasMany('App\Models\PermissionRole', 'role_id');
    }
}
