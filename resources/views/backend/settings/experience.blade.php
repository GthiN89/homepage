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
        <h4 class="card-title">Experience</h4>
        <p class="card-description"> Work experiences settings
            <br>
            <a href="{{ route('settings.experience.add') }}" class="btn btn-primary btn-sm">Add experience</a>
        </p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th> # </th>
              <th> Start Date</th>
              <th> End Date </th>
              <th> Company </th>
              <th> Location </th>
              <th> Role </th>
              <th> Text </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($experiences as $experience )
              <tr>
                <th> # </th>
                <th> {{ $experience->start_date }}</th>
                <th>
                    @if ($experience->end_date == NULL)
                        Current
                    @else
                        {{ $experience->end_date }}
                    @endif
                </th>
                <th> {{ $experience->company }}</th>
                <th> {{ $experience->location }} </th>
                <th> {{ $experience->role }} </th>
                <th> {{Str::limit($experience->text, 20)}} </th>
                <th> <a href="{{ url('/settings/experience/edit/'. $experience->id) }}" class="btn btn-primary btn-sm">edit</a> <a href="{{ url('/settings/experience/delete/'. $experience->id) }}" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure?')) saveandsubmit(event);">delete</a></th>
            </tr>
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
