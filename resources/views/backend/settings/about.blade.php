@extends('backend.master');
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
      <div class="card-body">
        <h4 class="card-title">About me settings</h4>
        <p class="card-description">Here you can change your about me settings </p>
        <form action="{{ route('settings.about.update') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleTextarea1">About me</label>
            <textarea class="form-control" name="text" id="exampleTextarea1" rows="6">{{ $about->text }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection
