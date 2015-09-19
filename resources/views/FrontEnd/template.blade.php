<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CJS</title>
   <link href="{{asset("WEB JOK/css/bootstrap.min.css")}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("WEB JOK/css/style.css")}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset("WEB JOK/css/flaticon.css")}}"> 
  	
    
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-image:url('WEB Jok/img/cream_pixels.png');">
	<header>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL('/')}}"><img src="{{URL('WEB JOK/img/logo fix.png')}}" height="75" width="120"></a>
                </div><!-- navbar-header -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{URL('/')}}">Home</a></li>
                        <li><a href="{{URL('aboutus')}}">About Us</a></li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                            <ul class="dropdown-menu column">
                              @yield('produk')
                              <!--   <li><a href="{{URL('productFront/tipe/Alphard')}}">JOK ALPHARD</a></li>
                                <li><a href="{{URL('productFront/tipe/Mercy')}}">JOK MERCY</a></li>
                                <li><a href="{{URL('productFront/tipe/Mazda')}}">JOK MAZDA</a></li>
                                <li><a href="{{URL('productFront/tipe/LandCruiser')}}">JOK LAND CRUISER</a></li>
                                <li><a href="{{URL('productFront/tipe/Avanza')}}">JOK AVANZA</a></li>
                                <li><a href="{{URL('productFront/tipe/Fortuner')}}">JOK FORTUNER</a></li>
                                <li><a href="{{URL('productFront/tipe/Jazz')}}">JOK JAZZ</a></li> -->
                               <!--  <li><a href="#">JOK ALPHARD</a></li>
                                <li><a href="#">JOK BENTLEY</a></li>
                                <li><a href="#">JOK CRV</a></li>
                                <li><a href="#">JOK FORD</a></li>
                                <li><a href="#">JOK FREED</a></li>
                                <li><a href="#">JOK GRAND LEVINA</a></li>
                                <li><a href="#">JOK GREAT</a></li>
                                <li><a href="#">JOK HYUNDAI</a></li>
                                <li><a href="#">JOK INNOVA</a></li>
                                <li><a href="#">JOK MERCY</a></li>
                                <li><a href="#">JOK MAZDA</a></li>
                                <li><a href="#">JOK RANGE ROVER</a></li>
                                <li><a href="#">JOK SWIFT</a></li>
                                <li><a href="#">JOK LAND CRUISER</a></li>
                                <li><a href="#">JOK FORTUNER</a></li>
                                <li><a href="#">JOK JAZZ</a></li>
                                <li><a href="#">JOK SX4</a></li>
                                <li><a href="#">JOK TIMOR</a></li>
                                <li><a href="#">JOK VIOS</a></li>
                                <li><a href="#">JOK CUSTOM</a></li>
                                <li><a href="#">JOK LAIN-LAIN</a></li> -->
                            </ul>
                        </li>
                       <li><a href="{{URL('news')}}">News</a></li>
                        <li><a href="{{URL('gallery')}}">Gallery</a></li> 
                        <li><a href="{{URL('contactUs')}}">Contact Us</a></li>
                    </ul>        
                </div>
            </div>
        </nav>
	</header>
    <section>
        @yield('content')

    </section>
    <footer>
        <div style="height:100%;background-image:url('WEB JOK/img/black_lozenge_@2X.png');">
            <div class="container" style="color:#F9F9F9;">
                <div class="row" style="margin-top:4%;margin-bottom:4%;">
                    <div class="col-lg-4">
                        <h4>Social Media</h4>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                                <p>Follow dan Subscribe kami di sosial media untuk mendapatkan berita terbaru :
                                </p>
                            </div>
                            <div class="row" style="color:white;">
                                <a href="#"><i class="fa fa-facebook fa-2x" style="margin-right:3%;"></i></a>
                                <a href="https://twitter.com/cjsleatherseat"><i class="fa fa-twitter fa-2x" style="margin-right:3%;"></i></a>
                                <a href=""><i class="fa fa-youtube-square fa-2x" style="margin-right:3%;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>Information</h4>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="col-lg-4" style="margin-bottom:4%;">
                                    <li><a href="#"><p>Home</p></a></li>
                                    <li><a href="#"><p>About Us</p></a></li> 
                                    <li><a href="#"><p>Product</p></a></li> 
                                </div>
                                <div class="col-lg-4">
                                    <li><a href="#"><p>News</p></a></li>
                                    <li><a href="#"><p>Gallery</p></a></li> 
                                    <li><a href="#"><p>Contact Us</p></a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>Office</h4>
                        <hr>
                        <div>
                            <div class="row">
                                <div class="col-lg-1" style="margin-bottom:4%;">
                                    <i class="fa fa-map-marker fa-lg"></i>
                                </div>
                                <div class="col-lg-11">
                                    <p>Jl. TB Simatupang No 35A (sebelah RS KMN), Lebak Bulus, Jakarta Selatan</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1" style="margin-bottom:4%;">
                                    <i class="fa fa-phone-square fa-lg"></i>
                                 </div>
                                 <div class="col-lg-11">
                                    <p>021 70133520 | 081311509509 | 021 29042555</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1" style="margin-bottom:4%;">
                                    <i class="fa fa-envelope fa-lg"></i>
                                </div>
                                <div class="col-lg-11">
                                    <p>CJS_leatherseat@yahoo.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1" style="margin-bottom:4%;">
                                    <i class="fa fa-clock-o fa-lg"></i>
                                </div>
                                <div class="col-lg-11">
                                    <p>Mon - Sat: 8:30 - 17:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100%;background-color:#000;color:#CCC;font-size:1em;" align="center">
            <div class="container">
                <div class="row" style="margin-top:2%;margin-bottom:1%;">
                    <p>&copy; Copyrights 2015 CJS Leather Seat, Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>