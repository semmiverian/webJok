@extends('FrontEnd.template')
@section('produk')
    @foreach($tipe as $tipe)
     <li><a href="{{URL('productFront/tipe',$tipe->id)}}">JOK {{$tipe->name}}</a></li>
     @endforeach
@stop
@section('content')
    <!-- Main Content -->
    <div style="margin-top:105px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                @foreach($dataSlider as $slideshow)
                   <li data-target="#myCarousel" data-slide-to="{{$slideshow->id}}" ></li>
                @endforeach
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <img src="{{ url('/WEB JOK/img/about/2.jpg.')}}" alt="First Data">
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
            <div class="row" style="margin-top:8%;margin-bottom:8%;">
            	<div class="col-lg-4" align="center">
                	<br>
                        <img class="img2" src="WEB JOK/img/about/depan2.jpg" alt="no image" style="border: 2px solid #f2f2f2;">
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4" align="left">
                    <h2>Welcome to CJS</h2>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</p>
                    <p><a class="btn btn-default" href="{{URL('aboutus')}}" role="button">View details &raquo;</a></p>
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
    <div style="height:100%;" id="banner">
        <div class="container" style="color:white;margin-bottom:3%;">
            <div class="row" style="margin-top:2%;">
                <div class="col-lg-6" align="center">
        			<h3>Banner</h3>
                    <hr/>
                    <div class="row">
                    @foreach($dataBanner as $banner)
                       <div class="col-sm-4 col-xs-4" style="margin-top:2%;">
                             <img class=" img2" src="{{ url('/upload/',$banner->image)}}" alt="Ad Space Available" width="170" height="130">
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
        <!-- Services Starts Here -->
         <div style="width:100%;color:#ffffff;background-image:url('WEB Jok/img/grey_wash_wall.png');">
        <div class="container" align="center">
            <h2 style="margin-top:5%" >OUR SERVICES</h2>
            <hr>
        </div>
        <div class="container">
            <div class="row" style="margin-top:4%;margin-bottom:5%">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-wrench103" ></i>
                        <h2>Expert</h2>
                        <p style="color:#E6E6E6">Kami mengerjakan semua pesanan secara profesional</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-agreement" ></i>
                        <h2>Partnership</h2>
                        <p style="color:#E6E6E6">Kami menjalin hubungan dengan perusahaan jok terkemuka yang mendukung bisnis kami</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-clock96" ></i>
                        <h2>Time</h2>
                        <p style="color:#E6E6E6">Selalu memberikan yang terbaik kepada customer dan menyelesaikannya tepat waktu</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-first31" ></i>
                        <h2>Best Quality</h2>
                        <p style="color:#E6E6E6">Menggunakan kualitas bahan terbaik untuk jok anda</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-speedometer10" ></i>
                        <h2>Quick</h2>
                        <p style="color:#E6E6E6">Selalu berusaha memberikan service terbaik kepada para customer</p>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="feature-wrap">
                        <i class="flaticon-heart298" ></i>
                        <h2>Favorite</h2>
                        <p style="color:#E6E6E6">Menyediakan barang-barang yang banyak disukai customer jok</p>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </div> <!-- Services Ends Here -->

    <!-- Looks Like BreadCrumbs -->
    <div class="container-fluid" style="background:#FEFEFE;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-top:2%;" align="center">
                    <ol class="breadcrumb" style="background:none;">
                      <li><strong>COVER JOK</strong></li>
                      <li><strong>DOOR TRIM</strong></li>
                      <li><strong>PLAFON</strong></li>
                      <li><strong>BUNGKUS STIR</strong></li>
                      <li><strong>DASHBOARD</strong></li>
                      <li><strong>KARPET DASAR</strong></li>
                      <li><strong>WOODEN PANEL</strong></li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- BreadCrumbs Ends Here -->
    </div><!-- Main Contents Ends Here -->
@stop