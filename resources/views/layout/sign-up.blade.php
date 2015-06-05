@extends('layout.master')

@section('content')
<link href="css/login-form.css" rel="stylesheet" media="screen">

<div class="container">

<div class="loginbox-v4">
    <h2 class="box-heading">    Sign Up    </h2>
    <form id="login-form" name="login-form" action="{{ url('sign-up') }}" method="post" class="ud-signin-form" data-signin-box-class-name="js-signin-box">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="fxw box-wrapper ud-usertracker" data-namespace="sign-up-popup">
                    <div class="manage-fields-wrapper ">
			                <div id="tooltip-reference-email" class="tooltip-reference">
			                    <input id="email" name="email" type="email" placeholder="E-mail" data-purpose="email">
                            </div>
			                <div id="tooltip-reference-password" class="tooltip-reference">
			                    <input id="password" name="password" type="password" placeholder="Password" data-purpose="password">
			                </div>

<!--                     </div>
                </div>

                <div class="box-content">
                    <div class="manage-fields-wrapper "> -->
                            <div id="tooltip-reference-name" class="tooltip-reference">
                                <input id="name" name="name" type="text" placeholder="Name" data-purpose="name">
                            </div>
                            <div id="tooltip-reference-mobile" class="tooltip-reference" style=" ">
                                <input id="mobile" name="mobile" type="text" placeholder="Tel-Number" data-purpose="mobile">
                            </div>
                            <div id="tooltip-reference-company" class="tooltip-reference">
                                <input id="company" name="company" type="text" placeholder="Company" data-purpose="company">
                            </div>
                            <div id="tooltip-reference-rank" class="tooltip-reference">
                                <input id="rank" name="rank" type="text" placeholder="Rank" data-purpose="rank">
                            </div>
                    </div>
                </div>

        <div class="box-footer">
            <div class="submit-row">
                <input id="btn-submit" type="submit" value="Submit" class="btn btn-success" data-purpose="do-login" data-loading-text="Login">
            </div>
        </div>
    </form> 
</div>

</div>
<!--  -->


<script>
		// $('#titleBar').hide();
</script>

@endsection
