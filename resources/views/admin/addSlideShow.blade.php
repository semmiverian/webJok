@extends('admin.template')


@section('content')
<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add SlideShow Data</h3>
                </div><!-- /.box-header -->
               
                <!-- form start -->
                 {!! Form::open(['action'=>'slideController@store','method'=>'post','files'=>'true','class'=>'dropzone','id'=>'slideshowForm'])!!}
                 
                 <div class="dz-message">
                  Drag atau Klik untuk otomatis upload foto
                 </div>

                {!! Form::close()!!}
                
                <!-- Form End -->   
</div><!-- /.box -->
@stop

@section('script')
  @include('partials.dropzoneScript')
@stop