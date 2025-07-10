<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('./plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->

    <!--**********************************
        Nav header start
    ***********************************-->
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">

            </div>
            <div class="col-lg-3 col-sm-6">

            </div>
            <div class="col-lg-3 col-sm-6">

            </div>
            <div class="container mt-3">
                @yield('content')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                    </div>


                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-6 col-md-12">

                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="col-lg-3 col-sm-6">
            <div class="col-lg-3 col-sm-6">
                <div class="col-lg-3 col-sm-6">
                    <div class="row">
                        <div class="col-lg-12">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- #/ container -->

    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <!--**********************************
        Footer end
    ***********************************-->
    <!--**********************************
        Main wrapper end
    ***********************************-->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('plugins/common/common.min.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>
<script src="{{asset('js/gleek.js')}}"></script>
<script src="{{asset('js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{asset('./plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('./plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{asset('./plugins/d3v3/index.js')}}"></script>
<script src="{{asset('./plugins/topojson/topojson.min.js')}}"></script>
<script src="{{asset('./plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{asset('./plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('./plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{asset('./plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('./plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{asset('./plugins/chartist/js/chartist.min.js')}}"></script>
<script src=".{{asset('/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



<script src="{{asset('./js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>
