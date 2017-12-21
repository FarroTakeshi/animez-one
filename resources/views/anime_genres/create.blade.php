@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
  <div>
    <h2>Create Season</h2>
  </div>

  @if ($errors->all())
  <div class="alert alert-danger">
    <ul class="parsley-errors-list filled">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form id="form_anime_genre" class="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>

    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-upload"></i>
      <span>Register</span>
    </button>

    </form>
</div>
@endsection