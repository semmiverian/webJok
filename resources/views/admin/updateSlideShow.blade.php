@extends('admin.template')


@section('content')
<div class="box box-primary">
                <img src="{{ url('/upload/',$data->image)}}" class="img-thumbnail" alt="Image">

                <div class="box-header with-border">
                  <h3 class="box-title">Update  SlideShow Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($data,['method'=>'PATCH','files'=>'true','action'=>['slideController@update',$data->id],'class'=>'dropzone','id'=>'slideshowForm'])!!}
                 
              	<div class="box-body">
                	<div class="dz-message">
                    Drag atau Klik untuk otomatis upload foto
                   </div>
                </div>
                {!! Form::close()!!}
                <!-- Form End -->
</div><!-- /.box -->
@stop

@section('script')
  @include('partials.dropzoneScript')
@stop