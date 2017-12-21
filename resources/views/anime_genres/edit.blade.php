@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
  <div>
    <h2>Edit Anime genre</h2>
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
      <input type="text" class="form-control" name="name" value="{{ $anime_genre->name }}">
    </div>

    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-upload"></i>
      <span>Update</span>
    </button>

    </form>
</div>
@endsection