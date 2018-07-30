<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['permission_name', 'description'];

    public function roles(){
        return $this->belongsToMany(Role::class, 'roles_x_permissions', 'permission_id', 'role_id');
    }
}
