@extends('admin.template')

@section('content')
	<div class="col-md-12">
              <div class="box   box-solid bg-teal">
                <div class="box-header with-border">
                  <h3 class="box-title">Info</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p>Tempat Untuk mengatur Produk anda.</p>
                  <p>Anda Bisa menambahkan, menghapus, dan melakukan pembaharuan pada produk yang anda pilih</p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  <div class="col-md-4">
		<div class="small-box bg-teal">
	                <div class="inner">
	                  <h3>{{$count}} </h3>
	                  <p>Product Available</p>
	                </div>
	                <div class="icon">
	                 <i class="fa fa-user-md"></i>
	                </div>
	                <a href="{{action('produkController@create')}}" class="small-box-footer">
	                  Add new Product <i class="fa fa-arrow-circle-right"></i>
	                </a>
	      </div>
      </div>
      <div class="col-md-4">
         <div class="box box-danger">
        <div class="box-header with-border">
         <h3 class="box-title">Add New Car Type </h3>
        </div><!-- Box Header -->
        <div class="box-body">
        {!! Form::open(['method'=>'POST','files'=>'true','action'=>['produkController@addType']])!!}
              <div class="form-group">
                  {!! Form::label('type','Tipe Mobil : ')!!}
                  {!! Form::text('type',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                 {!! Form::submit('Submit',['class'=>'btn btn-danger '])!!}
                </div>
          {!! Form::close() !!}
        </div> <!-- Box Body -->
      </div><!-- Box End -->
      </div>

	<div class="col-xs-12">
        		<!-- Tabel Start -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama barang </th>
                        <th>Detail</th>
                        <th>No Telepon</th>
                        <th>Harga</th>
                        <th>Tipe</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $produk)
                      <tr>
                        <td>{{$produk->id}}</td>
                        <td>{{$produk->nama}}</td>
                        <td>{{$produk->detail}}</td>
                        <td>{{$produk->telepon}}</td>
                        <td>{{$produk->harga}}</td>
                        <td>{{typeShow($produk->id)}}</td>
                        <td>
                          <img src="upload/{{$produk->image}}" class="img-thumbnail" style="width:480x;height:480px;" alt="Image">
                        </td>
                        <td>
                          {!! Form::open(['method'=>'get','action'=>['produkController@edit',$produk->id]])!!}
                         {!! Form::submit('Edit',['class'=>'btn bg-teal']) !!}
                          {!! Form::close()!!}
                        
                         {!! Form::open(['method'=>'DELETE','action'=>['produkController@destroy',$produk->id]])!!}
                         {!! Form::submit('Delete',['class'=>'btn bg-maroon']) !!}
                          {!! Form::close()!!}
                        </td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama barang </th>
                        <th>Detail</th>
                        <th>No Telepon</th>
                        <th>Harga</th>
                        <th>Tipe</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div><!--COL-->
@stop