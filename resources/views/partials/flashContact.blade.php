@extends('FrontEnd/contactUs')
@section('script')
 @if(Session::has('send'))
  
  <script>
            swal({   title: "Terimakasih kami akan menghubungi anda secepatnya",  
                     text: "Kembali ke halaman utama",   
                     type: "success",
                       
                     confirmButtonColor: "#1E7CFC",  
                     confirmButtonText: "Proceed",   
                     },
             function(){ window.location = '/';});   
  </script>
  @endif
  @stop