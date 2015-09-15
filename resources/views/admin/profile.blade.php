@extends('admin.template')

@section('content')
	<div class="col-md-4">
		
	</div>
	<div class="col-md-4 " >
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue" style="background: url('{{asset("admin-lte/dist/img/photo1.png")}}') center center;">
                  <h3 class="widget-user-username">{{$user->name}}</h3>
                  <h5 class="widget-user-desc">Administrator</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle"  src="{{asset("upload/$user->image") }}" style="width:100px;height:100px;"  alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
                
              </div><!-- /.widget-user -->
               {!! Form::open(['action'=>'adminController@UpImage','files'=>'true','class'=>'form-inline'])!!}
              
		        {!! Form::label('image','Upload Image:')!!}
		        {!! Form::file('image')!!}
        		{!! Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
				
                {!! Form::close()!!}
            </div><!-- /.col -->
@stop