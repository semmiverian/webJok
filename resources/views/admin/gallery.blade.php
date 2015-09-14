@extends('admin.template')

@section('content')
<div class="row">
	<div class="col-md-6">
              <div class="box  box-info box-solid ">
                <div class="box-header with-border">
                  <h3 class="box-title">Info</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p>Tempat Untuk mengatur Gallery Photo anda.</p>
                  <p>Anda Bisa menambahkan, menghapus, dan melakukan pembaharuan pada Gambar yang anda pilih</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  <div class="col-md-6">
		<div class="small-box bg-teal">
	                <div class="inner">
	                  <h3>{{$count}} </h3>
	                  <p>Image Show</p>
	                </div>
	                <div class="icon">
	                 <i class="fa fa-user-md"></i>
	                </div>
	      </div>
    </div>
    <div class=" col-md-12 box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Gallery Image</h3>
                </div><!-- /.box-header -->
               
              <!-- form start -->
                 {!! Form::open(['action'=>'galleryController@store','method'=>'post','files'=>'true','class'=>'dropzone','id'=>'galleryForm'])!!}
                 
                 <div class="dz-message">
                  Drag atau Klik untuk otomatis upload foto
                 </div>

                {!! Form::close()!!}
                
                <!-- Form End -->   
    </div><!-- /.box -->
    <div class="col-md-10  box box-primary">
          <div class="box-header with-border">
                  <h3 class="box-title">Gallery Image Collection</h3>
                </div><!-- /.box-header -->
        @foreach($data as $gallery)
        <div class="col-md-4" style="margin-bottom:1em;">
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                      <img class="img-responsive" src="upload/{{$gallery->image}}" alt="" width="auto" height="auto" style="height:16em;">
                    </a>
                    <div class="row" style="margin-top:1em;">
                      <div class="col-md-offset-2 col-md-2">
                        {!! Form::open(['method'=>'get','action'=>['galleryController@edit',$gallery->id]])!!}
                         {!! Form::submit('Edit',['class'=>'btn bg-navy']) !!}
                          {!! Form::close()!!}
                      </div>
                      <div class=" col-md-2">    
                         {!! Form::open(['method'=>'DELETE','action'=>['galleryController@destroy',$gallery->id]])!!}
                         {!! Form::submit('Delete',['class'=>'btn bg-olive']) !!}
                          {!! Form::close()!!}
                      </div>
                    </div>
                  </div>
         @endforeach
    </div>
  </div> <!-- Row Closed -->  
@stop

@section('script')
  @include('partials.dropzoneScriptGallery')
@stop