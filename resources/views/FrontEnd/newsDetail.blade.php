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
                <h2>News</h2>
                <hr>
            </div>
            <div class="container-fluid">
        		<h3>{{$data->judul}}</h3>
            </div>
            <div class="row">
            	<div class="col-lg-9">
                    <div class="container-fluid" style="margin-top:1%;">
                        <img src="{{ url('/upload/',$data->image)}}" width="auto" height="auto" class="img-responsive" style="width:100%;height:30em">
                    </div>
                    <div class="container-fluid" style="margin-top:2%;">
                        <p>{{$data->isi}}></p>
                    </div>
                    <div class="row" align="center">
                        <nav>
                            <ul class="pager">      
                                    @if($prev==0)
                                    <li class="disabled">
                                        <a href="#" class="disabled">Previous</a>
                                    </li>
                                    <li>
                                         <a href="{{url('/news',$next)}}">Next</a>
                                    </li>
                                    @elseif($prev!=0)
                                    <li>
                                        <a href="{{url('/news',$prev)}}">Previous</a>
                                    </li>
                                    @endif
                                @if($next==0)
                                    <li class="disabled">
                                        <a href="#" class="disabled">Next</a>
                                    </li>
                                    @elseif($prev!=0)
                                    <li>
                                        <a href="{{url('/news',$next)}}">Next</a>
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
   @stop