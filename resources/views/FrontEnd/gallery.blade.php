@extends('Frontend.template')
@section('content')
    <div class="container" style="margin-top:105px;">
    	<div class="row" style="margin-bottom:2%;">
        	<div class="container" align="center">
                <h2>Gallery</h2>
                <hr>
            </div>
            <div class="row" style="margin-top:2%;" align="center">
            @foreach($gallery as $data)
            <a href="{{ url('/upload/',$data->image)}}" data-lightbox="roadtrip">
                <img src="{{ url('/upload/',$data->image)}}" class="img-thumbnail" style="width:200px;height:200px;"alt="">
             </a>               
             @endforeach
                    
                </div> <!-- 1 gambar sampai sini -->
              
        </div>
        <div class="row" align="center">
            <!-- Pagination -->
            {!! $gallery->render() !!}
        </div>
        <hr>
    </div>
  @stop