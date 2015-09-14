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
                            <p>This guys is Admin</p>
                          @endif
                           @if(App\User::findOrFail($data->id)->hasRole('staff'))
                            <p>This guys is Staff</p>
                          @endif
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