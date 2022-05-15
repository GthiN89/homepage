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
        <h4 class="card-title">Skills</h4>
        <p class="card-description"> Skills settings
            <br>
            <a href="{{ route('settings.skills.add') }}" class="btn btn-primary btn-sm">Add skill</a>
        </p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th> # </th>
              <th> Skill</th>
              <th> About skill </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($skills as $skill )
              <tr>
                <th> # </th>
                <th> {{ $skill->header }}</th>
                <th> {{Str::limit($skill->text, 20)}}</th>
                <th> <a href="{{ url('/settings/skills/edit/'. $skill->id) }}" class="btn btn-primary btn-sm">edit</a> <a href="{{ url('/settings/skills/delete/'. $skill->id) }}" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure?')) saveandsubmit(event);">delete</a></th>
            </tr>
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
