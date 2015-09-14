@extends('admin.template')


@section('content')
<div class="box box-danger">
                <img src="{{ url('/upload/',$data->image)}}" class="img-thumbnail" alt="Image">

                <div class="box-header with-border">
                  <h3 class="box-title">Update Product Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($data,['method'=>'PATCH','files'=>'true','action'=>['newsController@update',$data->id]])!!}
                  <div class="box-body">
                <div class="form-group">
                  {!! Form::label('judul','Judul: ')!!}
                  {!! Form::text('judul',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                  {!! Form::label('isi','Isi:')!!}
                  {!! Form::textarea('isi',null,['class'=>'form-control'])!!}
              </div>
                  <div class="form-group">
                {!! Form::label('berita','Upload News Thumbnail:')!!}
                {!! Form::file('berita')!!}
              </div>
               <div class="form-group">
                 {!! Form::submit('Submit',['class'=>'btn bg-olive '])!!}
                </div>
                </div>
                {!! Form::close()!!}
                <!-- Form End -->
</div><!-- /.box -->
@stop