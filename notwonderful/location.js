var x = document.getElementById("mapouter");
var y = $('#accept');

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  var z = position.coords.latitude+','+position.coords.longitude;
  console.log(position);

  var lt = position.coords.latitude;
  var ln = position.coords.longitude;

  console.log(convertDMS(lt,ln));

  function toDegreesMinutesAndSeconds(coordinate) {
      var absolute = Math.abs(coordinate);
      var degrees = Math.floor(absolute);
      var minutesNotTruncated = (absolute - degrees) * 60;
      var minutes = Math.floor(minutesNotTruncated);
      var seconds = Math.floor((minutesNotTruncated - minutes) * 60);
 
      return degrees + " " + minutes + " " + seconds;
    }
 
    function convertDMS(lat, lng) {
      var latitude = toDegreesMinutesAndSeconds(lat);
      var latitudeCardinal = lat >= 0 ? "N" : "S";
 
      var longitude = toDegreesMinutesAndSeconds(lng);
      var longitudeCardinal = lng >= 0 ? "E" : "W";
 
      return (
        latitude +
        " " +
        latitudeCardinal +
        "\n" +
        longitude +
        " " +
        longitudeCardinal
      );
    }
    var loc = lt+','+ln;
    $.ajax({
        url: "getlocation.php",
        type: "GET",
        data : { location : loc },
        success: function(data){
            console.log(position.coords.accuracy);
        }
    });
  $('#mapouter').html(`
    <iframe class="gmap_iframe" frameborder="0" scrolling="no" width="100%" height='350px' marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=@${z}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
  `);
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = `<p><span style='color:red'>*User denied the request for Geolocation.* </span> <br> Please enable location to proceed <br> 
        1.Press on i button on top left, before url <br>
        2.Location<br>
        3.Enable<br>
      </p>`;
      y.prop("disabled", true);
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}

const onConfirmRefresh = function (event) {
    event.preventDefault();
    let re = sessionStorage.getItem("reload");
    if(re=='kill'){

    }else {
        return event.returnValue = "Are you sure you want to leave the page?";
    }
  }
  
  window.addEventListener("beforeunload", onConfirmRefresh, { capture: true });