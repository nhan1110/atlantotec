@extends('shares.layout')
@section('main-content')
	<div class="card card-container">
		<h3 class="text-center" style="margin-top: 0;">Register</h3>
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="" method="post">
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('type') }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <p>{{ Session::get('message') }}</p> 
                </div>
            @endif
            <div class="form-group">
                <label>First Name *</label>
                <input type="text" class="form-control" name="first_name" required autofocus>
            </div>
            <div class="form-group">
                <label>Last Name *</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="form-group">
                <label>Address *</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="pwd" class="form-control" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign Up</button>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        </form><!-- /form -->
        <p>Don't have an Account? <a href="{{route('login')}}" class="forgot-password">Login</a></p>
    </div><!-- /card-container -->
@endsection
@section('footer')
<link href="{{ asset('html/css/account.css') }}" rel="stylesheet">
@endsection