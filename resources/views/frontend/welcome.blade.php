<!DOCTYPE html>
<html lang="en">


<head>
    <title>NECO &mdash; Newness Counselling Organisation</title>
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
                        <!-- <a href="{{url('/')}}"><img src="{{asset('assets/frontend/images/neco-logo.png')}}" style="height:100px; margin-left:-70px" alt="Image" class="img-fluid rounded h2 mb-0"></a> -->
                        <a href="{{url('/')}}"><img src="{{asset('assets/frontend/images/neco-logo.png')}}" style="max-height:100px;" alt="Image" class="img-fluid rounded h2 mb-0"></a>
                    </div>
                    <!-- <div class="col-12 col-md-10 d-none d-xl-block">  -->
                    <div class="col-12 col-md-10">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <!-- <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block"> -->
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-block d-lg-none">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#about-section" class="nav-link">About</a></li>
                                <li><a href="#services-section" class="nav-link">Services</a></li>
                                <li><a href="#training-section" class="nav-link">Our Training</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                <li><a href="{{url('upcoming-events')}}" class="nav-link">Events</a></li>
                                <li>
                                    <a href="{{url('book-appointment')}}" class="nav-link">
                                        <span style="background-color: #2b1b7588; color: #fff; padding: 10px 20px; border: none; border-radius: 35px; cursor: pointer; text-decoration: none; display: inline-block;" onmouseover="this.style.backgroundColor='#000';" onmouseout="this.style.backgroundColor='#2b1b7588';">Book an Appointment</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>


        <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#imageCarousel" data-slide-to="1"></li>
                <li data-target="#imageCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="site-blocks-cover overlay" style="background-image: url(assets/frontend/images/pexels-tima-miroshnichenko.jpg);" data-aos="fade" id="home-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
                                    <h1>Counselling you for a better life</h1>
                                    <div class="col-mt-5">
                                        <p class="mb-4">
                                            <a href="#training-section" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                            <a href="{{url('upcoming-events')}}" class="btn btn-primary mr-2 mb-2">See Events</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="site-blocks-cover overlay" style="background-image: url(assets/frontend/images/pexels-panditwiguna-1128318.jpg);" data-aos="fade" id="home-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
                                    <h1>Empowering you through guidance</h1>
                                    <div class="col-mt-5">
                                        <p class="mb-4">
                                            <a href="#services-section" class="btn btn-primary mr-2 mb-2">Explore Services</a>
                                            <a href="{{url('upcoming-events')}}" class="btn btn-primary mr-2 mb-2">See Events</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="site-blocks-cover overlay" style="background-image: url(assets/frontend/images/pexels-pixabay-147411.jpg);" data-aos="fade" id="home-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
                                    <h1>Your mental health matters</h1>
                                    <div class="col-mt-5">
                                        <p class="mb-4">
                                            <a href="#contact-section" class="btn btn-primary mr-2 mb-2">Contact Us</a>
                                            <a href="{{url('upcoming-events')}}" class="btn btn-primary mr-2 mb-2">See Events</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>







        <div class="site-section bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-label display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">You are not alone</h3>
                            <p class="text-special">Who do you call when you need someone to just listen to what you are going through? Who is there for you when you need a shoulder to lean on? We are here for you, no more suffering.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-bill display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">Confidentiality</h3>
                            <p class="text-special">Confidentiality and client’s safety is our priority. We give you a safe space to express yourself, with confidentiality 100% assured.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-customer-service display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">Qualified Team</h3>
                            <p class="text-special">You can rely on our experienced and highly qualified team to provide you with expert counselling and training, tailored to your individual needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section" id="about-section">
            <div class="container">
                <div class="row mb-5">
                    <!-- <div class="col-lg-5 ml-auto mb-5 order-md-2" data-aos="fade">
                        
                        <img src="{{asset('assets/frontend/images/eliud.jpeg')}}" alt="Image" class="img-fluid rounded">
                        
                    </div> -->
                    <div class="col-lg-9 order-md-1" data-aos="fade">
                        <h3 class="section-title mb-6">Welcome to Newness Counselling Organization</h3>
                        <h4 style="color: rgb(17, 33, 63)"><b>About Us</b></h4>
                        <p class="lead">Newness Counselling and Healing LTD is a professional counselling and training firm, under Newness Counselling Organization (NECO).
                            We pride ourselves on being the preferred choice for those seeking quality, affordable and empathetic counseling/therapy and training services.
                            Our extensive reach allows us to bring together the finest minds and resources to support individuals, Groups, corporates and organizations in their pursuit of mental health wellness and holistic well-being.
                            We offer individualized and root-cause-oriented counselling services, providing our clients with a safe space and a non-judgmental environment, where success is not just an aspiration but a guarantee.
                        </p>

                        <h4 style="color: rgb(17, 33, 63)"><b>Mission</b></h4>
                        <p>The mission of NECO is to promote mental health awareness, helping individuals living with mental illness through (online and physical) sessions and advocating for mental health programs in institutions, organizations, formal and informal groups as well as community support services.</p>

                        <h4 style="color: rgb(17, 33, 63)"><b>Vision</b></h4>
                        <p>Our vision is to improve mental health standards of individuals, families, groups, institutions and organizations and provide affordable counseling and mental health programs to clients, to improve the lives of people living with mental illness and those in need of mentorship/advice from mental health professionals especially the youths.</p>


                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <h4 style="color: rgb(17, 33, 63)"><b>Mission</b></h4>
                                <p>The mission of NECO is to promote mental health awareness, helping individuals living with mental illness through (online and physical) sessions and advocating for mental health programs in institutions, organizations, formal and informal groups as well as community support services.</p>
                            </div>

                            <div class="col-lg-6">
                                <h4 style="color: rgb(17, 33, 63)"><b>Vision</b></h4>
                                <p>Our vision is to improve mental health standards of individuals, families, groups, institutions and organizations and provide affordable counseling and mental health programs to clients, to improve the lives of people living with mental illness and those in need of mentorship/advice from mental health professionals especially the youths.</p>
                            </div>
                        </div> -->


                        <h4 style="color: rgb(17, 33, 63)"><b>About the founder</b></h4>

                        <div class="mb-5" data-aos="fade">

                            <img src="{{asset('assets/frontend/images/eliud.jpeg')}}" alt="Image" class="img-fluid rounded">

                        </div>
                        <p>DR. Eliud Ngugi is a Counselling Psychologist, an award-winning mental health specialist, an author, and an excellent public speaker who has been featured in more than 10 mainstream media TV and Radio stations in Kenya. His well-polished counselling approaches and public speaking skills has enabled him to stand out changing hundreds of thousands if not millions of lives in Learning institutions, corporates, organizations, groups and individual clients.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section border-bottom bg-light" id="services-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Our Services</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-award"></span></div>
                            <div>
                                <h3>Individual Counselling</h3>
                                <p>Making significant life decisions can often feel like an unaddressed crisis. When confronted with conflicting choices, it's easy to feel stuck and hinder progress. We're here to guide you through those challenges.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bill"></span></div>
                            <div>
                                <h3>Couples/Marriage Therapy</h3>
                                <p>Happy and fulfilling relationships are built, not found. Let us help you reconnect and strengthen your bond through our specialized couples counseling, ensuring your love story leads to a happily ever after.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-customer-service"></span>
                            </div>
                            <div>
                                <h3>Teenage Crisis Counselling</h3>
                                <p>Navigating life changes during adolescence can be overwhelming. We’re here to help you address self-esteem, peer, family, and relationship challenges, ensuring each stage of your journey feels like heaven on earth.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plan"></span></div>
                            <div>
                                <h3>Family Therapy</h3>
                                <p>Guidance and Reconciliation for Families Facing Challenges – Your Path to Healing Starts Here.
                                    We are a haven of support and understanding for families navigating through difficult times.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-growth"></span></div>
                            <div>
                                <h3>Trauma Therapy</h3>
                                <p>Intense emotional experiences can hinder you from reaching your full potential. We help you heal from trauma like loss, abuse, accidents, or neglect, guiding you toward a happy, fulfilling life.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-career"></span></div>
                            <div>
                                <h3>Youth therapy, eldercare</h3>
                                <p>Parents often wonder, can children experience stress? Yes, just like adults. Support your child through stressful times. We also provide mental health services for the elderly, promoting joyful aging.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-customer-service"></span></div>
                            <div>
                                <h3>Mental health and public speaking</h3>
                                <p>We offer comprehensive mental health awareness and educational services tailored for conferences, schools, religious institutions, community groups, organizations, promoting mental well-being across diverse settings and audiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-label"></span></div>
                            <div>
                                <h3>Life coaching and career coaching</h3>
                                <p>Making major life decisions can feel like an overlooked crisis. When faced with conflicting choices, it’s easy to stagnate and slow your progress. We’re here to guide you through those moments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-award"></span></div>
                            <div>
                                <h3>Personal therapy sessions for professional counsellors and psychologists</h3>
                                <p>We offer professional personal therapy sessions to counselors and psychologists.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="site-section bg-light" id="training-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Our Training</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled training">
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <img src="{{asset('assets/frontend/images/personal_problems_info.jpg')}}" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                    <h2 class="h4">How to deal with your Personal Crisis?</h2>
                                    <span class="text-muted d-block mb-4">Mental Health</span>
                                    <p>Empowering You to Overcome Personal Challenges and Rediscover Your Strength - Your Journey to Transformation Starts Here .</p>
                                </div>
                            </li>
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <img src="{{asset('assets/frontend/images/family_problems_info.jpg')}}" alt="Image" class="img-fluid">
                                </div>
                                <div>
                                    <h2 class="h4">Resolving family dynamics</h2>
                                    <span class="text-muted d-block mb-4">Family Life</span>
                                    <p>Guidance and Reconciliation for Families Facing Challenges – Your Path to Healing Starts Here.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled training">
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <img src="{{asset('assets/frontend/images/business_problems_info.jpg')}}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div>
                                    <h2 class="h4">Career and corporate training</h2>
                                    <span class="text-muted d-block mb-4">Business Issues</span>
                                    <p>Navigating Business Challenges with Expert Guidance – Your Blueprint to Success Begins Here.</p>
                                </div>
                            </li>

                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <img src="{{asset('assets/frontend/images/treatment-of-depression.png')}}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div>
                                    <h2 class="h4">Depression management training</h2>
                                    <span class="text-muted d-block mb-4">Depression Treatment</span>
                                    <p>Discover Hope and Healing on Your Journey to Overcoming Depression with Our Specialized Treatment Services. </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Other Training</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <li> General mental health short course. </li>
                        </div>
                        <div class="col-md-6 mb-3">
                            <li> Leadership training. </li>
                        </div>
                        <div class="col-md-6 mb-3">
                            <li> CBT and CBT Blended with 12 AA steps training. </li>
                        </div>
                        <div class="col-md-6 mb-3">
                            <li> Psychological First Aid and Debriefing. </li>
                        </div>
                        <div class="col-md-6 mb-3">
                            <li> Personal Therapy Sessions for Professional Counselors/Psychologists. </li>
                        </div>
                        <div class="col-md-6 mb-3">
                            <li> Life Coaching and Career Coaching. </li>
                        </div>
                    </div>

                    <div class="list-group">
                        <li style="margin-bottom: 10px;"> Emotional Intelligence, Depression, loss and Grief, trauma, addiction Counselling, Geriatrics and Teenage crisis Short courses. </li>
                        <li style="margin-bottom: 10px;"> Mental Health Public Speaking in Corporates, Schools, Churches, Mosques, Gatherings and Events etc. </li>
                    </div>
                </div>
            </div>
        </div>



        <section class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" stylr="position: relative;">
                        <div class="owl-carousel slide-one-item-alt">
                            <img src="assets/frontend/images/slide_1.jpg" alt="Image" class="img-fluid">
                            <img src="assets/frontend/images/slide_2.jpg" alt="Image" class="img-fluid">
                            <img src="assets/frontend/images/slide_3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="custom-direction">
                            <a href="#" class="custom-prev">Prev</a> / <a href="#" class="custom-next">Next</a>
                        </div>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <div class="owl-carousel slide-one-item-alt-text">
                            <div>
                                <h2 class="section-title mb-3">Social Life</h2>
                                <p class="lead">We understand the vital role that healthy social connections play in our overall well-being.</p>
                                <p>Extending beyond individual challenges to address issues related to social interactions, relationships, and communication skills.</p>
                                {{-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> --}}
                            </div>
                            <div>
                                <h2 class="section-title mb-3">Money &amp; Finance</h2>
                                <p class="lead">Financial well-being is an essential aspect of overall life satisfaction.</p>
                                <p>Encompassing a holistic approach that includes addressing issues related to money management, financial stress, and the emotional impact of financial decisions.</p>
                                {{-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> --}}
                            </div>
                            <div>
                                <h2 class="section-title mb-3">Motivation</h2>
                                <p class="lead">We believe in the power of motivation to transform lives.</p>
                                <p>We are here to help you rediscover your inner drive, set meaningful goals, and provide the support and tools
                                    you need to stay motivated on your path to personal growth and positive change.</p>
                                {{-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Reach us:</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-0">Apex Building first floor Room 06</p>
                        <p class="mb-0">Kenyatta Road</p>
                        <p class="mb-0">Juja</p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="tel:0713550493">+254 713 550 493</a><br /><a href="tel:0702166771">+254 702 166 771</a></p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="mailto:newnesscounselingorg@gmail.com"><span class="__cf_email__">newnesscounselingorg@gmail.com</span></a>
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <!-- Embedded Google Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.4455779475446!2d36.96687947462035!3d-1.1865496344826548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1ba4473e1e0f%3A0x69a0030f4f3928f4!2sApex%20Building%2C%20Juja!5e0!3m2!1sen!2ske!4v1697976726913!5m2!1sen!2ske"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 mb-5">
                        <form action="{{url('message-us')}}" class="p-5 bg-white">
                            @csrf
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif

                            <h2 class="h4 text-black mb-5">Contact Form</h2>
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" name="fname" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lname" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Write your notes or questions here..." required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
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
                                <a href="https://www.youtube.com/@Newnesswitheliudngugi" target="_blank" class="pl-0 pr-3"><span class="icon-youtube "></span></a>
                                <a href="https://www.facebook.com/profile.php?id=100087916341834&mibextid=ZbWKwL" target="_blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                                <a href="https://www.instagram.com/newnesscounselingorg?igsh=MWkxeHIwd2N6NzZscg==" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="https://www.linkedin.com/in/newness-counseling-organization-neco-496b44266?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>


</html>