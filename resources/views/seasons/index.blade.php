@extends('layouts.base')
 
@section('content')

<div class="content-box big-box">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Year</th>
        <th>Actions</th>
      </thead>
      <tbody>
        @foreach($seasons as $season)
          <tr>
            <td>{{ $season->name }}</td>
            <td>{{ $season->start_date }}</td>
            <td>{{ $season->end_date }}</td>
            <td>{{ $season->year }}</td>
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection