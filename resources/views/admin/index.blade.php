@extends('admin.template')

@section('content')
<div class="col-md-10">

	<div class="box no-padding">
	 <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                      @foreach($contact as $data)
                        <tr>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="{{URL('mail',$data->id)}}">{{$data->name}}</a></td>
                          <td class="mailbox-subject"><b>{{str_limit($data->message,20)}}</b></td>
                          <td class="mailbox-date">{{$data->created_at}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
            </div><!-- Col -->
@stop