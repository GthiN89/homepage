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
        <h4 class="card-title">Home section settings</h4>
        <p class="card-description"> Here you can change your home section settings </p>
        <form action="{{ route('settings.home.update') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ $home->name }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Roles (role1, role2, ...)</label>
            <input type="text" class="form-control" name="roles" id="exampleInputName1" value="{{ $home->roles }}">
            @if ($errors->has('roles'))
            <span class="text-danger">{{ $errors->first('roles') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label>Resume</label>
            <input type="file" name="resume" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" name="resume" class="form-control file-upload-info"  value="{{ $home->resume }}">
            </div>
            @if ($errors->has('resume'))
            <span class="text-danger">{{ $errors->first('resume') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label>My Image</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="image"  value="{{ $home->image }}">
            </div>
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @else
            <br>
            @endif
            <span class="input-group-append">
                <img src="{{ asset('upload/profile.jpg') }}" alt="">
            </span>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <a class="btn btn-light" href="{{ route('dashboard') }}">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection
