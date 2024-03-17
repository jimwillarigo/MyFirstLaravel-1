@extends('app')
@section('title')
Login
@endsection
@section('style')

    .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }
    
    @media (min-width: 768px) {
    .gradient-form {
    height: 100vh !important;
    }
    }
    @media (min-width: 769px) {
    .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
    }
    }
@endsection 

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card m-3 text-center">
            <div class="card-header text-center">
                <img class="img-fluid" src="{{asset('img/sia-logo.png')}}" alt="IAS " width="100" height="50"> 
                <h4>Sign In</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                    
                    <a href="https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/" class="fw-italic">https://www.allphptricks.com/laravel-custom-user-registration-and-login-tutorial/</a>

                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection