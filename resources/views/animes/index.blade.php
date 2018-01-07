@extends('layouts.base')
 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="row mb-lg">
        @foreach($animes as $anime)
        <div class="panel">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                  {{$anime->name}}
              </h3>
            </div>
            <div class="panel-body">
              <div class="anime-image col-xs-2">
                <a>
                  <img class="img-responsive" src="{{ count($anime->img_path) > 0 ? $anime->img_path : '' }}"/>
                </a>
              </div>
              <div class="anime-synopsis col-xs-10">
                <p>{{$anime->synopsis}}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection