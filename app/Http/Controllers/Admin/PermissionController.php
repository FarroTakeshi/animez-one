<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Permission;

class PermissionController extends Controller
{
    public function index() {
        $permissions = Permission::all();

        return view('permission.index', compact('permissions'));
    }

    public function create(){
        return view('permission.create');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required',
        ]);

        $permission = Permission::create([
            'permission_name' => request('name'),
            'description'     => request('description'),
        ]);

        return redirect()->route('permission.index')
                         ->with('message', 'New permission registered successfully');
    }
    public function edit(Permission $permission){
        return view('permissions.edit', compact('permission'));
    }
    public function update(Permission $permission){
        $this->validate(request(), [
            'name' => 'required',
        ]);

        $permission->permission_name = request('name');
        $permission->description     = request('description');

        $permission->save();

        return redirect()->route('permission.index')
                         ->with('message', 'Permission updated successfully');
    }
    public function delete(Permission $permission){
        $permission->delete();

        return redirect()->route('permission.index')
                         ->with('message', 'Permission deleted successfully');
    }
}
