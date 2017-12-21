@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
  @if(session()->has('message'))
  <div class="alert alert-{{ strpos( session('message') , 'deleted') ? 'danger' : 'success' }}"> {{ session('message') }}</div>
  @endif
  <div>
    <h2>Anime Genres</h2>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>Name</th>
        <th>Actions</th>
      </thead>
      <tbody>
        @foreach($anime_genres as $anime_genre)
          <tr>
            <td>{{ $anime_genre->name }}</td>
            <td>
              <a class="btn btn-default btn-square" href="{{ route('anime_genre.edit', compact('anime_genre')) }}">
                <span class="fa fa-edit"></span> Edit
              </a>
              <a class="btn btn-danger btn-square" href="{{ route('anime_genre.delete', compact('anime_genre')) }}">
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
    <a class="btn btn-success btn-square" type="button" href="{{ route('anime_genre.create') }}">
      <span class=" fa fa-fw fa-university"></span> Add Anime genre
    </a>
  </div>
</div>
@endsection