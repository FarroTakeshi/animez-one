<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['role_name'];

    public function users(){
        return $this->belongsToMany(User::class, 'roles_x_users', 'role_id', 'user_id');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'roles_x_permissions', 'role_id', 'permission_id');
    }
}
