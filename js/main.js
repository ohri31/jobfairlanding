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

function ChangeUrl(page, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = { Page: page, Url: url };
            history.pushState(obj, obj.Page, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
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

function ucitaj_vijest(id){
    $.post('action.php', {action: 'ucitaj_vijest', id: id}, function(res){
      $('#screen').epmty().append(res);
    });
}

function galleryhover(num)
{
    var obj = 'overlay' + num;
    var gal = 'gallery' + num;
    document.getElementsByClassName(obj)[0].style.opacity = 1;
    document.getElementsByClassName(gal)[0].style.backgroundColor="#909191";
    document.getElementsByClassName(gal)[0].style.opacity = 0.4;
}

function gallerynohover(num)
{
    var obj = 'overlay' + num;
    var gal = 'gallery' + num;
    document.getElementsByClassName(obj)[0].style.opacity = 0;
    document.getElementsByClassName(gal)[0].style.backgroundColor="#909191";
    document.getElementsByClassName(gal)[0].style.opacity = 1;
}

function gallerynewshover(num)
{
    var obj = 'news-img-top';
    var gal = 'otvori-galeriju';
    var gal_line = "otvori-galeriju-under-line";

    document.getElementsByClassName(gal)[0].style.opacity = 1;
     document.getElementsByClassName(gal)[0].style.color = "#909191";
    document.getElementsByClassName(gal_line)[0].style.backgroundColor = "#909191";
    document.getElementsByClassName(obj)[0].style.backgroundColor="#909191";
    document.getElementsByClassName(obj)[0].style.opacity = 0.5;
}

function gallerynewsnohover(num)
{
    var obj = 'news-img-top';
    var gal = 'otvori-galeriju';
    var gal_line = "otvori-galeriju-under-line";
     document.getElementsByClassName(gal)[0].style.color = "white";
    document.getElementsByClassName(gal_line)[0].style.backgroundColor = "white";
    document.getElementsByClassName(gal)[0].style.opacity = 0.5;
    document.getElementsByClassName(obj)[0].style.opacity = 1;
}

function opengallery(num)
{
    switch(num)
    {
            case 0:
                $.fancybox.open([
                    {
                        href : 'img/gallery/gallery1/1.JPG'
                    }, {
                        href : 'img/gallery/gallery1/2.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
          case 1:
                $.fancybox.open([
                    {
                        href : 'img/gallery/gallery2/1.JPG'
                    }, {
                        href : 'img/gallery/gallery2/2.JPG'
                    }, {
                        href : 'img/gallery/gallery2/3.JPG'
                    }, {
                        href : 'img/gallery/gallery2/4.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
            case 2:
                $.fancybox.open([
                    {
                        href : 'img/gallery/gallery3/1.JPG'
                    }, {
                        href : 'img/gallery/gallery3/2.JPG'
                    }, {
                        href : 'img/gallery/gallery3/3.JPG'
                    }, {
                        href : 'img/gallery/gallery3/4.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
            case 3:
                $.fancybox.open([
                    {
                        href : 'img/gallery/gallery4/1.JPG'
                    }, {
                        href : 'img/gallery/gallery4/2.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
            case 4:
            $.fancybox.open([
                    {
                        href : 'img/gallery/gallery5/1.JPG'
                    }, {
                        href : 'img/gallery/gallery5/2.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
            case 5:
                $.fancybox.open([
                    {
                        href : 'img/gallery/gallery6/1.JPG'
                    }, {
                        href : 'img/gallery/gallery6/2.JPG'
                    }, {
                        href : 'img/gallery/gallery6/3.JPG'
                    }, {
                        href : 'img/gallery/gallery6/4.JPG'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            break;
    }

}
