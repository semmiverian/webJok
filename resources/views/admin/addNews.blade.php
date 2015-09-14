@extends('admin.template')


@section('content')
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add News Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 {!! Form::open(['action'=>'newsController@store','files'=>'true'])!!}
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
                <!-- Form End -->
</div><!-- /.box -->
@stop