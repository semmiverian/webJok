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
                    <p>Tempat Untuk mengatur data yang ada pada tampilan about us.</p>
                    <p>Anda Bisa menambahkan, menghapus, dan melakukan pembaharuan pada halaman About Us</p>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->
    </div>
    <div class="row">
    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Active Headline Image</h3>
        </div><!-- Box Header -->
        <div class="box-body">
          <img src="upload/{{$aboutUs->gambar}}" alt="imageAboutUs" class="img-thumbnail" >
        </div> <!-- Box Body -->
      </div><!-- Box End -->
      </div>
      <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
         <h3 class="box-title">Change Headline Image</h3>
        </div><!-- Box Header -->
        <div class="box-body">
         {!! Form::model($aboutUs,['method'=>'PATCH','files'=>'true','action'=>['aboutController@update',$aboutUs->id],'class'=>'dropzone','id'=>'updateImage'])!!}
              <div class="dz-message">
                    Drag atau Klik untuk otomatis upload foto
             </div>
          {!! Form::close() !!}
        </div> <!-- Box Body -->
      </div><!-- Box End -->
    </div><!-- Col End -->
</div>
    <!-- Update Detail pada About Us -->
    <div class="row">
    <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Active About Us Description</h3>
        </div><!-- Box Header -->
        <div class="box-body">
          <blockquote style="color:gray">{{$aboutUs->detail}}</blockquote>
        </div> <!-- Box Body -->
      </div><!-- Box End -->
      </div>
      <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
         <h3 class="box-title">Change About Us Description </h3>
        </div><!-- Box Header -->
        <div class="box-body">
         {!! Form::model($aboutUs,['method'=>'PATCH','action'=>['aboutController@updateDescription',$aboutUs->id]])!!}
             <div class="form-group">
                  {!! Form::label('detail','Deskripsi About Us:')!!}
                  {!! Form::textarea('detail',null,['class'=>'form-control'])!!}
              </div>
            <div class="form-group">
                 {!! Form::submit('Submit',['class'=>'btn btn-success '])!!}
             </div>
          {!! Form::close() !!}
        </div> <!-- Box Body -->
      </div><!-- Box End -->
    </div><!-- Col End -->
  </div>
  

@stop

@section('script')
  @include('partials.dropzoneScriptAboutUs')
@stop