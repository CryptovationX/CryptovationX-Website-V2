@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to CryptovationX!') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input readonly id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $info->lastname." ".$info->firstname }}" required autofocus>
                                <input type="hidden" name="knowyc_id" value="{{ $info->id }}"/>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input readonly id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $info->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 kycmargin">
                                    
                                    <input type="checkbox" name="terms" id="terms" />
                                    <span>I acknowledge that I have read the Token Sale <a href="https://cryptovationx.io/cxa-terms-conditions" target="_blank">Terms and Conditions</a>, <a href="https://cryptovationx.io/privacy-policy" target="_blank">Privacy Policy</a>, <a href="https://cryptovationx.io/website-terms-of-use" target="_blank">Website Terms of Use</a> and agree to be bound by them.</span>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="submitbut" type="submit" class="btn btn-primary" disabled>
                                    {{ __('Save Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#terms').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#submitbut').removeAttr('disabled'); //enable input
        
    } else {
        $('#submitbut').attr('disabled', true); //disable input
    }
});
</script>
@endsection
