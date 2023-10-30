<!DOCTYPE html>
<html lang="en">


<head>
    <title>NECO &mdash; Newness Counselling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/neco-logo.png')}}">
    

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-section bg-light" id="training-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Upcoming Events</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($events as $event)
                    <div class="col-md-6">
                        <ul class="list-unstyled training">
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <img src="{{$event->image}}" alt="Image" style="height:100px; width:500px;" class="img-fluid">
                                </div>
                                <div>
                                    <h2 class="h4" >{{$event->title}}</h2>
                                    <p>Date:   {{$event->date}}</p>
                                    <p>Time:   {{$event->start_time}}</p>
                                    <p>Day:    {{$event->day}}</p>
                                    <p>Venue:  {{$event->venue}}</p>
                                    <p>Charges: {{$event->charges}}</p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    @endforeach
                    
                </div>

                
            </div>
        </div>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p class="mb-5">We are dedicated to providing compassionate and
                                    confidential counseling services that empower individuals to
                                    overcome life's challenges and achieve emotional well-being.
                                </p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#about-section">About Us</a></li>
                                    <li><a href="#services-section">Services</a></li>
                                    <li><a href="#training-section">Training</a></li>
                                    <li><a href="#contact-section">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="https://www.youtube.com/@newnesstvofficial" target="_blank"
                                    class="pl-0 pr-3"><span class="icon-youtube "></span></a>
                                <a href="https://www.facebook.com/profile.php?id=100081191981773" target="_blank"
                                    class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                                <a href="https://www.instagram.com/newnesscounselingorg/" target="_blank"
                                    class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/frontend/js/aos.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
    
</body>


</head>