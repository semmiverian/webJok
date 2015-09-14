<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CJS</title>
	<link href="{{asset("WEB JOK/css/bootstrap.min.css")}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("WEB JOK/css/style.css")}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div><!-- navbar-header -->
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li> 
                        <li><a href="#">Product</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Gallery</a></li> 
                        <li><a href="#">Contact Us</a></li>
                    </ul>        
                </div>
            </div>
        </nav>
	</header>
    <div class="container" style="margin-top:105px;">
    	<div class="row" style="margin-bottom:2%;">
        	<div class="container" align="center">
                <h2>Product Details</h2>
                <hr>
            </div>
            <div class="container-fluid">
        		<h3>{{$data->nama}}</h3>
            </div>
            <div class="row">
            	<div class="col-lg-9">
                    <div class="container-fluid" style="margin-top:1%;">
                        <img src="{{ url('/upload/',$data->image)}}" width="auto" height="auto" class="img-responsive" style="width:100%;height:30em">
                    </div>
                    <div class="container-fluid" style="margin-top:2%;">
                        <p>{{$data->detail}}</p>
                    </div>
                    <div class="row" align="center">
                        <nav>
                            <ul class="pager">
                                 @if($prev==0)
                                    <li class="disabled">
                                        <a href="#" class="disabled">Previous</a>
                                    </li>
                                    <li>
                                         <a href="{{url('/productFront',$next)}}">Next</a>
                                    </li>
                                    @elseif($prev!=0)
                                    <li>
                                        <a href="{{url('/productFront',$prev)}}">Previous</a>
                                    </li>
                                    @endif
                                @if($next==0)
                                    <li class="disabled">
                                        <a href="#" class="disabled">Next</a>
                                    </li>
                                    @elseif($prev!=0)
                                    <li>
                                        <a href="{{url('/productFront',$next)}}">Next</a>
                                    </li>
                                    @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <hr>
    </div>
    <footer>
    	<div style="height:100%;background-image:url(WEB JOK/img/black_lozenge_@2X.png);margin-top:3%;">
        	<div class="container" style="color:#F9F9F9;">
            	<div class="row" style="margin-top:4%;margin-bottom:4%;">
                	<div class="col-lg-4">
                    	<h4>Social Media</h4>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                                </p>
                            </div>
                            <div class="row">
                            	<i class="fa fa-facebook fa-2x" style="margin-right:3%;"></i>
                            	<i class="fa fa-twitter fa-2x" style="margin-right:3%;"></i>
                                <i class="fa fa-youtube-square fa-2x" style="margin-right:3%;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    	<h4>Information</h4>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
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
                                	<p>Indonesia Raya</p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-1" style="margin-bottom:4%;">
                                	<i class="fa fa-phone-square fa-lg"></i>
                                 </div>
                                 <div class="col-lg-11">
                                	<p>08952xxxxx</p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-1" style="margin-bottom:4%;">
                               		<i class="fa fa-envelope fa-lg"></i>
                                </div>
                                <div class="col-lg-11">
                                	<p>blank@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-1" style="margin-bottom:4%;">
                                	<i class="fa fa-clock-o fa-lg"></i>
                                </div>
                                <div class="col-lg-11">
                                	<p>Mon - Sat: 9:00 - 18:00</p>
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
        			<p>&copy; Copyrights 2015 AppBuild, Inc. All rights reserved.</p>
                </div>
        	</div>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{asset("WEB JOK/js/bootstrap.min.js")}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>