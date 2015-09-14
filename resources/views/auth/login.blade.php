<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ribbon Login Form Flat Responsive widget Design :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ribbon Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href={{asset('web/css/style.css')}} rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--/webfonts-->
<script src="{{asset('sweetalert/dist/sweetalert.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('sweetalert/dist/sweetalert.css')}}">
</head>
<body>
<!--start-main-->
<h1>Jok Website<span>Login</span></h1>

      @if (count($errors) > 0)
                            <!-- <strong>Whoops!</strong> There were some problems with your input.<br><br> -->
                            <!-- <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul> -->
                            <script>
                                   sweetAlert("Login Gagal", "Silahkan coba lagi", "error"); 
                            </script>
    @endif

<div class="login-box">
          
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
            <input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"  name="email" value="{{ old('email') }}" >
            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password">
            <div class="remember">
                <a href="#"><p>Remember me</p></a>
                <h4>Forgot your password?<a href="#">Click here.</a></h4>
            </div>
            <div class="clear"> </div>
            <div class="btn">
                <input type="submit" value="LOG IN" >
            </div>
         </form>
        <div class="clear"> </div>
</div>
<!--//End-login-form-->
<!--start-copyright-->
<div class="copy-right">
    <p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
</div>
<!--//end-copyright-->      
</body>
</html>