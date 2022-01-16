<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>


    <!-- General CSS Files asset -->
    <link rel="stylesheet" href="asset/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/components.css">
    <link rel="stylesheet" href="asset/img/maker">
    {{-- -------------------------------------------------------------------------------------- --}}

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/maps.css">

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    {{-- @livewireStyles --}}

    {{-- lifelite js --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Load Esri Leaflet Vector from CDN -->
    <script src="https://unpkg.com/esri-leaflet-vector@3.1.1/dist/esri-leaflet-vector.js" integrity="sha512-7rLAors9em7cR3/583gZSvu1mxwPBUjWjdFJ000pc4Wpu+fq84lXF1l4dbG4ShiPQ4pSBUTb4e9xaO6xtMZIlA==" crossorigin=""></script>
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        {{-- <span class="icon logo" aria-hidden="true"></span> --}}
                        <div class="logo-text">
                            <span class="logo-title">Montain</span>
                            <span class="logo-subtitle">Aplikasi</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="gunung" id="nav-menu">
                                <span class="icon image" aria-hidden="true"></span>Searh Lokasi
                            </a>

                        </li>
                        <li>

                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="pages.html">All pages</a>
                                </li>
                                <li>
                                    <a href="new-page.html">Add new page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="lokasi">
                                <span class="icon message" aria-hidden="true"></span>
                                Data Gunung
                            </a>

                        </li>
                    </ul>
                    <span class="system-menu__title">system</span>
                    <ul class="sidebar-body-menu">
                        <li>
                            <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Appearance</a>
                        </li>

                        <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                        </li>
                    </ul>
                </div>
            </div>

        </aside>

        <div class="main-wrapper">
            <!-- ! Main nav -->
            @include('layouts.nav');
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Dashboard</h2>

                    @yield('content')
                </div>
            </main>


            <!-- ! Footer -->
            @include('layouts.footer')
            <!-- -  -->

        </div>
    </div>

    <!-- Chart library -->

    <script src="assets/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="assets/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    {{-- <script src="assets/js/script.js"></script> --}}

    {{-- maps script --}}
    <Script>
        var map = L.map('map').setView([-8.5956624, 116.1161152], 13);
        // var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

        // 	maxZoom: 18,
        // 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        // 		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        // 	id: 'mapbox/streets-v11',
        // 	tileSize: 512,
        // 	zoomOffset: -1
        // }).addTo(map);

        // type maps
        // hybrids :s,h
        // street : m;
        // terrain : p;

        L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);



        // maker icon lokasi
        var hospital = L.icon({
            iconUrl: 'asset/img/maker/hospital.png',

            iconSize: [38, 48], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });


        //POLYLANE
        // create a red polyline from an array of LatLng points
        var latlngs = [
            [45.51, -122.68],
            [37.77, -122.43],
            [34.04, -118.2]
        ];

        var polyline = L.polyline(latlngs, {
            color: 'blue'
        }).addTo(map);

        // zoom the map to the polyline
        map.fitBounds(polyline.getBounds());

        //POLYGON
        // create a red polygon from an array of LatLng points
        var latlngs = [
            [37, -109.05],
            [41, -109.03],
            [41, -102.05],
            [37, -102.04]
        ];

        var polygon = L.polygon(latlngs, {
            color: 'red'
        }).addTo(map);

        // zoom the map to the polygon
        map.fitBounds(polygon.getBounds());

        // add to map
        L.marker([-8.5956624, 116.1161152], {
            icon: hospital
        }).addTo(map);
    </Script>
</body>

</html>