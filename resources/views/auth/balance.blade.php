@extends('layouts.app_nologo')

@section('title', 'Balance') 

@section('content')

<div class="emergency_row"></div>
 <div class="bg c_margin">
     <div class="container">
         {{-- Announcement --}}
   <div class="row">
        <div class="col-12 announcement_row">
            <!-- Trigger/Open The Modal -->
            <span id="announcement_myBtn"><i class="fas fa-bullhorn"></i>&nbsp; Announcing the Arbot (2.0 beta)</span>
        </div>
        <!-- The Modal -->
        <div id="announcement_myModal" class="announcement_modal">

        <!-- Modal content -->
        <div class="announcement_modal-content">
            <div class="announcement_close">&times;</div>
            <div class="col-12 center"><h3>Arbot Terminal</h3></div>
            <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/Arbot44.png" alt="" class="announcement_img"><br>
            <div class="col-12 center">The CryptovationX Arbot research & development team<br>has developed, tested and executed 7 cryptocurrency arbitrage market strategies<br>alongside development of a proprietary arbitrage auto-trading terminal serving crypto-funds around the world.</div><br>
            <div class="col-12 center"><a href="https://arbot.cryptovation.co/" target="_blank">See more</a></div>            
        </div>

        </div>
    </div>
            {{-- Greeting --}}
            <div class="row normal_font">
                <div class="col-3 title_margin_top center">Welcome</div>
                <div class="col-6 title_margin_top left">{{ $profile->lastname.", ".$profile->firstname }}</div>
                <div class="col-3 title_margin_top center">
                    {{-- <div class="verify_box center">Verified</div> --}}
                </div>
            </div>
        
            {{-- ETH wallet --}}
            <div class="row small_font margin_top">
                <div class="col-3 center">
                    <div class="eth_tooltip" style="margin-left:2%">ETH wallet</div>
                </div>
                <div class="col-9">{{ $profile->address}}</div>
            </div>
        
            <hr> <br><br><br>
            <!-- The Balance Modal -->
            <div id="balance_myModal" class="balance_modal">
                <!-- Modal content -->
                <div class="balance_modal-content">
                    <span class="balance_close">&times;</span>
                    <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/Table+of+feature+accessibility.png" alt="Table of feature accessibility" class="balance_table_pic">
                </div>
            </div>
            {{-- Only display on phone --}}
            <span class="balance_phone_text">Touch balance box to see the application of CXA</span>
            {{-- Balance --}}
            <div class="container balance_container text-center">
                <div class="balance_border balance_tooltip light left token_application">
                    <div class="balance_padding normal_font" id="balance_myBtn">
                        <div class="header_copy center"><b>Balance</b></div> <br>
                        <div class="center ">{{ $balance }}</div> <br>
                        <div class="calendar_events ce_title center">CXA Tokens</div>
                        {{-- Tooltip text --}}
                        <span class="balance_tooltiptext">Click balance box to see the application of CXA</span>
                    </div>
                </div>
            </div>
            <br><br><br><br>
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
                        <div class="event_item" style="color: black;">
                            <div class="row center">
            
                                @foreach ($profile->token as $token)
                                    
                                
                                <div class="col-3">
                                    <div class="ei_Copy">{{ $token->created_at }}</div>
                                </div>
                                <div class="col-3">
                                    <div class="ei_Copy left">{{ $token->type }}</div>
                                </div>
                                <div class="col-1" style="margin-left:-5%">
                                        <div class="ei_Copy">{{ $token->total_token }}</div>
                                </div>
                                <div class="col-1" style="margin-left:8%">
                                    <div class="ei_Copy">CXA</div>
                                </div>
                                <div class="col-3 center">
                                    <div class="correct" style="margin-left:8%">Completed</div>
                                </div>
            
                                @endforeach
                            </div>
                        </div>
                    </div><br>
                     <div class="small_font">* CXA tokens in your account already belong to you. The token distribution to the Ethereum wallet will happen soon after we finish our token sale (which we conducted privately). We will announce the delivery date soon. Please stay tuned!</div>
                </div>
            </div>
    </div>
        <br><br><br><br>
</div>

@include("partials.footer")
<script>
    // Modal announcement
    // Get the modal
    var announcement_modal = document.getElementById('announcement_myModal');
   
   // Get the button that opens the modal
   var announcement_btn = document.getElementById("announcement_myBtn");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("announcement_close")[0];
   
   // When the user clicks the button, open the modal 
   announcement_btn.onclick = function() {
       announcement_modal.style.display = "block";
   }
   
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
       announcement_modal.style.display = "none";
   }
   
   // Balance Modal
   var modal = document.getElementById('balance_myModal');
   var btn = document.getElementById("balance_myBtn");
   var span = document.getElementsByClassName("balance_close")[0];
   btn.onclick = function() {
       modal.style.display = "block";
   }
   
   span.onclick = function() {
       modal.style.display = "none";
   }
   
   window.onclick = function(event) {
       if (event.target == modal) {
           modal.style.display = "none";
       }
   }
   
    </script>
   @endsection   