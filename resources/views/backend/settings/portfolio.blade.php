@extends('backend.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Portfolio</h4>
        <p class="card-description"> Portfolio settings
            <br>
            <a href="{{ route('settings.portfolio.add') }}" class="btn btn-primary btn-sm">Add Project</a>
        </p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th> # </th>
              <th> Project Name</th>
              <th> Link </th>
              <th> github </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($portfolios as $portfolio )
              <tr>
                <th> # </th>
                <th> {{ $portfolio->name }}</th>
                <th> {{ $portfolio->link }}</th>
                <th> {{ $portfolio->github }}</th>
                <th> <a href="{{ url('/settings/portfolio/edit/'. $portfolio->id) }}" class="btn btn-primary btn-sm">edit</a> <a href="{{ url('/settings/portfolio/delete/'. $portfolio->id) }}" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure?')) saveandsubmit(event);">delete</a></th>
            </tr>
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
