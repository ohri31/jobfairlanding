function initMap() {
    var myLatLng = {lat: 43.857, lng: 18.397};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}

function poziv(page){
    var ajax;
    if (window.XMLHttpRequest){
        ajax = new XMLHttpRequest(); // FIREFOX
    }
    else if (window.ActiveXObject){
        ajax = new ActiveXObject(); // IE
    }
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
            document.getElementById("screen").innerHTML = ajax.responseText;
        }
        if (ajax.readyState == 4 && ajax.status == 404)
            document.getElementById("screen").innerHTML = "Greska: nepoznat URL";
    }
    ajax.open("GET", page, true);
    ajax.send();
}