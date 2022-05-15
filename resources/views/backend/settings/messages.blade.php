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
        <h4 class="card-title">Messages</h4>
        <p class="card-description"> Your messages.
        </p>
        <table class="table table-dark">
          <thead>
            <tr>
              <th> # </th>
              <th> Sender Name</th>
              <th> Sender E-mail</th>
              <th> Subject </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($messages as $message )
              <tr>
                <th> # </th>
                <th> {{ $message->name }}</th>
                <th> {{ $message->email }}</th>
                <th> {{ $message->subject }}</th>
                <th> <a href="{{ url('/message/read/'. $message->id) }}" class="btn btn-primary btn-sm">read</a> <a href="{{ url('/message/delete/'. $message->id) }}" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure?')) saveandsubmit(event);">delete</a></th>
            </tr>
              @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
