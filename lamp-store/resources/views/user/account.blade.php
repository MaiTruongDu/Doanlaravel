@extends('layout.layout_user')

@section('title', 'Lighting Store | Account')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Account</li>
    </ol>

    <div class="registration">
        <div class="registration_left">
            <h2>New user? <span>Create an account</span></h2>
            <div class="registration_form">
                <form>
                    <input placeholder="First name" type="text">
                    <input placeholder="Last name" type="text">
                    <input placeholder="Email address" type="email">
                    <input placeholder="Mobile" type="text">
                    <input placeholder="Password" type="password">
                    <input placeholder="Retype password" type="password">
                    <input type="submit" value="Create account">
                    <label class="checkbox">
                        <input type="checkbox" name="checkbox">
                        <i></i>I agree to the <a href="#">terms of service</a>
                    </label>
                </form>
            </div>
        </div>

        <div class="registration_left">
            <h2>Existing user</h2>
            <div class="registration_form">
                <form>
                    <input placeholder="Email" type="email" required>
                    <input placeholder="Password" type="password" required>
                    <input type="submit" value="Sign in">
                    <div class="forget">
                        <a href="#">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
@endsection
