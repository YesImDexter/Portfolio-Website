<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore my web programming portfolio showcasing a range of innovative projects and skills. Discover dynamic web development expertise and creative solutions.">
    <meta name="author" content="Dexter Skudd">

    <title>Portfolio | Dexter Skudd</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.png'); }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-menu.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/elegant-line-icons.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/venobox/venobox.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }}" />
</head>

<body>
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>

    <div class="dl-fixed-sidebar dl-sidebar-left">
        <div class="dl-header-container">
            <div class="logo">
                <h1><a href="#"><img src="img/logo-dark.png" alt="logo"></a></h1>
            </div>
            <div class="dl-burger-menu">
                <div class="dl-line-menu dl-line-half dl-first-line"></div>
                <div class="dl-line-menu"></div>
                <div class="dl-line-menu dl-line-half dl-last-line"></div>
            </div>
            <nav class="dl-menu-fixed">
                <ul>
                    <li><a href="#home" data-scroll-nav="0">Home</a></li>
                    <li><a href="#about" data-scroll-nav="1">About Me</a></li>
                    <li><a href="#education" data-scroll-nav="2">Education</a></li>
                    <li><a href="#experience" data-scroll-nav="3">Experience</a></li>
                    <li><a href="#skill" data-scroll-nav="4">Skills</a></li>
                    <li><a href="#software" data-scroll-nav="5">Software</a></li>
                    <li><a href="#service" data-scroll-nav="6">Services</a></li>
                    <li><a href="#project" data-scroll-nav="7"> Projects</a></li>
                    <li><a href="#review" data-scroll-nav="8">Reviews</a></li>
                    <li><a href="#contact" data-scroll-nav="9">Contact Me</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- /.dl-fixed-sidebar -->

    <div class="dl-side-content">
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div><!-- /.content-lines-wrapper -->

        <header id="home" class="home-section d-flex align-items-center bd-bottom" data-scroll-index="0">
            <div class="container">
                <div class="home-content text-center">
                    <h4>Hello! My name is</h4>
                    <h1>Dexter Skudd</h1>
                    <h2>I'm A <span class="typed"></span></h2>

                    <ul class="home-social">
                        <li><a onclick="ToSocial('Github')"><i class="ti-linkedin"></i></a></li>
                        <li><a onclick="ToSocial('LinkedIn')"><i class="ti-github"></i></a></li>
                        <li><a onclick="ToSocial('Stack')"><i class="ti-stack-overflow"></i></a></li>
                    </ul>
                </div>
            </div>
        </header><!-- /.home-section -->

        <section id="about" class="about-section section-padding bd-bottom" data-scroll-index="1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 sm-padding wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="about-content">
                            <h2 class="section-title">Let Me Introduce Myself.</h2>
                            <p>Welcome to my portfolio website! I'm Dexter Skudd, a passionate programmer with a deep love for coding and a relentless curiosity for emerging web technologies. I thrive on the excitement of constantly learning and expanding my skill set. My journey in web development has led me to explore and master frameworks like Codeigniter 4 and Laravel, and I'm always eager to take on new challenges and push the boundaries of what's possible in the digital world.</p>
                            <ul class="profile-info">
                                <li><span>Full Name</span> Dexter Skudd Anak John Rizal </li>
                                <li><span>Nationality</span> Malaysian </li>
                                <li><span>Location</span> Kuching, Sarawak </li>
                                <li><span>Age</span> 21 </li>
                                <li><span>Gender</span> Male </li>
                                <li><span>Email</span> DexterS0202@gmail.com</li>
                            </ul>
                            <!-- <a href="#" class="default-btn">Download CV<i class="ti-download"></i></a> -->
                            <a href="img/RickRoll.mp4" class="default-btn"> Presentation Video <i class="ti-control-play img-popup"></i></a>

                        </div>
                    </div>
                    <div class="col-md-5 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="about-bg">
                            <img src="img/about-bg.jpg" alt="img">
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div id="education" class="col-md-6 sm-padding wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms" data-scroll-index="2">
                    <section class="section-padding bd-bottom">
                        <div class="section-heading mb-40">
                            <h2 class="section-title">Education Background</h2>
                        </div>
                        <ul class="exp-list">
                            <li>
                                <div class="exp-date">
                                    <i class="ti-bookmark-alt"></i>
                                    <span>June 2020 - June 2023</span>
                                </div>
                                <div class="exp-content">
                                    <h4>Politeknik Kuching Sarawak. <span>Diploma in Information Technology </span></h4>
                                    <p>Politeknik Kuching Sarawak holds a special place in my educational journey. It was here that I completed my diploma, and it was during this time that my passion for programming and web design truly ignited. This esteemed institution not only equipped me with the fundamental knowledge and skills in my field but also fostered a desire within me to dive deeper into the world of programming.</p>
                                </div>
                            </li>
                        </ul>
                    </section><!-- /.Education-section -->
                </div>

                <div id="experience" class="col-md-6 sm-padding wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms" data-scroll-index="3">
                    <section class="section-padding bd-bottom">
                        <div class="section-heading mb-40">
                            <h2 class="section-title">Working Experience</h2>
                        </div>
                        <ul class="exp-list">
                            <li>
                                <div class="exp-date">
                                    <i class="ti-briefcase"></i>
                                    <span>January 2023 - June 2023</span>
                                </div>
                                <div class="exp-content">
                                    <h4>Sarawak Skills. <span>Software Engineer Internship</span></h4>
                                    <p>During my internship at Sarawak Skills, I gained valuable experience working with various web frameworks, explored software project management, and stayed updated with the latest industry-standard technologies. This comprehensive exposure was a vital part of my diploma journey and continues to empower me as I advance in the field of programming and web design.</p>
                                </div>
                            </li>
                            <li>
                                <div class="exp-date">
                                    <i class="ti-briefcase"></i>
                                    <span>June 2023 - Current</span>
                                </div>
                                <div class="exp-content">
                                    <h4>Self-Employed. <span>Freelancer</span></h4>
                                    <p>Currently, I am freelancing while dedicating my free time to exploring cutting-edge frameworks and web technologies. This dual focus allows me to apply my skills in real-world projects while staying at the forefront of the ever-evolving web development landscape.</p>
                                </div>
                            </li>
                        </ul>
                    </section><!-- /.Experience-section -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- SKILL BAR -->
                <div id="skill" class="col-md-6 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" data-scroll-index="4">
                    <section class="section-padding bd-bottom">
                        <div class="skill-wrap">
                            <div class="section-heading mb-40">
                                <h2 class="section-title">Programming Proficiency</h2>
                            </div>
                            <ul class="skill-items">
                                <li class="skill-item">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%;">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%;">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>Javascript</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 75%;">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>Laravel</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 60%;">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>CodeIgniter 4</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 70%;">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>APIs</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2000ms" role="progressbar" style="width: 10%;">
                                            <span>10%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

                <!--  Software -->
                <div id="skill" class="col-md-6 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms" data-scroll-index="5">
                    <section class="section-padding bd-bottom">
                        <div class="skill-wrap">
                            <div class="section-heading mb-40">
                                <h2 class="section-title">Software</h2>
                            </div>
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse1">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                After Effects
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            I would actively explore and experiment with various video editing techniques as I love creating short but visually packed videos.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse2">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                Premier Pro
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse2" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            I created videos and montages as a freelance gig during my leisure time. My current knowledge of this software is quite sufficient for achieving good to great results.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse3">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                Photoshop
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            I would occasionally create and edit images for events or personal projects.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse4">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                Laragon
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Used as my local development server for projects. Very familiar with this software.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse5">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                GitHub
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse5" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            The main version control software that I use for my projects. Quite familiar the the basics of GitHub.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse6">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                Sublime
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse6" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Currently using Sublime as a way to create and test front-end designs to be implemented later on during development. I really love the live editing feature that Sublime offers.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse7">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                Visual Studio Code
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse7" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            My main IDE that I am very familiar with in terms of ease of use and versatility.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- SERVICES PROVIDED -->
        <section id="service" class="section-padding bd-bottom" data-scroll-index="6">
            <div class="container">
                <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h2 class="section-title">Services Provided</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-world"></i>
                            <h3>Web Development</h3>
                            <p>I specialise in web development for dynamic and static websites.</p>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-menu"></i>
                            <h3>Stack Developer</h3>
                            <p>I can do both front-end and back-end work. However, the back-end is more preferred.</p>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-layout"></i>
                            <h3>Framework Orientated</h3>
                            <p>Familiar working with frameworks that uses MVC architecture such as Laravel and Codeigniter.</p>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-settings"></i>
                            <h3>Easy to Maintain Products</h3>
                            <p>Maintainability and scalability are the most prioritised features of every system being built.</p>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-ruler-pencil"></i>
                            <h3>Design and Analysis</h3>
                            <p>Put extra emphasis on planning to ensure all objectives are met before development.</p>
                            <div class="dots"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="services-item">
                            <i class="ti-cloud-up"></i>
                            <h3>Stanging and Publication</h3>
                            <p>I have some experience with staging websites for production and using git as my main version control method. </p>
                            <div class="dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->

        <section id="project" class="section-padding bd-bottom" data-scroll-index="7">
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h2 class="section-title">Projects Done</h2>
                </div>

                <div class="portfolio-wrapper">
                    <ul class="portfolio-filter text-center mb-30 wow fadeInUp">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".website">Website</li>
                        <li data-filter=".mobile">Mobile</li>
                    </ul>

                    <!-- Portfolio Filter -->

                    <div class="row portfolio-items">
                        <div class="col-md-4 col-sm-6 padding-10 single-item website wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Poliku-Eshop.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a class="img-popup" href="img/home-bg.png">Poliku Eshop<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item website wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Directory-System.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a class="img-popup" href="img/Directory-System.png">Directory System<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- review -->
        <section id="review" class="section-padding bd-bottom" data-scroll-index="8">
            <div class="container">
                <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h2 class="section-title">Clients Reviews</h2>
                </div>
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel wow fadeInUp">
                    <div class="testimonial-item">
                        <div class="testimonial-innter">
                            <div class="testi-thumb"><img src="img/testi-1.jpg" alt="img"></div>
                            <div class="testi-content">
                                <p>"I like men."</p>
                                <h4>Syazwan Wan<span>Valorant.INC</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-innter">
                            <div class="testi-thumb"><img src="img/testi-2.jpg" alt="img"></div>
                            <div class="testi-content">
                                <p>"Fast Shipping. 5 Stars."</p>
                                <h4>Muhammad Firdaus Musa<span>HanyaKipas.com</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-innter">
                            <div class="testi-thumb"><img src="img/testi-3.jpg" alt="img"></div>
                            <div class="testi-content">
                                <p>"The daddiest stuff ever."</p>
                                <h4>Martinus Njok <span>SapeBoiTines.com</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.testimonial-section -->
        <!-- <section class="cta-section section-padding bd-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-padding">
                        <div class="cta-content">
                            <h3>Need a Consultant for Your Business?</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="#" class="default-btn">Hire Me Now!</a>
                    </div>
                </div>
            </div>
        </section>/.cta-section -->

        <section id="contact" class="section-padding section-padding" data-scroll-index="9">
            <div class="container">
                <div class="section-heading mb-40 text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h2 class="section-title">Contact Me</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="contact.php" method="post" id="ajax_form" class="row contact-form text-center">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" placeholder="Your name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control message" id="message" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                            <div id="form-messages" class="form-group col-lg-12">
                                <div class="alert" role="alert"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- /.contact-section -->

        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Dexter Skudd's Portfolio</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social text-right">
                            <a onclick="ToSocial('LinkedIn')"><i class="ti-linkedin"></i></a>
                            <a onclick="ToSocial('Github')"><i class="ti-github"></i></a>
                            <a onclick="ToSocial('Stack')"><i class="ti-stack-overflow"></i></a>
                        </div><!-- /.footer-social -->
                    </div>
                </div>
            </div>
        </footer><!-- /.footer-section -->

    </div><!-- /.dl-side-content -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/popper.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/bootstrap.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/scrollit.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.waypoints.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/imagesloaded.pkgd.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/venobox.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.isotope.v3.0.2.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/owl.carousel.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/typed.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/bootstrap-menu.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/contact.js'); }}"></script>

</body>

</html>