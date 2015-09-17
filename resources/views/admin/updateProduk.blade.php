@extends('admin.template')


@section('content')
<div class="box box-danger">
                <img src="{{ url('/upload/',$data->image)}}" class="img-thumbnail" alt="Image">

                <div class="box-header with-border">
                  <h3 class="box-title">Update Product Detail</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($data,['method'=>'PATCH','files'=>'true','action'=>['produkController@update',$data->id]])!!}
                 
              	<div class="box-body">
              		<div class="form-group">
                  {!! Form::label('nama','Nama Barang : ')!!}
                  {!! Form::text('nama',null,['class'=>'form-control'])!!}
              </div>
                <div class="form-group">
                  {!! Form::label('telepon','No Telepon : ')!!}
                  {!! Form::text('telepon',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                  {!! Form::label('harga','Harga Barang : ')!!}
                  {!! Form::text('harga',null,['class'=>'form-control'])!!}
              </div>
              
              <div class="form-group">
                  {!! Form::label('detail','Detail Produk:')!!}
                  {!! Form::textarea('detail',null,['class'=>'form-control'])!!}
              </div>
                <div class="form-group">
                  {!! Form::label('tipe','tipemobil:')!!}
                  {!! Form::text('tipe',null,['class'=>'form-control','disabled'])!!}
              </div>
              <div class="form-group">
                {!! Form::label('produk','Upload Produk Image:')!!}
                {!! Form::file('produk')!!}
              </div>
               <div class="form-group">
                 {!! Form::submit('Submit',['class'=>'btn btn-primary '])!!}
                </div>
                </div>
                {!! Form::close()!!}
                <!-- Form End -->
</div><!-- /.box -->
@stop