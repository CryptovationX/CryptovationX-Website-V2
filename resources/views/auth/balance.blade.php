@extends('layouts.app')
@include("layouts.balance_navbar")
@section('title', 'Balance') 

@section('content')
 <div class="container bg c_margin">

    {{-- navbar --}}
    <div class="row">
    {{-- <div class="dropdown" style="margin-left:auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Firstname
            </button>
            <div class="dropdown_menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" href="#">Profile</a>
              <button class="dropdown-item" href="#">Balance</a>
              <button class="dropdown-item" href="#">Logout</a>
            </div>
            </div> --}}
            {{-- <div class="dropdown show" style="margin-left:auto">
                <a class="btn btn-secondary_new dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @Username
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item {{ Request::is('profile') ? "active" : "" }}" href="/profile">Profile</a>
                  <a class="dropdown-item {{ Request::is('balance') ? "active" : "" }}" href="/balance">Balance</a>
                  <a class="dropdown-item {{ Request::is('logout') ? "active" : "" }}" href="/logout">Logout</a>
                </div>
            </div> --}}
    </div>
    {{-- Greeting --}}
    <div class="row normal_font">
        <div class="col-3 title_margin_top center">Welcome</div>
        <div class="col-6 title_margin_top left">{{ $profile->lastname." ".$profile->firstname }}</div>
        <div class="col-3 title_margin_top center">
            <div class="verify_box center">Verified</div>
        </div>
    </div>

    {{-- ETH wallet --}}
    <div class="row small_font margin_top">
        <div class="col-3 center">
            <div class="eth_tooltip" style="margin-left:2%">ETH wallet</div>
        </div>
        <div class="col-9">{{ $profile->address}}</div>
    </div>

    <hr> <br>

    {{-- Balance --}}
    <div class="container balance_container text-center">
        <div class="balance_border light left">
            <div class="balance_padding normal_font">
                <div class="header_copy center"><b>Balance</b></div> <br>
                <div class="center ">3000</div> <br>
                <div class="calendar_events ce_title center">CXA Tokens</div>
            </div>
        </div>
    </div>
    <br><br>
    {{-- Transaction history --}}
    <div class="container transaction_container text-center">
        <div class="calendar light left">
            <div class="calendar_header">
            <p class="header_copy"> Transaction history</p>
            </div>
            {{--<div class="calendar_plan">
                <div class="cl_plan">
                <div class="cl_title">Today</div>
                <div class="cl_copy">22nd  April  2018</div>
                <div class="cl_add">
                <i class="fas fa-plus"></i>
                </div>
            </div>
            </div> --}}
            <div class="calendar_events">
            {{-- <p class="ce_title">Upcoming Events</p> --}}
            <div class="event_item">
                <div class="row center">
                <div class="col-3 left">
                    <div class="ei_Title">Date</div>
                    <div class="ei_Copy">2018-06-29</div>
                </div>
                <div class="col-3">
                        <div class="ei_Title">CXA</div>
                        <div class="ei_Copy">0.003$ : CXA</div>
                </div>
                <div class="col-3">
                        <div class="ei_Title">Number of tokens</div>
                        <div class="ei_Copy">3000</div>

                </div>
                <div class="col-3 right">
                    <div class="correct">Completed</div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
        <br><br><br>
    @include("partials.footer")
 </div>
@endsection