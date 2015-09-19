@extends('FrontEnd.template')
@section('produk')
    @foreach($tipe as $tipe)
     <li><a href="{{URL('productFront/tipe',$tipe->id)}}">JOK {{$tipe->name}}</a></li>
     @endforeach
@stop

@section('content')
    <div class="container" style="margin-top:105px;">
    	<div class="row" style="margin-bottom:2%;">
        	<div class="container" align="center">
                <h2>Product</h2>
                <hr>
            </div>
            <div class="row" style="margin-top:2%;" align="center">
                <div class="col-lg-3">
                @foreach($produk as $data)
                	<a href="#" data-toggle="modal" data-target="#myModal">
                    	<img class="img-thumbnail" src="{{ url('/upload/',$data->image)}}" alt="{{$data->nama}}" width="auto" height="auto" style="height:16em;">
                    </a>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:10%;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            	<div class="modal-header">
          							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          							<h4 class="modal-title" id="myModal">{{$data->nama}}</h4>
                                </div>
                                <div class="modal-body">
                                	<img src="{{ url('/upload/',$data->image)}}" class="img-responsive">
                                    <hr>
                                    <div align="left">
                                    <h3>{{$data->nama}}</h3> 
                                    <p align="left">{{$data->detail}}
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div align="left">
                         <a href="{{url('/productFront',$data->id)}}"><h4><strong>{{$data->nama}}</strong></h4></a>
                        <h4 style="color:#F03;">Price : {{$data->harga}}</h4>
                        <h4 style="color:#F03;">Call : {{$data->telepon}}</h4>
                    </div>
                    @endforeach
                </div> <!-- Data Produk sampai disini-->
                
            </div>
        </div>
        
        <hr>
    </div>
@stop