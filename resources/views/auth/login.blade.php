@extends('layouts.frontend')

@section('login')

<!--Page Banner Area Start-->
<div class="page-banner-area" style="background-image: url(frontend/images/bg/page-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content text-center">
                    <h1>KINGS OF THE <br> WARRIORS</h1>
                    <a class="df-btn" href="#">Buy now</a>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Page Banner Area End-->
 <!--Login Section Start-->
 <div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
    <div class="container">
        <div class="row">

            <!-- Login -->
            <div class="col-md-6 col-12 d-flex">
                <div class="gilbard-login">

                    <h3>Login to your account</h3>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!--<p>Gilbard provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>-->
                    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">@csrf
                        <div class="row">
                            <div class="col-12 mb-30">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <x-text-input id="email" type="email" name="email" placeholder="Type your username or email address" :value="old('email')" required autofocus autocomplete="username" />
                            </div>
                            <div class="col-12 mb-20">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <x-text-input id="password" type="password" name="password" placeholder="Enter your passward" required autocomplete="current-password"/>
                            </div>
                            <div class="col-12 mb-15">

                                <input type="checkbox" id="remember_me" name="remember">
                                <label for="remember_me">{{ __('Remember me') }}</label>

                                <a href="#">Forgotten pasward?</a>

                            </div>
                            <div class="col-12"><input type="submit" value="LOGIN">  {{ __('Log in') }}</div>
                        </div>
                    </form>
                    <h4>Don’t have account? please click <a href="{{route('register')}}">Register</a></h4>

                </div>
            </div>

            <div class="col-md-1 col-12 d-flex">

                <div class="login-reg-vertical-boder"></div>

            </div>

            <!-- Login With Social -->
            <div class="col-md-5 col-12 d-flex">

                <div class="gilbard-social-login">
                    <h3>Also you can login with...</h3>

                    <a href="#" class="facebook-login">Login with <i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter-login">Login with <i class="fa fa-twitter"></i></a>
                    <a href="#" class="google-plus-login">Login with <i class="fa fa-google-plus"></i></a>

                </div>

            </div>

        </div>
    </div>
</div>
 <!--Login Section End-->



@endsection
