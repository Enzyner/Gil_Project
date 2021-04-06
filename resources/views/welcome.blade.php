@extends('layouts.app')

@section('content')
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
        <div class="login-content">
            <h1>Balochistan Health Card System</h1>
            <div class="login-form">
            @if (Route::has('login'))
                <div class="btn social facebook btn-flat btn-addon mb-3 ">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        
                    @else
                        <a href="{{ route('admin.login') }}">Login As Admin</a>
                        </div>
                        @if (Route::has('register'))
                        <div class="btn social facebook btn-flat btn-addon mb-3 ">
                            <a href="{{ route('register') }}">Login/Register As Citizen</a>
                        </div>
                        <div class="btn social facebook btn-flat btn-addon mb-3 ">
                            <a href="{{ route('faciltycenter.register') }}">Login/Register As Facility Center</a>
                        </div>
                        @endif
                    @endauth
                
            @endif
            </div>
        </div>
        </div>
</div>
        @endsection