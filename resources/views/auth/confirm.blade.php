@extends('layouts.register_nologo') @section('title', 'Balance')

@section('content')
<div class="row" style="background-color: transparent; height: 100px;">
</div>
<div class="bg c_margin profile_font vhh" id="register">
    <div class="container">
        <br>
        <div class="row" style="padding: 3% 10% 0 10%">
            <div class="col-md-12">
                <h3 style="text-align:center">Email Verification</h3>
                <hr>
                <div class="col-md-12 email_confirm">
                <h6 style="line-height: 1.6;">We have sent a confirmation email to your registered email address. <b style="color:#5a9fff;">{{ $email }}</b>. Please follow the instructions in the email to continue. 
                    <a style="color:#f24824" href="/{{ $id }}/aisdc">Resend email >></a> </h6>
                    <hr>
                    If you haven't received the email, please try the following:
                    <ul>
                            
                            <li>Make sure the email address you provided is correct.</li>
                            <li>Check your spam or junk mail folders.</li>
                            <li>Make sure your email client is functioning normally.</li>
                        </ul>
                </div>
                
                



            </div>
        </div>

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

@endsection