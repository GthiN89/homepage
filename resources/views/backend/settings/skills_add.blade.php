@extends('backend.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Skill</h4>
        <p class="card-description"> Here you can add your skill </p>
        <form action="{{ route('settings.skills.store') }}" class="forms-sample" method="POST" >
            @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Skill</label>
            <input type="text" name="header" class="form-control" id="exampleInputUsername1" ">
            @if ($errors->has('header'))
            <span class="text-danger">{{ $errors->first('header') }}</span>
            @endif
          </div>



          <div class="form-group">
            <label for="exampleTextarea1">About skill</label>
            <textarea name="text" class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
