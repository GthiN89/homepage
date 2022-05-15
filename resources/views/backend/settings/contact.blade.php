@extends('backend.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
      <div class="card-body">
        <h4 class="card-title">Contact section settings</h4>
        <p class="card-description"> Here you can change your home section settings </p>
        <form action="{{ route('settings.contact.update') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ $contact->name }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Role</label>
            <input type="text" class="form-control" name="role" id="exampleInputName1" value="{{ $contact->role }}">
            @if ($errors->has('role'))
            <span class="text-danger">{{ $errors->first('role') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputName1" value="{{ $contact->email }}">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Phone</label>
            <input type="text" class="form-control" name="phone" id="exampleInputName1" value="{{ $contact->phone }}">
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Adress</label>
            <textarea class="form-control" name="adress" id="exampleTextarea1" rows="6">{{ $contact->adress }}</textarea>
            @if ($errors->has('adress'))
            <span class="text-danger">{{ $errors->first('adress') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">LinkedIn</label>
            <input type="text" class="form-control" name="linkedin" id="exampleInputName1" value="{{ $contact->linkedin }}">
            @if ($errors->has('linkedin'))
            <span class="text-danger">{{ $errors->first('linkedin') }}</span>
            @endif
          </div>

          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <a class="btn btn-light" href="{{ route('dashboard') }}">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection
