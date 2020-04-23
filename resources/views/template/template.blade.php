<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="SHORTCUT ICON" href="{{ @url('assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $APP_NAME }} - Ubicaci&oacute;n de productos para el consumo contra el COVID19 - Paraguay </title>


    {{-- Agregar METAS DE FACEBOOK Y TWITTER --}}


    <link rel="stylesheet" href="{{ @url('assets/js/libs/leaflet/leaflet.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('assets/js/libs/leaflet/plugins/Leaflet.fullscreen/leaflet.fullscreen.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('assets/js/libs/leaflet/plugins/Leaflet.markercluster/MarkerCluster.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('assets/js/libs/leaflet/plugins/Leaflet.markercluster/MarkerCluster.Default.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('assets/js/libs/leaflet/plugins/Leaflet-control-geocoder/Control.Geocoder.min.css') }}" charset="utf-8" />
    <link rel="stylesheet" href="{{ @url('assets/js/libs//bootstrap-4.4.1-dist/css/bootstrap.min.css') }}" media="screen" charset="utf-8" />
    <link rel='stylesheet' href="{{ @url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/css/bootstrap-select.min.css') }}" charset="utf-8" />
    <link rel='stylesheet' href="{{ @url('https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}" charset="utf-8" />
    <!-- Add SbAdmin2 -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ @url('assets/css/sb-admin-2.css')}}" charset="utf-8" />

    <script src="{{ @url('assets/js/libs/leaflet/leaflet.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/libs/leaflet/plugins/Leaflet.fullscreen/Leaflet.fullscreen.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/libs/leaflet/plugins/Leaflet.markercluster/leaflet.markercluster.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/libs/leaflet/plugins/Leaflet-control-geocoder/Control.Geocoder.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/libs/jquery/jquery-3.4.1.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/libs/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/js/bootstrap-select.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/Utilities.js') }}" type="text/javascript" charset="utf-8"></script>
    <script id="loadMap" data_load_map={{ $data_load_map }} src="{{ @url('assets/js/onLoadScripts.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ @url('assets/js/Map.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="https://kit.fontawesome.com/d90426cb34.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        var HOSTNAME = '{{ @url('/') }}';
        var HOSTNAME_API = HOSTNAME + '/api/';
        var GOOGLE_ANALYTICS_CODE = '';

        // Map.
        var DEFAULT_ZOOM_MAP = 6;
        var DEFAULT_ZOOM_MARKER = 16;
        var DEFAULT_MIN_ZOOM_MAP = 6;
        var DEFAULT_MAX_ZOOM_MAP = 20;

        // Villa Hayes - Paraguay.
        var DEFAULT_LNG = -57.623807;
        var DEFAULT_LAT = -23.299114;
    </script>

</head>
<body class="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
        @include('template.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
                @include('template.menu-top')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content_page')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
            @include('template.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Custom scripts for all pages-->
<script src="{{ @url('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
