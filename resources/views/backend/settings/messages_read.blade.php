@extends('backend.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">From: {{ $message->name }}</h5>
        <br>
        <h5 class="card-title">Email: {{ $message->email }}</h5>
        <br>
        <h5 class="card-title">{{ $message->subject }}</h5>
        <br>
        <p>{{ $message->message }}</p>
        <br>
        <a href="{{ route('messages') }}" class="btn btn-success">exit</a>
      </div>
    </div>
  </div>
  @endsection
