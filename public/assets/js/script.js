$(document).ready(function(){
    $('#btn').show();
    $('#cancel').hide();
var m = document.getElementById("menu_btn");
$('#menu_btn').click(function(){
    $('#btn').toggle();
    $('#cancel').toggle();
  });
});




const d = new Date();
document.getElementById("date").innerHTML = d.getFullYear();



