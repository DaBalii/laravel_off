<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm" ></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Envoyer
                </h6>
                <a class="dropdown-item d-flex align-items-center black-background"  href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success" style="color: black;">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">Aout 7, 2013</div>
                        maison non renouveler payé à $290.29 !
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">regarder tous les alerts</a>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">1</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Envoyer
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile_1.svg" alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">! ! alerte j'ai besoin d'une maison vc et d'une douche interne.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">lire les messages</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{ auth()->user()->name }}
                    <br>
                    <small>{{ auth()->user()->level }}</small>
                </span>
                <img class="img-profile rounded-circle" src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<style>
    #map {
        height: 400px;
    }
</style>
<div id="map"></div>
<script type="text/javascript">
    var map;  // Variable globale pour stocker l'instance de la carte google maps
    var marker;  // Variable globale pour stocker le marqueur


    function showMap(lat, lng) {
        var myLatLng = {
            lat: lat,
            lng: lng
        };
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
        });
        new google.maps.Marker({
            position: myLatLng,
            map: map,
        });
    }

    function initMap() {

        var initialLat = 7.281255;
        var initialLng = 1.039647;
        showMap(initialLat, initialLng);
    }

    document.addEventListener("DOMContentLoaded", function (callback) {
        var positionCells = document.querySelectorAll('[data-position]');


        if (positionCells.length > 0) {
            var firstPosition = positionCells[0].getAttribute('data-position');
            var [firstLng, firstLat] = extractLngLatFromPosition(firstPosition);

            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: { lat: parseFloat(firstLat), lng: parseFloat(firstLng) },
            });

            var markers = [];
            var infoWindow = new google.maps.InfoWindow(); // Déclarez infoWindow en dehors de la boucle

            positionCells.forEach(function (cell) {
                var position = cell.getAttribute('data-position');
                var [lng, lat] = extractLngLatFromPosition(position);

                marker = new google.maps.Marker({
                    position: { lat: parseFloat(lat), lng: parseFloat(lng) },
                    map: map,
                });

                marker.addListener('click', function () {
                    var content = getInfoWindowContent(cell);
                    infoWindow.setContent(content);
                    console.log("Marqueur cliqué !");
                    console.log("Cellule associée :", cell);
                    infoWindow.open(map, marker);
                });

                markers.push(marker);
            });
        } else {
            var defaultLat = 7.281255;
            var defaultLng = 1.039647;

            showMap(defaultLat, defaultLng);
        }
    });

    function extractLngLatFromPosition(position) {
        var lng = parseFloat(position.match(/LNG(-?\d+\.\d+),LAT(-?\d+\.\d+)/)[1]);
        var lat = parseFloat(position.match(/LNG(-?\d+\.\d+),LAT(-?\d+\.\d+)/)[2]);
        return [lng, lat];
    }

    function getInfoWindowContent(cell) {
        var localisation = cell.getAttribute('data-localisation') || '';
        var description = cell.getAttribute('data-description') || '';
        var bathrooms = cell.getAttribute('data-bathrooms') || '';
        var area = cell.getAttribute('data-area') || '';
        var position = cell.getAttribute('data-position') || '';
        var model = cell.getAttribute('data-model') || '';
        var imageUrl = cell.getAttribute('data-image-url') || '';
        var category = cell.getAttribute('data-category') || '';
        var quartier = cell.getAttribute('data-quartier') || '';
        var price = cell.getAttribute('data-price') || '';
        var item_code = cell.getAttribute('data-item_code') || '';

        return `
        <div>
            <strong>Localisation:</strong> ${localisation}<br>
            <strong>Description:</strong> ${description}<br>
            <strong>Bathrooms:</strong> ${bathrooms}<br>
            <strong>Area:</strong> ${area}<br>
            <strong>Position:</strong> ${position}<br>
            <strong>Model:</strong> ${model}<br>
            <img src="${imageUrl}" width="80"><br>
            <strong>Category:</strong> ${category}<br>
            <strong>Quartier:</strong> ${quartier}<br>
            <strong>Price:</strong> ${price}<br>
            <strong>Item Code:</strong> ${item_code}<br>
        </div>`;
    }


</script>
