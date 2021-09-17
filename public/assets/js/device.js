$(document).ready(function(){
    if(window.matchMedia("(max-width: 767px)").matches){
        Swal.fire({
        icon: 'warning',
        title: 'Mobile Device Detected !',
        html: "Seems like you're using mobile device. For better UI, we suggest you to use your Laptop or Desktop. ",
        confirmButtonText: `OK, I Understand !`,
        footer : "<span style='font-size : 9px; color :red'> This warning is showing because Website is in Development mode <span>"
        });
    } else{
    
    }
    });