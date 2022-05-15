@extends('backend.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Project</h4>
        <p class="card-description"> Here you can add your project </p>
        <form action="{{ route('settings.portfolio.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data" >
            @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Project name</label>
            <input type="text" name="name" class="form-control" id="exampleInputUsername1" ">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Link to live version</label>
            <input type="text" name="link" class="form-control" id="exampleInputUsername1" ">
            @if ($errors->has('link'))
            <span class="text-danger">{{ $errors->first('link') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Link to github</label>
            <input type="text" name="github" class="form-control" id="exampleInputUsername1" ">
            @if ($errors->has('github'))
            <span class="text-danger">{{ $errors->first('github') }}</span>
            @endif
          </div>
          {{-- image --}}
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" name="image">
            </div>
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @else
            <br>
            @endif
          </div>


          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('dashboard') }}" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  @endsection
