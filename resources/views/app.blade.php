<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>


<script>
    var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [52.293448, 104.296623],
            zoom: 16,
            scrollWheelZoom: false
        });                                        
        mapicon = DG.icon({
            iconUrl: 'light_marker.svg',
            iconAnchor: [32, 64], 
            popupAnchor: [0, 24],
            className: 'map-icon',
            iconSize: [64, 64]
        });          
        DG.marker([52.293448, 104.296623], {icon: mapicon}).addTo(map).bindPopup('<div><h2>IRKUTSUN</h2><br/>Находимся в <b>Фортуне</b><br/>на <b>2 этаже 123.п</b></div>');
    });
</script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>