@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-page">
        <div class="form">
                    <form class="login-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                                <button type="submit" style="font-family: 'Open Sans', sans-serif !important;">
                                    {{ __('Login') }}
                                </button>

                                {{-- <a style="font-family: 'Open Sans', sans-serif !important; font-size: 12px;" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
