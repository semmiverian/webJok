@if(Session::has('add'))
  <script src="{{asset("sweetalert/dist/sweetalert.min.js")}}"></script>
  <script>
            swal({   title: {{Session::get('add')}},  
                     text: "Back To Dashboard",   
                     type: "success",
                       
                     confirmButtonColor: "#1E7CFC",  
                     confirmButtonText: "Proceed",   
                     },
             function(){ window.location = '/usercontrol';});   
  </script>
  @endif