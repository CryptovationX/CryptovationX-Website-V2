@extends('layouts.register_nologo') @section('title', 'Balance')

@section('content')
<div class="row" style="background-color: transparent; height: 100px;">
</div>
<div class="bg c_margin profile_font vhh" id="register">
    <div class="container">
        <br>
        <div class="row" style="padding: 3% 10% 0 10%">
            <div class="col-md-12">
                <h3>Register</h3>
                <hr>
            </div>
        </div>

        <div class="row" style="padding: 0% 10% 0 10%">
            <div class="container" style="padding: 0% 5% 0 5%">
                {!! Form::open(['action'=>'SignupController@ais','data-parsley-validate' => '']) !!}
 
                <div class="row">
                    <div class="col-md-6" style="padding-top: 2%">
                        <input type="text" name="firstname" placeholder="First Name" style="background-color:transparent;" class="input" required>
                    </div>
                    <div class="col-md-6" style="padding-top: 2%" >
                        <input type="text" name="lastname" placeholder="Last Name" style="background-color:transparent;" class="input" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding-top: 2%">
                        <input type="text" name="email" placeholder="Email" style="background-color:transparent;" class="input" required>
                    </div>
                    <div class="col-md-6" style="padding-top: 2%">
                        <input type="text" name="mobile" placeholder="Mobile No." style="background-color:transparent;" class="input" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding-top: 2%">
                        <input type="text" name="facebook" placeholder="Facebook (Profile Link)" style="background-color:transparent;" class="input" v-model="facebook" required>
                    </div>
                </div>                   
                
            </div>
        </div>
        <div class="row" style="padding: 5% 10% 0 10%">
            <div class="col-md-12" style="padding-top: 2%;">
                <input type="checkbox" name="terms" id="terms" />
                <span>I acknowledge that I have read <a href="https://cryptovationx.io/website-terms-of-use" target="_blank">Website Terms of Use</a>, <a href="https://cryptovationx.io/privacy-policy" target="_blank">Privacy Policy</a>, <a href="https://cryptovationx.io/cxa-terms-conditions" target="_blank">CXA Terms and Conditions</a> and agree to be bound by them.</span>
            </div>

            <div class="col-md-12" style="padding-top: 2%; text-align:center">
                <button id="submitbut" type="submit" class="btn btn-primary btn-lg" style="border-radius:2px;" disabled>
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    {{ Form::close() }}
    </div>
    <br>
    <br>
    <br>
    <br>
</div>
<div class="fixed-bottom">
    @include("partials.footer")
</div>

<script src="{{ asset("/js/parsley.min.js") }}"></script>
<script>
    $('#terms').click(function () {
        //check if checkbox is checked
        if ($(this).is(':checked')) {
            
            $('#submitbut').removeAttr('disabled'); //enable input
            
        } else {
            $('#submitbut').attr('disabled', true); //disable input
        }
    });

    // new Vue({
    //     el: '#register',

    //     data: {
    //         facebook:'',
    //     },

    //     methods: {
    //         onSubmit() {
    //             this.forms.post('/assets/store')
    //                 .then(response => alert('Wahoo!'));
    //         }
    //     },
    // });
</script>
@endsection