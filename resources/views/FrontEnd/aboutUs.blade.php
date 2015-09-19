@extends('frontend.template')
@section('produk')
    @foreach($tipe as $tipe)
     <li><a href="{{URL('productFront/tipe',$tipe->id)}}">JOK {{$tipe->name}}</a></li>
     @endforeach
@stop
@section('content')
    <div class="container" style="margin-top:105px;">
    	<div class="row" style="margin-bottom:2%;">
        	<div class="container">
                <h2>About CJS Leather Seat</h2>
                <hr>
            </div>
        	<div class="col-lg-7">
            	<p>
                 {{$about->detail}}   
                </p>
            </div>
            <div class="col-lg-5">
            	<img src="upload/{{$about->gambar}}" width="auto" height="auto" class="img-thumbnail" style="width:100%;height:100%;">
            </div>
        </div>
        
            @foreach($gallery as $gallery)
        	<div class="col-lg-3" style="margin-bottom:2%">
            <img src="upload/{{$gallery->image}}" width="auto" height="auto" class="img2 img-thumbnail" style="width:100%;height:12em;"></div>      
             @endforeach
        </div>
       
    
@stop()