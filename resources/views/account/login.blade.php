@extends('shares.layout')
@section('main-content')
	<div class="card card-container">
		<h3 class="text-center" style="margin-top: 0;">Login</h3>
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="" method="post">
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('type') }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <p>{{ Session::get('message') }}</p> 
                </div>
            @endif
            <div class="form-group">
                <label>Email address *</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="pwd" class="form-control" required>
            </div>
            <div class="checkbox">
                <input type="checkbox" value="remember-me" name="remember" id="remember"> 
                <label for="remember">Remember me</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        </form><!-- /form -->
        <a href="{{route('forgot')}}" class="forgot-password">Forgot the password?</a>
    </div><!-- /card-container -->
@endsection
@section('footer')
<link href="{{ asset('html/css/account.css') }}" rel="stylesheet">
<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>
@endsection