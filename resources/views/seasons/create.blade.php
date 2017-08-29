@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
    <form id="form_season" class="" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
      </div>

      <div class="form-group">
        <label>Start Date</label>
        <input type="date" class="form-control" name="start_date">
      </div>

      <div  class="form-group">
        <label>End Date</label>
        <input type="date" class="form-control" name="end_date">
      </div>

      <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-upload"></i>
        <span>Register</span>
      </button>

    </form>
</div>
@endsection