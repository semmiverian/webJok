@extends('admin.template')

@section('content')
	<div class="col-md-9">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Membalas Email Customer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <form method="post" action="{{action('adminController@saveEmail',$data->id)}}" >
                {{csrf_field()}}
                  <div class="form-group">
                    <input class="form-control" name="email" placeholder="To:" value="{{$data->email}}" disabled>
                  </div>
                     <input type="hidden" name="email" value="{{$data->email}}">
                  <input type="hidden" name="name" value="{{$data->name}}">
                  <div class="form-group">
                    <input class="form-control" placeholder="Subject:" value="Membalas pertanyaan anda" disabled>
                  </div>
                  <blockquote>
                  	<b style="color:gray">Quote Pertanyaan Pelanggan : </b>
              			<p style="color:gray">	
              				{{$data->message}}
              			</p>
              		</blockquote>
                  <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px"></textarea>
                  </div>
               
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                  <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                </div><!-- /.box-footer -->
                </form>
              </div><!-- /. box -->
	</div>
@stop