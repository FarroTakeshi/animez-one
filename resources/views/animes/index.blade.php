@extends('layouts.base')
 
@push('extra-css')
    <link href="{{ asset('css/backend/animes.css') }}" rel="stylesheet">
@endpush

@push('extra-js')
    <script src="{{ asset('js/backend/animes.js') }}"></script>
@endpush

@section('content')
@if(session()->has('message'))
  <div class="alert alert-{{ strpos( session('message') , 'deleted') ? 'danger' : 'success' }}"> {{ session('message') }}</div>
@endif
<div class="container">
  <div class="row">
    <form action="{{url('/searchredirect')}}">
      <div class="projects-search">
        <input name = "query" type="text" class="search-input" v-model="search" placeholder="Search anime.."/>
        <button class="btn search-btn waves waves-effect waves-float" type="submit"><i class="fa fa-search"></i></button>
      </div>
    </form>
    <div class="col-md-12">
      @foreach($animes as $anime)
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              {{ $anime->name }}
            </h3>
          </div>
          <div class="panel-body">
            <div class="anime-image col-md-4">
              <a>
                <img class="img-responsive" src="{{ !empty( $anime->img_path ) ? asset( $anime->img_path ) : '' }}"/>
              </a>
            </div>
            <div class="anime-synopsis col-md-8">
              <strong>Synopsis:</strong>
              <p>{{ $anime->synopsis }}</p>
            </div>
            <div class="anime-value col-md-8">
              <strong>Score: </strong>
              <span>{{ $anime->valuation }} </span>
            </div>
             @if(!$is_a_guest && $user->isAdmin())
              <div class="anime-options">
                <a class="btn btn-default btn-square" href="{{ route('anime.edit', compact('anime')) }}">
                  <span class="fa fa-edit"></span> Edit
                </a>
                <a class="btn btn-danger btn-square" href="{{ route('anime.delete', compact('anime')) }}">
                  <span class="fa fa-remove"></span> Delete
                </a>
              </div>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div>
    <nav class="text-center">
      {{ $animes->links() }}
    </nav>
  </div>
  @if(!$is_a_guest && $user->isAdmin())
    <div class="row">
      <div>
        <a class="btn btn-success btn-square" type="button" href="{{ route('anime.create') }}">
          <span class=" fa fa-fw fa-optin-monster"></span> Add Anime
        </a>
      </div>
    </div>
  @endif
</div>
@endsection