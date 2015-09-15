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
                            @else
                             <button class="btn btn-success" type="button" >
                            <span class="badge" style="background-color:#41C7ED"> <i class="fa fa-user"></i></span>
                              Unvalid
                            </button>
                          @endif
                        </td>
                         @if($user->hasRole('admin') && App\User::findOrFail($data->id)->hasRole('staff')== false)
                        <td>
                          <a href="{{action('userControl@validateUser',$data->id)}}"><button class="btn bg-maroon">
                            <span tyle="background-color:#41C7ED"> <i class="fa fa-user"></i></span>
                            Validate User
                           </button></a>
                        </td>
                        @endif
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