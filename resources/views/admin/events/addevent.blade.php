<!DOCTYPE html>
<html lang="en">

<head>
    <title>NECO Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="{{asset('assets/frontend/images/neco-logo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/backend/files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/assets/icon/feather/css/feather.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/backend/files/assets/css/jquery.mCustomScrollbar.css')}}">
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
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Events</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>


                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Create Event</h5>
                                                    </div>
                                                    @if(session()->has('success'))
                                                        <div class="alert alert-success">
                                                           {{ session()->get('success') }}
                                                        </div>
                                                    @elseif(session()->has('failed'))
                                                        <div class="alert alert-danger">
                                                            {{session()->get('failed')}}
                                                        </div>
                                                    @endif
                                                    <div class="card-block">
                                                        
                                                        <form action="{{url('admin/events/save-event')}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <div class="col-sm-6">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Event Title">
                                                                    @error('title')
                                                                       <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-2">
                                                                    <label for="date">Date</label>
                                                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"  value="{{ old('date') }}">
                                                                    @error('date')
                                                                       <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label for="time">Start Time</label>
                                                                    <input type="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{ old('time') }}">
                                                                    @error('time')
                                                                       <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label for="day">Day</label>
                                                                    <select name="day" class="form-control @error('day') is-invalid @enderror" >
                                                                        <option value="">Select Day</option>
                                                                        <option value="Monday">Monday</option>
                                                                        <option value="Tuesday">Tuesday</option>
                                                                        <option value="Wednesday">Wednesday</option>
                                                                        <option value="Thursday">Thursday</option>
                                                                        <option value="Friday">Friday</option>
                                                                        <option value="Saturday">Saturday</option>
                                                                        <option value="Sunday">Sunday</option>

                                                                        @error('day')
                                                                           <div style="color:red">{{ $message }}</div>
                                                                        @enderror
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-sm-3">
                                                                    <label for="venue">Venue</label>
                                                                    <input type="text" name="venue" class="form-control @error('venue') is-invalid @enderror" value="{{ old('venue') }}" placeholder="Event Venue">
                                                                    @error('title')
                                                                       <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <label for="charges">Charges</label>
                                                                    <input type="charges" name="charges" class="form-control @error('charges') is-invalid @enderror" value="{{ old('charges') }}" placeholder="KES">
                                                                    @error('charges')
                                                                       <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <label for="image">Image</label>
                                                                    <input type="file" name="image" class="form-control" >
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4">
                                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/jquery/dist/jquery.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/jquery-ui/jquery-ui.min.js')}}">
    </script>
    <script type="text/javascript"
        src="{{asset('assets/backend/files/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('assets/backend/files/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('assets/backend/files/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/modernizr/modernizr.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('assets/backend/files/bower_components/chart.js/dist/Chart.js')}}">
    </script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/pages/widget/amchart/light.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/backend/files/assets/js/pcoded.min.js')}}"></script>

    <script src="{{asset('assets/backend/files/assets/js/vartical-layout.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/pages/dashboard/custom-dashboard.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('assets/backend/files/assets/js/script.min.js')}}"></script>
</body>