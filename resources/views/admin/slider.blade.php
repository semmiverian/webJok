@extends('admin.template')

@section('content')
	<div class="col-md-12">
              <div class="box  box-danger box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Info</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p>Tempat Untuk menambah gambar pada slideshow di halaman depan.</p>
                  <p>Anda Bisa menambahkan, menghapus, dan melakukan pembaharuan pada Gambar Slide</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  <div class="col-md-4">
		<div class="small-box bg-aqua">
	                <div class="inner">
	                  <h3>{{$count}} </h3>
	                  <p>Slide Active</p>
	                </div>
	                <div class="icon">
	                  <i class="fa fa-camera"></i>
	                </div>
	                <a href="{{action('slideController@showForm')}}" class="small-box-footer">
	                  Add new SlideShow Image <i class="fa fa-arrow-circle-right"></i>
	                </a>
	      </div>
      </div>

	<div class="col-xs-12">
        		<!-- Tabel Start -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">SlideShow Image Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>
                          <img src="upload/{{$data->image}}" class="img-thumbnail" style="width:70%;height:30%;" alt="Image">
                        </td>
                        <td>
                         {!! Form::open(['method'=>'get','action'=>['slideController@edit',$data->id]])!!}
                         {!! Form::submit('Edit',['class'=>'btn bg-navy']) !!}
                          {!! Form::close()!!}
                        
                         {!! Form::open(['method'=>'DELETE','action'=>['slideController@destroy',$data->id]])!!}
                         {!! Form::submit('Delete',['class'=>'btn bg-olive']) !!}
                          {!! Form::close()!!}
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!--COL-->
@stop