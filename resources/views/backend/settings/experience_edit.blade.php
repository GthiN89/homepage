@extends('backend.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Experience</h4>
        <p class="card-description"> Here you can add your experiences </p>
        <form action="{{ url('/settings/experience/update/'.$experience->id) }}" class="forms-sample" method="POST" >
            @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Start Date</label>
            <input type="text" name="start_date" class="form-control" id="exampleInputUsername1" value="{{ $experience->start_date }}">
            @if ($errors->has('start_date'))
            <span class="text-danger">{{ $errors->first('start_date') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">End date</label>
            <input type="text" name="end_date" class="form-control" id="exampleInputEmail1" value="{{ $experience->end_date }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Name</label>
            <input type="text" name="company" class="form-control" id="exampleInputEmail1" value="{{ $experience->company }}">
            @if ($errors->has('company'))
            <span class="text-danger">{{ $errors->first('company') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <input type="text" name="location" class="form-control" id="exampleInputEmail1" value="{{ $experience->location }}">
            @if ($errors->has('location'))
            <span class="text-danger">{{ $errors->first('location') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Role</label>
            <input type="text" name="role" class="form-control" id="exampleInputEmail1" value="{{ $experience->role }}">
            @if ($errors->has('role'))
            <span class="text-danger">{{ $errors->first('role') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">About Job</label>
            <textarea name="text" class="form-control" id="exampleTextarea1" rows="4">{{ $experience->text }}</textarea>
            @if ($errors->has('text'))
            <span class="text-danger">{{ $errors->first('text') }}</span>
            @endif
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('dashboard') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  @endsection
