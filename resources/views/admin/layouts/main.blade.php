<!DOCTYPE html>
<html lang="en">
<head>
    <title>NECO Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="{{asset('assets/frontend/images/neco-logo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/assets/icon/feather/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/assets/css/jquery.mCustomScrollbar.css')}}">
</head>
<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div class="contain">
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                
            </div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('admin.layouts.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('admin.layouts.sidebar')
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/chart.js/dist/Chart.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/light.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/js/pcoded.min.js')}}"></script>

    <script src="{{asset('assets/backend/files/assets/js/vartical-layout.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/pages/dashboard/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/js/script.min.js')}}"></script>
</body>