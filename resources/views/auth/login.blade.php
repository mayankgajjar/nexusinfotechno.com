@extends('layouts.login')

@section('content')
<!--/login-->
								
<div class="error_page">
<!--/login-top-->
    <div class="error-top">
    <h2 class="inner-tittle page"> Nexus Infotechno </h2>
        <div class="login">
            <h3 class="inner-tittle t-inner">Login</h3>
                 <form class="form-horizontal" method="POST" action="{{ route('login') }}"> {{ csrf_field() }}
						
                        
                        <input type="text" class="text" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
						@if ($errors->has('email'))
                            <span class="help-block">
                                <p>{{ $errors->first('email') }}</p>
                            </span>
                        @endif
                       
                        <input id="password" type="password"  name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                        <div class="submit"><input type="submit" value="Login" ></div>
                        <div class="clearfix"></div>

                        <div class="new">
                            <p><a href="{{ route('password.request') }}">Forgot Password ?</a></label></p>
                                <!--<p class="sign">Do not have an account ? <a href="{{ route('register') }}">Sign Up</a></p>-->
                                <div class="clearfix"></div>
                        </div>
                </form>
            </div>
    </div>
<!--//login-top-->
</div>
    <!--//login-->
<!--footer section start-->
     <div class="footer">
        <p>&copy 2018 Augment . All Rights Reserved | Design by <a href="http://nexusinfotechno.com.au/" target="_blank">Nexus Infotechno Inc.</a></p>
     </div>
<!--footer section end-->
<!--/404-->
@endsection
