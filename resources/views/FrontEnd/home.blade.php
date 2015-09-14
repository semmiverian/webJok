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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Product 1</a></li>
                                <li><a href="#">Product 2</a></li>
                                <li><a href="#">Product 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Gallery</a></li> 
                        <li><a href="#">Contact Us</a></li>
                    </ul>        
                </div>
            </div>
        </nav>
	</header>
    <div style="margin-top:105px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="{{$dataFirst->id}}" class="active"></li>
                @foreach($dataSlider as $slideshow)
                   <li data-target="#myCarousel" data-slide-to="{{$slideshow->id}}" ></li>
                @endforeach
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <img src="{{ url('/upload/',$dataFirst->image)}}" alt="{{$slideshow->id}}">
                </div>
                @foreach($dataSlider as $slideshow)
                    <div class="item">
                      <img src="{{ url('/upload/',$slideshow->image)}}" alt="{{$slideshow->id}}">
                    </div>
                @endforeach
            </div>
            
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
	</div>
    <div style="width:100%;background-color:#ffffff;color:#313131;">
    	<div class="container">
            <div class="row" style="margin-top:5%">
            	<div class="col-lg-4" align="center">
                	<br>
                    <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="350" height="230">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4" align="left">
                    <h2>Welcome to CJS</h2>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                	<h2>Location</h2>
                    <hr/>
                    <h4>Heading</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.row -->
        </div>
    </div>
    <div style="height:100%;background-color:#333;margin-top:3%;">
    	<div class="container" style="color:white;margin-bottom:3%;">
        	<div class="row" style="margin-top:2%;">
            	<div class="col-lg-6" align="center">
        			<h3>Banner</h3>
                    <hr/>
                    <div class="row">
                    @foreach($dataBanner as $banner)
                        <div class="col-lg-4" style="margin-bottom:2%;">
                             <img class="img" src="{{ url('/upload/',$banner->image)}}" alt="Ad Space Available" width="170" height="130">
                        </div>
                        @endforeach
                	</div>
                </div>
                <div class="col-lg-6" align="center">
        			<h3>Ask Us</h3>
                    <hr/>
                    <div class="row">
                    	<div class="col-lg-12">
                        	<iframe name="I1" src="http://konsultasijok.chatango.com/" width="auto" height="auto" scrolling="no" style="width:100%;height:22em;">
                        	</iframe>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <div style="height:100%;background-color:#ffffff;margin-top:3%;">
    	<div class="container" align="center">
        	<h2>NEWS & PRODUCT</h2>
            <hr>
            <div class="row" style="margin-top:5%;margin-bottom:3%;">
                <div class="col-lg-4">
                    <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="350" height="200">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="350" height="200">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="350" height="200">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </div>
    <footer>
    	<div style="height:100%;background-image:url('WEB JOK/img/black_lozenge_@2X.png');margin-top:3%;">
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