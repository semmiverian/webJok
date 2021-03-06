@extends('admin.template')

@section('content')
	<div class="col-md-12">
              <div class="box  box-primary box-solid bg-gray">
                <div class="box-header with-border">
                  <h3 class="box-title">Info</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p>Tempat Untuk melakukan perubahan pada News yang ada pada Website ini.</p>
                  <p>Anda Bisa menambahkan, menghapus, dan melakukan pembaharuan pada News</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  <div class="col-md-4">
		<div class="small-box bg-gray">
	                <div class="inner">
	                  <h3>{{$count}} </h3>
	                  <p>News Released</p>
	                </div>
	                <div class="icon">
	                  <i class="fa fa-comment"></i>
	                </div>
	                <a href="{{action('newsController@create')}}" class="small-box-footer">
	                  Release new News <i class="fa fa-arrow-circle-right"></i>
	                </a>
	      </div>
      </div>

	<div class="col-xs-12">
        		<!-- Tabel Start -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">News Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $news)
                      <tr>
                        <td>{{$news->id}}</td>
                        <td>{{$news->judul}}</td>
                        <td>{{$news->isi}}</td>
                        <td>
                          <img src="upload/{{$news->image}}" class="img-thumbnail" style="width:70%;height:30%;" alt="Image">
                        </td>
                        <td>
                         {!! Form::open(['method'=>'get','action'=>['newsController@edit',$news->id]])!!}
                         {!! Form::submit('Edit',['class'=>'btn bg-navy']) !!}
                          {!! Form::close()!!}
                        
                         {!! Form::open(['method'=>'DELETE','action'=>['newsController@destroy',$news->id]])!!}
                         {!! Form::submit('Delete',['class'=>'btn bg-olive']) !!}
                          {!! Form::close()!!}
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!--COL-->
@stop