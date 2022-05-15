@extends('backend.master')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
        <h4 class="card-title">User profile settings</h4>
        <p class="card-description"> Here you can change your user profile settings </p>
        <form action="{{ route('user.update') }}" class="forms-sample" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input name="name" type="text" class="form-control" id="exampleInputUsername1" value="{{ Auth::user()->name }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->email }}">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a class="btn btn-light" href="{{ route('dashboard') }}">Cancel</a>
        </form>
      </div>
    </div>
  </div>

  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Password change</h4>
        <p class="card-description"> Here you can change your password </p>
        <form action="{{ route('user.update.password') }}" class="forms-sample" method="POST" >
            @csrf
            <div class="form-group mt-3">
                <label for="current_password">Old password</label>
                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                    placeholder="Enter current password">
                @error('current_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
            </div>
          <div class="form-group">
            <div class="form-group mt-3">
                <label for="new_password ">New password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                    placeholder="Enter the new password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="form-group mt-3">
                <label for="confirm_password">Confirm password</label>
                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="Enter same password">
                @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>

                @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a class="btn btn-light" href="{{ route('dashboard') }}">Cancel</a>
        </form>
      </div>
    </div>
  </div>
@endsection
