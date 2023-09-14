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
    <link rel="icon" type="image/png" href="assets/frontend/images/neco-logo.png">
    <script nonce="801593e7-ef45-492b-a321-dcfd30c2a2fc">
        (function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return async function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})),{})))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-xl-2">
                        <a href="{{url('/')}}"><img src="{{asset('assets/frontend/images/neco-logo.png')}}" style="height:100px; margin-left:-70px" alt="Image" class="img-fluid rounded"></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(assets/frontend/images/hero_1.jpg);"
            data-aos="fade" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-lg-5 mr-auto text-left align-self-end align-self-md-center">
                        <h1>Business Problems</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p>In today's ever-evolving business landscape, organizations often encounter a myriad of 
                            challenges that can impact their success. As a seasoned psychologist specializing in 
                            workplace dynamics and business problem-solving, we are here to help businesses and 
                            professionals navigate these hurdles with confidence and resilience. 
                            Our approach combines psychological insight with practical strategies to address a 
                            wide range of issues, including leadership challenges, team conflicts, stress management, 
                            and organizational change. 
                            </p>
                        <p>We understand that each business is unique, 
                            and we work closely with our clients to identify their specific needs and objectives. 
                            Whether you're striving to improve leadership effectiveness, enhance teamwork, 
                            or create a more positive and productive workplace culture, we provide a supportive and 
                            results-driven approach. Our ultimate goal is to empower businesses and professionals with 
                            the psychological tools and skills needed to thrive in today's competitive environment, 
                            fostering growth, innovation, and long-term success. 
                            </p>
                        <p class="mt-5"><a href="{{url('contact-us')}}" class="btn btn-primary">Get In Touch</a></p>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <img src="assets/frontend/images/business_problems.jpg" style="height:300px;" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p class="mb-5">We are dedicated to providing compassionate and 
                                    confidential counseling services that empower individuals to 
                                    overcome life's challenges and achieve emotional well-being.
                                </p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="https://www.youtube.com/@necoenglishtvofficial" target="_blank" class="pl-0 pr-3"><span class="icon-youtube "></span></a>
                                <a href="https://www.facebook.com/profile.php?id=100081191981773" target="_blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                                <a href="https://www.instagram.com/newnesscounselingorg/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
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
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"805925de2e520e2b","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>


</html>