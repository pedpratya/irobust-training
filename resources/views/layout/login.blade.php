@extends('layout.master')

@section('content')
<link href="css/login-form.css" rel="stylesheet" media="screen">

<!--  -->

<!-- <div class="large-6 columns">
                    <form action="{{ url('login') }}" role="form" method="POST" class="reg ng-pristine ng-valid">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label class="">
                            Username (or Email)
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            
                        </label>
                        <label class="">
                            Password <a href="{{ url('/password/email') }}" style="font-size: 9px; font-weight: 600;">Forgot Password?</a>
                            <input type="password" class="form-control" name="password">
                            
                        </label>
                        
                        <input type="submit" class="button" value="Sign in" style="margin-bottom: 0;">
                        <label class="digital-tutors">Don't have an account? <a class="ui-dt-sign-in-link" href="">here</a> to Sign up.</label>
                    </form>
</div> -->

<!--  -->

<div class="container">

<div class="loginbox-v4">
    <h2 class="box-heading">    I Robust-Training account    </h2>
            <form id="login-form" name="login-form" action="{{ url('login') }}" method="post" class="ud-signin-form" data-signin-box-class-name="js-signin-box">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="manage-fields-wrapper ">
<!-- 						<div class=" non-labeled" id="form-item-email"> -->
			                <div id="tooltip-reference-email" class="tooltip-reference" style=" ">
			                    <input id="email" name="email" type="email" placeholder="E-mail" data-purpose="email">

			                </div>
	            		<!-- </div> -->
	                     <!-- <div class=" non-labeled" id="form-item-password">              -->
			                <div id="tooltip-reference-password" class="tooltip-reference" style=" ">
			                    <input id="password" name="password" type="password" placeholder="Password" data-purpose="password">
			                </div>
	            		<!-- </div> -->
                    </div>
                    <div class="submit-row">
                        <input type="submit" value="Login" class="btn btn-success" data-purpose="do-login" data-loading-text="Login">
                        or
                        <a class="cancel-link ud-popup" data-wrapcss="static-content-wrapper" href=""> Forgot Password </a>
            		</div>
            </form>                        
    <div class="box-footer">
        Don't have an account?
        <a class="sign-link ud-popup" href="{{ url('sign-up') }}"> Sign up </a>
    </div>
</div>

</div>
<!--  -->


<script>
		// $('#titleBar').hide();
</script>

@endsection
