<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
  <script src="{{asset("sweetalert/dist/sweetalert.min.js")}}"></script>
  <script>
    Dropzone.options.galleryForm={
      paramName:'gallery',
      maxFilesize:4, 
      acceptedFiles:'.jpg, .png, .bmp',
       init: function () {
           this.on("success", function (file) {
            // Bakal muncul Popup notfi data berhasil di Upload
            // Ketika user klik proceed maka akan redirect balik ke data tabel slideshow
            swal({   title: "Data Berhasil Di Upload",  
                     text: "Back To Dashboard",   
                     type: "success",
                       
                     confirmButtonColor: "#1E7CFC",  
                     confirmButtonText: "Proceed",   
                     },
             function(){ window.location = '/galleryAdmin';});
        });
      }
    };
    
  </script>