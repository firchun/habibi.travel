@extends('layouts.auth')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0  my-5"
                    style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                    border-radius:20px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h1 class="">
                                            <a href="{{ url('/') }}" style="text-decoration:none;">
                                                <span style="color: #DF7D55" class="font-weight-bold">HABIBI</span>
                                                <span class="text-primary " style="font-size: 20px;"><i>Travel</i></span>
                                            </a>
                                        </h1>
                                        <span class="text-gray-900 ">{{ __('Silahkan login terlebih darhulu') }}</span>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger border-left-danger" role="alert">
                                            <ul class="pl-4 my-2">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success border-left-success alert-dismissible fade show"
                                            role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}"
                                                required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                placeholder="{{ __('Password') }}" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="remember">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn  btn-user btn-block text-white"
                                                style="background-color:#ff4800;">
                                                {{ __('Login') }}
                                            </button>
                                        </div>

                                    </form>

                                    {{-- <hr> --}}

                                    {{-- @if (Route::has('password.request'))
                                        <div class="text-center">
                                            <a class="small" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        </div>
                                    @endif

                                    @if (Route::has('register'))
                                        <div class="text-center">
                                            <a class="small"
                                                href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
                                        </div>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
