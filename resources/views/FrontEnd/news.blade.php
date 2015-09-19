@extends('frontend.template')
@section('content')
    <div class="container" style="margin-top:105px;">
    	<div class="row" style="margin-bottom:2%;">
        	<div class="container" align="center">
                <h2>News</h2>
                <hr>
            </div>
        	<div class="col-lg-8">
                <div class="media">
                @foreach($news as $berita)
                    <div class="media-left">
                        <a href="#">
                        	<img class="media-object img-thumbnail" src="{{ url('/upload/',$berita->image)}}" alt="{{$berita->judul}}" width="128" height="128">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="{{url('/news',$berita->id)}}"><h4 class="media-heading">{{$berita->judul}}</h4></a>
                        <p>{{str_limit($berita->isi,50)}}</p>
                    </div>
                </div> <!-- News Detail Ends Here-->
                @endforeach
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <div class="row" align="center">
        <!-- Pagination -->
           {!! $news->render() !!}
        </div>
        <hr>
    </div>
   @stop