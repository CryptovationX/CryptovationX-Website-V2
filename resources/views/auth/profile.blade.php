@extends('layouts.app')
@extends("layouts.balance_navbar")
@section('title', 'Balance') 

@section('content')
 <div class="container bg c_margin profile_font">

    <div class="row" style="padding: 7% 5% 0 5%">
        <p class="normal_font"><b>Information</b></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5 profile_row profile_box" style="background:white">
                    <div class="col-6"><b>Account</b></div>
                    <div class="col-6">{{ $profile->account_id }}</div>          
            </div>
            <div class="col-2"><div class="vertical_line"></div></div>
            <div class="col-5 profile_row profile_box" style="background:white" >
                    <div class="col-6"><b>Sex</b></div>
                    <div class="col-6">{{ $profile->sex }}</div>          
            </div>
            <div class="col-5 profile_row profile_box" style="background:white" >
                    <div class="col-6"><b>Firstname</b></div>
                    <div class="col-6">{{ $profile->firstname }}</div>          
            </div>
            <div class="col-2"><div class="vertical_line"></div></div>
            <div class="col-5 profile_row profile_box" style="background:white" >
                    <div class="col-6"><b>Birthday</b></div>
                    <div class="col-6">{{ $profile->birthday }}</div>          
            </div>
            <div class="col-5 profile_row profile_box" style="background:white" >
                    <div class="col-6"><b>Lastname</b></div>
                    <div class="col-6">{{ $profile->lastname }}</div>          
            </div>
            <div class="col-2"><div class="vertical_line"></div></div>
            <div class="col-5 profile_row profile_box" style="background:white" >
                    <div class="col-6"><b>Nationality</b></div>
                    <div class="col-6">{{ $profile->nationality }}</div>          
            </div>
            <div class="col-5 profile_row profile_box" style="background:white; border-bottom: solid 1px #D3D3D3;" >
                    <div class="col-6"><b>Email</b></div>
                    <div class="col-6">{{ $profile->email }}</div>          
            </div>
            <div class="col-2"><div class="vertical_line"></div></div>
            <div class="col-5 profile_row profile_box" style="background:white; border-bottom: solid 1px #D3D3D3;" >
                    <div class="col-6"><b>Residence</b></div>
                    <div class="col-6">{{ $profile->residence }}</div>          
            </div>
    
            
        </div>
    </div>    

    {{-- <div class="container" style="width: 90%">
        <div class="row">
            <div class="row" style="width: 60%">
                <div class="col-4">
                        <b>Account ID</b>
                    </div>
                    <div class="col-8">
                        Muhammad shahzad
                    </div>
                </div>
            </div>
            <div class="row" style="width: 60%">
                <div class="col-4">
                        <b>Account ID</b>
                    </div>
                    <div class="col-8">
                        Muhammad shahzad
                    </div>
                </div>
            </div> --}}
        {{-- <div class="row profile_box">
            <div class="col-5">
                <b>Firstname</b>
            </div>
            <div class="col-7">
                XXX
            </div>
        </div>
        <div class="row profile_box">
            <div class="col-5">
                <b>Lastname</b>
            </div>
            <div class="col-7">
                XXX
            </div>
        </div>
        <div class="row profile_box">
            <div class="col-5">
                <b>Password</b>
            </div>
            <div class="col-7">
                <a class="{{ Request::is('password_change') ? "active" : "" }}" href="/password_change">Change password</a>
            </div>
        </div>
    </div> --}}
        <br><br><br>
    @include("partials.footer")
 </div>
@endsection