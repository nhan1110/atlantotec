@extends('shares.layout')
@section('main-content')
	<div class="card card-container">
		<h3 class="text-center" style="margin-top: 0;">Reset password</h3>
        <form class="form-signin" action="" method="post">
            @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('type') }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                    <p>{{ Session::get('message') }}</p> 
                </div>
            @endif
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="pwd" class="form-control" minlength="6" required>
            </div>
            <div class="form-group">
                <label>Confirm Password *</label>
                <input type="password" name="confirm_pwd" class="form-control" minlength="6" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="email" value="<?php echo @$_GET['email']; ?>">
            <input type="hidden" name="token" value="<?php echo @$_GET['token']; ?>">
        </form><!-- /form -->
        <p>Don't have an Account? <a href="{{route('login')}}" class="forgot-password">Login</a></p>
    </div><!-- /card-container -->
@endsection
@section('footer')
<link href="{{ asset('html/css/account.css') }}" rel="stylesheet">
@endsection