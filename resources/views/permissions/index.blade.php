@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
  @if(session()->has('message'))
  <div class="alert alert-{{ strpos( session('message') , 'deleted') ? 'danger' : 'success' }}"> {{ session('message') }}</div>
  @endif
  <div>
    <h2>Permissions</h2>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
      </thead>
      <tbody>
        @foreach($permissions as $permission)
          <tr>
            <td>{{ $permission->permission_name }}</td>
            <td>{{ $permission->description }}</td>
            <td>
              <a class="btn btn-default btn-square" href="{{ route('permission.edit', compact('permission')) }}">
                <span class="fa fa-edit"></span> Edit
              </a>
              <a class="btn btn-danger btn-square" href="{{ route('permission.delete', compact('permission')) }}">
                <span class="fa fa-remove"></span> Delete
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div>
    <a class="btn btn-default btn-square" href="{{ route('anime.index') }}">
      <span class="fa fa-fw fa-undo"></span> Return
    </a>
    <a class="btn btn-success btn-square" type="button" href="{{ route('permission.create') }}">
      <span class=" fa fa-fw fa-book"></span> Add Permission
    </a>
  </div>
</div>
@endsection