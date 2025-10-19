@extends('layout.layout_user')

@section('title', 'Lighting Store | Login')

@section('content')
<div class="login_sec">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Login</li>
        </ol>

        <h2>Login</h2>
        <div class="col-md-6 log">			 
            <p>Welcome, please enter the following to continue.</p>
            <p>If you have previously Login with us, <span>click here</span></p>
            <form>
                <h5>User Name</h5>	
                <input type="text" value="">
                <h5>Password</h5>
                <input type="password" value="">					
                <input type="submit" value="Login">	
                <a class="acount-btn" href="{{ url('/account') }}">Create an Account</a>
            </form>
            <a href="#">Forgot Password ?</a>
        </div>	
        <div class="clearfix"></div>
    </div>
</div>
@endsection
