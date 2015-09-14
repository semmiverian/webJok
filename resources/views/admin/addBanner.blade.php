@extends('admin.template')


@section('content')
<div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Banner Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  {!! Form::open(['action'=>'bannerController@store','method'=>'post','files'=>'true','class'=>'dropzone','id'=>'bannerForm'])!!}
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
  @include('partials.dropzoneScriptBanner')
@stop