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
    <script nonce="4b73086d-7591-4f21-b295-c105fe4ced29')}}">
        (function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
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
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#about-section" class="nav-link">About</a></li>
                                <li><a href="#training-section" class="nav-link">Our Training</a></li>
                                <li><a href="#services-section" class="nav-link">Services</a></li>
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
        <div class="site-blocks-cover overlay" style="background-image: url(assets/frontend/images/hero_1.jpg);" data-aos="fade"
            id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
                        <h1>Counselling you for a better life</h1>
                        <p class="mb-4"><a href="#training-section" class="btn btn-primary mr-2 mb-2">Get Started</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-bill display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">100% Confidential</h3>
                            <p class="text-special">You can trust that our discussions will remain strictly Confidential, ensuring
                                your privacy and peace of mind through out sessions.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-bill display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">Qualified Team</h3>
                            <p class="text-special">You can rely on our experienced and highly qualified team to provide
                                you with expert guidance and support tailored to your needs.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <div class="mr-3"><span class="flaticon-customer-service display-3 text-special"></span></div>
                        <div>
                            <h3 class="text-white h4">Individual Approach</h3>
                            <p class="text-special">We believe in a personalized and individualized approach, tailoring
                                our guidance and support to your unique circumstance and goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section" id="about-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-5 ml-auto mb-5 order-md-2" data-aos="fade">
                        <img src="{{asset('assets/frontend/images/about_1.jpg')}}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6 order-md-1" data-aos="fade">
                        <h2 class="section-title mb-6">Welcome to Newness Counselling</h2>
                        <p class="lead">We pride ourselves on being the preferred choice for those seeking backing in the realm of counseling and therapy. 
                            Our extensive reach allows us to bring together the finest minds and resources to support individuals and organizations 
                            in their pursuit of mental health and well-being.</p>
                        <p>With an emphasis on innovation and effectiveness, we offer a range of funding opportunities that are carefully curated to match 
                            the specific needs of each applicant, fostering a collaborative environment where success is not just an aspiration but a guarantee.</p>
                        
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
                                    <a href="{{url('personal-problem')}}"><img src="{{asset('assets/frontend/images/personal_problems_info.jpg')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('personal-problem')}}" class="text-black">How to deal your
                                            Personal Problem?</a></h2>
                                    <span class="text-muted d-block mb-4">Mental Health</span>
                                    <p>Empowering You to Overcome Personal Challenges and Rediscover Your Strength - Your Journey to Transformation Starts Here .</p>
                                </div>
                            </li>
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <a href="{{url('family-problems')}}"><img src="{{asset('assets/frontend/images/family_problems_info.jpg')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('family-problems')}}" class="text-black">How to deal with family problems</a></h2>
                                    <span class="text-muted d-block mb-4">Family Life</span>
                                    <p>Guidance and Reconciliation for Families Facing Challenges – Your Path to Healing Starts Here.</p>
                                </div>
                            </li>
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <a href="{{url('business-problems')}}"><img src="{{asset('assets/frontend/images/business_problems_info.jpg')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('business-problems')}}" class="text-black">How To deal with business problems</a></h2>
                                    <span class="text-muted d-block mb-4">Business Issues</span>
                                    <p>Navigating Business Challenges with Expert Guidance – Your Blueprint to Success Begins Here.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled training">
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <a href="{{url('depression-treatment')}}"><img src="{{asset('assets/frontend/images/treatment-of-depression.png')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('depression-treatment')}}" class="text-black">How to treat depression?</a></h2>
                                    <span class="text-muted d-block mb-4">Depression Treatment</span>
                                    <p>Discover Hope and Healing on Your Journey to Overcoming Depression with Our Specialized Treatment Services. </p>
                                </div>
                            </li>
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <a href="{{url('couples-problems')}}"><img src="{{asset('assets/frontend/images/img_2.jpg')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('couples-problems')}}" class="text-black">How to deal with couples problems</a></h2>
                                    <span class="text-muted d-block mb-4">Couples Problems</span>
                                    <p>Rediscover Connection and Strengthen Your Bond with Our Couples Counseling Services.</p>
                                </div>
                            </li>
                            <li class="mb-5 d-block d-lg-flex">
                                <div class="mr-5 mb-4 img">
                                    <a href="{{url('relationship-problems')}}"><img src="{{asset('assets/frontend/images/relationship_problems_info.jpg')}}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>
                                    <h2 class="h4"><a href="{{url('relationship-problems')}}" class="text-black">How to deal with relationship problems</a></h2>
                                    <span class="text-muted d-block mb-4">Relationship Issues</span>
                                    <p>Discover renewed ronnection and harmony with our relationship support services.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section border-bottom" id="team-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 text-left">
                        <h2 class="section-title mb-3">Meet Team</h2>
                        <p class="lead">Meet our professional team.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="assets/frontend/images/person_5.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kaiara Spencer</h3>
                                <span class="position">Expert in Motivational</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="assets/frontend/images/person_6.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Dave Simpson</h3>
                                <span class="position">Expert in Financing Issue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="assets/frontend/images/person_7.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Ben Thompson</h3>
                                <span class="position">Expert in Social Life</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-member">
                            <figure>
                                <ul class="social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <img src="assets/frontend/images/person_8.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <div class="p-3">
                                <h3>Kyla Stewart</h3>
                                <span class="position">Expert in Social Life</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-career"></span></div>
                            <div>
                                <h3>Relationship Problem</h3>
                                <p>Discover renewed connection and harmony with our relationship support services. 
                                    We specialize in offering compassionate and effective solutions for individuals 
                                    and couples facing relationship challenges.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bill"></span></div>
                            <div>
                                <h3>Couples Counselling</h3>
                                <p>Rediscover Connection and Strengthen Your Bond with Our Couples Counseling Services. 
                                    We are your dedicated partner in nurturing and revitalizing relationships through our 
                                    specialized couples counseling services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-customer-service"></span>
                            </div>
                            <div>
                                <h3>Depression Treatment</h3>
                                <p>Discover Hope and Healing on Your Journey to Overcoming Depression with Our Specialized Treatment 
                                    Services. We are a place of support, understanding, 
                                    and transformation for individuals seeking effective treatment for depression.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plan"></span></div>
                            <div>
                                <h3>Family Problem</h3>
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
                                <h3>Personal Problem</h3>
                                <p>Empowering You to Overcome Personal Challenges and Rediscover Your Strength – Your 
                                    Journey to Transformation Starts Here. We are a haven of support and guidance 
                                    for individuals facing personal struggles and seeking positive change.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-award"></span></div>
                            <div>
                                <h3>Business Problem</h3>
                                <p>Navigating Business Challenges with Expert Guidance – Your 
                                    Blueprint to Success Begins Here. We are your trusted ally in 
                                    overcoming the hurdles and complexities of the business world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--
        <section class="site-section testimonial-wrap" id="testimonials-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">
                        <blockquote class="mb-5">
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="assets/frontend/images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>John Smith</p>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="testimonial">
                        <blockquote class="mb-5">
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="assets/frontend/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Christine Aguilar</p>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="testimonial">
                        <blockquote class="mb-5">
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="assets/frontend/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Robert Spears</p>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="testimonial">
                        <blockquote class="mb-5">
                            <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                                reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
                                illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="assets/frontend/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Bruce Rogers</p>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="site-section" id="blog-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Our Blog Posts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="blog-single.html"><img src="assets/frontend/images/img_1.jpg" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</a></h2>
                            <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="blog-single.html"><img src="assets/frontend/images/img_2.jpg" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="blog-single.html"><img src="assets/frontend/images/img_1.jpg" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                    class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                                sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        --}}
        <section class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Reach to us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">203 Kiambu Kenya
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+254 713 550 493</a></p>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#"><span class="__cf_email__"
                                    data-cfemail="ccb5a3b9bea9a1ada5a08ca8a3a1ada5a2e2afa3a1">[email&#160;protected]</span></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <form action="#" class="p-5 bg-white">
                            <h2 class="h4 text-black mb-5">Contact Form</h2>
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Write your notes or questions here..."></textarea>
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
        data-cf-beacon='{"rayId":"8059258b9cd5599b","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>


</html>