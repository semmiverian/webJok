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
                  <p>Control User</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  <div class="col-md-4">
		<div class="small-box bg-aqua">
	                <div class="inner">
                  <h3>a</h3>
                    <p>User Temp</p>
	                </div>
	                <div class="icon">
	                  <i class="fa fa-camera"></i>
	                </div>
	               
	      </div>
      </div>

	<div class="col-xs-12">
        		<!-- Tabel Start -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">User Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        @if($user->hasRole('admin'))
                        <th>Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>
                          {{$data->name}}
                        </td>
                        <td>
                          {{$data->email}}
                        </td>
                        <td> 
                          @if(App\User::findOrFail($data->id)->hasRole('admin'))
                            <button class="btn btn-primary" type="button" >
                            <span class="badge" style="background-color:#CC1444"> <i class="fa fa-user"></i></span>
                              Administrator 
                            </button>                         
                          @endif
                           @if(App\User::findOrFail($data->id)->hasRole('staff'))
                             <button class="btn btn-warning" type="button" >
                            <span class="badge" style="background-color:#9330F0"> <i class="fa fa-user"></i></span>
                              Staff
                            </button>
                           @elseif(!App\User::findOrFail($data->id)->hasRole('admin'))
                             <button class="btn btn-success" type="button" >
                            <span class="badge" style="background-color:#41C7ED"> <i class="fa fa-user"></i></span>
                              Unvalid
                            </button>
                          @endif
                        </td>
                         
                        <td>
                            @if($user->hasRole('admin') && ! App\User::findOrFail($data->id)->hasRole('staff') 
                                && ! App\User::findOrFail($data->id)->hasRole('admin') )
                                <div class="validate" style="margin-bottom:1em">
                                  {!! Form::open(['action'=>['userControl@validateUser',$data->id],'method'=>'post'])!!}
                                   <button type="submit" class="btn bg-maroon">
                                      <span tyle="background-color:#41C7ED"> <i class="fa fa-thumbs-o-up"></i></span>
                                      Validate User
                                    </button>
                                  {!! Form::close()!!}
                                 @endif
                           </div>
                           <div class="delete">
                             @if($user->hasRole('admin') )
                              {!! Form::open(['method'=>'DELETE','action'=>['userControl@destroy',$data->id]])!!}
                              <button type="submit" class="btn bg-olive">
                                <span tyle="background-color:#FA1137"> <i class="fa fa-trash-o"></i></span> 
                                Delete User
                              </button>
                               {!! Form::close()!!}
                              @endif
                            </div>
                        </td>

                        
                      </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!--COL-->
@stop
@section('script')
  @include('partials.userFlash')
@stop