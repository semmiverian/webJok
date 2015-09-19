@extends('admin.template')

@section('content')
  <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                <div class="info-box-content">
                <span class="info-box-number" style="color:#1C396D">{{$count2}}</span>
                  <span class="info-box-text">Messages From Customer</span>
                  
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
  </div><!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-teal"><i class="fa fa-mail-reply"></i></span>
                <div class="info-box-content">
                <span class="info-box-number">{{$count}}</span>
                  <span class="info-box-text"> Email Has Been Replied</span>
                  
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
  </div><!-- /.col -->
<div class="col-md-10">
	<div class="box no-padding">
	 <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                   <thead>
                     <td></td>
                     <td>Pengirim</td>
                     <td>Content</td>
                     <td>Waktu</td>
                     <td>No Telepon</td>
                   </thead>
                      <tbody>
                      @foreach($contact as $data)
                        <tr>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="{{URL('mail',$data->id)}}">{{$data->name}}</a></td>
                          <td class="mailbox-subject"><b>{{str_limit($data->message,20)}}</b></td>
                          <td class="mailbox-date">{{$data->created_at}}</td>
                          <td class="mailbox-date">{{$data->phone}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
            </div><!-- Col -->
@stop