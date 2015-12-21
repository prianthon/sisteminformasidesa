@extends('auth.masterlogin')

@section('metasection')
  <meta charset="utf-8">
  <title>Desa2.0 - Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description" />
  <meta content="themes-lab" name="author" />
  <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
@endsection

@section('mandatorystyle')
  <link href="{{ asset('/assets/css/icons/icons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/plugins.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/plugins/bootstrap-loading/lada.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/style.min.css') }}" rel="stylesheet">
  <link href="#" rel="stylesheet" id="theme-color">
@endsection

@section('pagelevelstyle')
  <link href="{{ asset('/assets/css/animate-custom.css') }}" rel="stylesheet">
@endsection

@section('modernizr')
  <script src="{{ asset('/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
@endsection

@section('loginbox')
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login-box clearfix animated flipInY">
                <div class="page-icon animated bounceInDown">
                    <img src="{{ asset('/assets/img/account/user-icon.png') }}" alt="Key icon">
                </div>
                <div class="login-logo">
                    <a href="#?login-theme-3">
                        <img src="{{ asset('/assets/img/account/login-logo.png') }}" alt="Desa2.0 Logo">
                    </a>
                </div>
                <hr>
                <div class="login-form">
                    <!-- BEGIN ERROR BOX -->
                    <div class="alert alert-danger hide">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4>Error!</h4>
                        Your Error Message goes here
                    </div>
                    <!-- END ERROR BOX -->
                    <form action="#" method="post">
                        <input type="text" placeholder="Alamat E-Mail" class="input-field form-control user" />
                        <input type="password" placeholder="Katasandi" class="input-field form-control password" />
                        <button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">Masuk</span></button>
                    </form>
                    <!--<div class="login-links">
                        <a href="password_forgot.html">Forgot password?</a>
                        <br>
                        <a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
                    </div>-->
                </div>
            </div>
            <!--<div class="social-login row">
                <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                    <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                </div>
                <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                    <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                </div>
            </div>-->
        </div>
    </div>
</div>
@endsection

@section('mandatoryscripts')
  <script src="{{ asset('/assets/plugins/jquery-1.11.js') }}"></script>
  <script src="{{ asset('/assets/plugins/jquery-migrate-1.2.1.js') }}"></script>
  <script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('/assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js') }}"></script>
  <script src="{{ asset('/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/plugins/jquery.cookie.min.js" type="text/javascript') }}"></script>
@endsection

@section('pagelevelscripts')
<script src="{{ asset('/assets/plugins/backstretch/backstretch.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/bootstrap-loading/lada.min.js') }}"></script>
<script src="{{ asset('/assets/js/account.js') }}"></script>
@endsection

@section('scripts')
<script>
$(function() {
$('#submit-form').click(function(e){
    e.preventDefault();
    var l = Ladda.create(this);
    l.start();
    setTimeout(function () {
        window.location.href = "index.html";
    }, 2000);

});
});
</script>
@endsection
