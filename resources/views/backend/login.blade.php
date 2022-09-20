@extends('layouts.admin-auth')
@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form action="{{ route('login') }}" method="POST" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control form-control-user" name="username" type="text"
                                            value="{{ old('username') }}" placeholder="Enter your user name">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-user" name="password" type="password"
                                            placeholder="Enter your password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input class="custom-control-input" name="remember" id="remember"
                                                type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="remember">{{ __('Remember Me') }}</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-user btn-black">
                                        Login </button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="{{ route('admin.forgot_password') }}">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@stop

{{-- <div class="text-center"> --}}
{{-- <a class="small" href="register.html">Create an Account!</a> --}}
{{-- </div> --}}
{{-- <a href="{{route('admin.index')}}" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> --}}
