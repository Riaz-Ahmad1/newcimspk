@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            <form class="user" method="POST" action="/users">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text"name="name" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="First Name"value="{{ old('name') }}">
                                        @error('name')
                                            <small class="form-text text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" placeholder="Email Address"value="{{ old('email') }}">
                                    @error('email')
                                        <small class="form-text text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                            <small class="form-text text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"name="password_confirmation" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                        @error('Confirm')
                                            <small class="form-text text-danger"> {{ $message }} </small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <a class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> --}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">Sign Up</button>

                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/forgot-password">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
