@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
    <form id="form_season" class="" method="POST" enctype="multipart/form-data" {!! csrf_field() !! >
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="name_season">
      </div>

      <div class="form-group">
        <label>Fecha de Inicio</label>
        <input type="date" class="form-control" name="start_season">
      </div>

      <div  class="form-group">
        <label>Fecha de Fin</label>
        <input type="date" class="form-control" name="end_season">
      </div>

      <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-upload"></i>
        <span>Registrar</span>
      </button>

    </form>
</div>
@endsection