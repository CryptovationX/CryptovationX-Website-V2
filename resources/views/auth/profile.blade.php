@extends('layouts.app_nologo')

@section('title', 'Balance') 

@section('content')
<div class="row" style="background-color: transparent; height: 100px;">
        </div>
 <div class="bg c_margin profile_font" style="height:80vh">
     <div class="container"><br>
        <div class="row" style="padding: 3% 5% 0 5%">
                <p class="normal_font"><b>Account Profile</b></p>
            </div>
            <br>
            <div class="container" style="padding: 2% 3% 0 3%">
                <div class="row">
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white">
                            <div class="col-md-6"><b>Account:</b></div>
                            <div class="col-md-6">{{ $profile->account_id }}</div>          
                    </div>
                    </div>
                    {{-- <div class="col-2"><div class="vertical_line"></div></div> --}}
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white" >
                            <div class="col-md-6"><b>Sex:</b></div>
                            <div class="col-md-6">{{ $profile->sex }}</div>          
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white" >
                            <div class="col-md-6"><b>Firstname:</b></div>
                            <div class="col-md-6">{{ $profile->firstname }}</div>         
                    </div>
                    </div>
                    {{-- <div class="col-2"><div class="vertical_line"></div></div> --}}
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white" >
                            <div class="col-md-6"><b>Birthday:</b></div>
                            <div class="col-md-6">{{ $profile->birthday }}</div>          
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white" >
                            <div class="col-md-6"><b>Lastname:</b></div>
                            <div class="col-md-6">{{ $profile->lastname }}</div>          
                    </div>
                    </div>
                    {{-- <div class="col-2"><div class="vertical_line"></div></div> --}}
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white" >
                            <div class="col-md-6"><b>Nationality:</b></div>
                            <div class="col-md-6">{{ $profile->nationality }}</div>          
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white; border-bottom: solid 1px #D3D3D3;" >
                            <div class="col-md-6"><b>Email:</b></div>
                            <div class="col-md-6">{{ $profile->email }}</div>          
                    </div>
                    </div>
                    {{-- <div class="col-2"><div class="vertical_line"></div></div> --}}
                    <div class="col-md-6">
                    <div class="col-md-12 profile_row profile_box" style="background:white; border-bottom: solid 1px #D3D3D3;" >
                            <div class="col-md-6"><b>Residence</b></div>
                            <div class="col-md-6">{{ $profile->residence }}</div>          
                    </div>
                    </div>
            
                    
                </div>
            </div>    
     </div>
        <br><br><br><br>
 </div>
 <div class="fixed-bottom">
 @include("partials.footer")
</div>
@endsection