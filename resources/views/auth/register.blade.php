<!--This template was provided by https://startbootstrap.com under the MIT License.-->
@extends('layouts.app')

@section('content')
    <!--CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth-custom.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image-register"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Sign Up!</h3>
                                <form method="POST" action="{{ route('register') }}">

                                    @csrf

                                    <div class="form-label-group">
                                        <input id="name" type="text" placeholder="Name"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <label for="name">{{ __('Name') }}</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input id="email" type="email" placeholder="Email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input id="password" type="password" placeholder="Password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label for="password">{{ __('Password') }}</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>

                                    <button
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                                        type="submit">{{ __('Register') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
