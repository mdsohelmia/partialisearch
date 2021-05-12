<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
<div id='map' style='width: 400px; height: 300px;'></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoic29oZWxjc2UxOTk5IiwiYSI6ImNrZDZjenE4eTA0dWUyc21nbXZmcmI0cXoifQ.MInELZPdYXprEjHiu1W8tg';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-74.5, 40], // starting position
        zoom: 9 // starting zoom
    });

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());
</script>
</body>
</html>
