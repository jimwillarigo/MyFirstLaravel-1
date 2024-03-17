@extends('app')
@section('title')
Register
@endsection


@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card m-3 text-center">
            <div class="card-header text-center">
                <img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"> 
                <h4>Sign Up</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox"  id="usertype" name="usertype" value="admin" >
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked this if Admin</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                    </div>
                    
                    <a href="https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/" class="fw-italic">https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/</a>

                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection