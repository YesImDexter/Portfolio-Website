<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore my web programming portfolio showcasing a range of innovative projects and skills. Discover dynamic web development expertise and creative solutions.">
    <meta name="author" content="Dexter Skudd">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hire Me | Dexter Skudd</title>

    <!-- const apiKey = "5b6ddf2fc7a4a520ef84c3317aaf5e1c" -->

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
        <div class="loader"></div>
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
                    <!-- <li><a href="#review" data-scroll-nav="8">Reviews</a></li> -->
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
                    <h1 class="home-name"> Dexter Skudd</h1>
                    <h2>I'm A <span class="typed"></span></h2>

                    <ul class="home-social">
                        <li><a class="to-github"><i class="ti-github"></i></a></li>
                        <li><a class="to-linkedin"><i class="ti-linkedin"></i></a></li>
                        <li><a class="to-stack"><i class="ti-stack-overflow"></i></a></li>
                        <li><a class="to-instagram"><i class="ti-instagram"></i></a></li>
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
                                <li><span>Full Name</span> {{$mydata['name']}}</li>
                                <li><span>Nationality</span> {{$mydata['nationality']}}</li>
                                <li><span>Location</span> {{$mydata['location']}}</li>
                                <li><span>Age</span> {{$mydata['age']}}</li>
                                <li><span>Gender</span> {{$mydata['gender']}}</li>
                                <li><span>Email</span>
                                    <div id="copy-email" class="copy-email">{{$mydata['email']}}<i class="ti-link ml-2"></i></div>
                                </li>
                            </ul>

                            <!-- <a href="#" class="default-btn">Download CV<i class="ti-download"></i></a> -->
                            <!-- <a class="my-video-links" href="img/RickRoll.mp4" Presentation Video></a> -->
                            <!-- <a class="default-btn my-video-links" data-autoplay="true" data-vbtype="video" href="img/RickRoll.mp4"> Presentation Video </a> -->

                        </div>
                    </div>
                    <div class="col-md-5 sm-padding wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="about-bg">
                            <img src="img/Me.jpg" alt="img">
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
                                <div class="exp-logo"> <img src="img/icon-poli.png"> </div>
                                <div class="exp-content">
                                    <h4>Politeknik Kuching Sarawak. <span>Diploma in Digital Technology </span></h4>
                                    <p>Politeknik Kuching Sarawak holds a special place in my educational journey. It was here that I completed my diploma, and it was during this time that my passion for programming and web design truly ignited. This esteemed institution not only equipped me with the fundamental knowledge and skills in my field but also fostered a desire within me to dive deeper into the world of programming.</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="exp-list">
                            <li>
                                <div class="exp-date">
                                    <i class="ti-bookmark-alt"></i>
                                    <span>September 2023 - Current</span>
                                </div>
                                <div class="exp-logo"> <img src="img/icon-unimas.png"> </div>
                                <div class="exp-content">
                                    <h4>University Malaysia Sarawak. <span> Bachelor of Software Engineering</span></h4>
                                    <p>My time at UNIMAS allowed me to not only acquire fundamental knowledge but also delve deep into the world of programming, development methodologies, and software design principles. I actively sought out opportunities to stay updated with current trends, ensuring that my skills remained relevant in a rapidly evolving tech landscape.</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- /.Education-section -->
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
                                <div class="exp-logo"> <img src="img/icon-ss.png"> </div>
                                <div class="exp-content">
                                    <h4>Sarawak Skills. <span>Software Engineer Internship</span></h4>
                                    <p>During my internship at Sarawak Skills, I gained valuable experience working with various web frameworks, explored software project management, and stayed updated with the latest industry-standard technologies. This comprehensive exposure was a vital part of my diploma journey and continues to empower me as I advance in the field of programming and web design.</p>
                                </div>
                            </li>
                            <li>
                                <div class="exp-date">
                                    <i class="ti-briefcase"></i>
                                    <span>June 2023 - August 2023</span>
                                </div>
                                <div class="exp-content">
                                    <h4>Self-Employed. <span>Freelancer</span></h4>
                                    <p>Freelancing while dedicating my free time to exploring cutting-edge frameworks and web technologies. This dual focus allows me to apply my skills in real-world projects while staying at the forefront of the ever-evolving web development landscape. Additionally, I am passionate about videography and video editing, often capturing and enhancing footage for various events and occasions.</p>
                                </div>
                            </li>
                            <li>
                                <div class="exp-date">
                                    <i class="ti-briefcase"></i>
                                    <span>March 2024 - Current</span>
                                </div>
                                <div class="exp-logo"> <img src="img/icon-se.png"> </div>
                                <div class="exp-content">
                                    <h4>Stratetics Experts. <span>Web Developer Freelancer</span></h4>
                                    <p>In my freelance role, I've developed two projects, KuCharge and RentNGo, using Laravel. My work includes creating APIs, implementing Tailwind for responsive design, and managing NPM for package installations. I also handle deployment, ensuring efficient website launches. This has honed my full-stack development skills, emphasizing backend and frontend proficiency.</p>
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
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%;">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>TAILWIND</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%;">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="width: 85%;">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>Javascript</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 60%;">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>SQL</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 70%;">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skill-item">
                                    <h5>TypeScript</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 15%;">
                                            <span>15%</span>
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
                                                Visual Studio Code
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse6" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            My main IDE that I am very familiar with in terms of ease of use and versatility.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <a class="card-link card-header" data-toggle="collapse" href="#collapse7">
                                        <div class="row w-auto justify-content-between">
                                            <div class="col">
                                                CPanel
                                            </div>
                                            <div class="col text-right">
                                                <i class="ti-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="collapse7" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Actively experimenting and exploring various features and capabilities of Cpanel. This website for example has been configured and deployed on a shared hosting server using CPanel.
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
                            <p>Familiar working with frameworks that uses MVC architecture such as Laravel and Codeigniter 4.</p>
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
                        <li data-filter=".laravel">Laravel</li>
                        <li data-filter=".codeigniter">CodeIgniter 4</li>
                        <li data-filter=".api">API</li>
                        <li data-filter=".tailwind">Tailwind</li>
                        <li data-filter=".others">Others</li>
                    </ul>

                    <!-- Portfolio Filter -->

                    <div class="row portfolio-items">
                        <div class="col-md-4 col-sm-6 padding-10 single-item others wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Poliku-Eshop.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a class="pop-up" href="img/poliku-eshop-open.png" title="Poliku Eshop By Dexter Skudd">Poliku Eshop<span>Final Year Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item codeigniter java wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Directory-System.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a class="pop-up" href="img/Directory-System.png" title="Directory System By Dexter Skudd">Directory System<span>Internship Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item java wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/TypingTestIMG.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://yesimdexter.github.io/Typing-Website/" target="_blank" title="Typing Test By Dexter Skudd">Typing Test<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item api java wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/WeatherAPIIMG.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://yesimdexter.github.io/Weather-App/" target="_blank" title="WeatheAPI By Dexter Skudd">WeatherAPI App<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item laravel wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Portfolio.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://portfolio.dexterskudd.com/" target="_blank" title="Portfolio By Dexter Skudd">Portfolio Website<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item laravel tailwind wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/SpotifyPay.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://spotified.dexterskudd.com/" target="_blank" title="Spotify App">Spotify Pay System<span>Personal Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item others wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/Mayday.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://mayday.dexterskudd.com/" target="_blank" title="Mayday">Mayday<span>Startup Competition</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item laravel tailwind wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/KuchargeEVE.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://kucharge.app/" target="_blank" title="KuCharge">KuCharge<span>Freelance Project</span></a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 padding-10 single-item laravel tailwind wow fadeInUp">
                            <div class="portfolio-box">
                                <img src="img/RentNGo.png" alt="img">
                                <div class="portfolio-content">
                                    <h3><a href="https://rng.my/" target="_blank" title="KuCharge">Rent and Go <span>Freelance Project</span></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section-padding section-padding" data-scroll-index="9">
            <div class="container">
                <div class="section-heading mb-40 text-center" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h2 class="section-title">Contact Me</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form id="form-data" class="row contact-form text-center">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control input-custom" id="name" placeholder="Your Name" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control input-custom" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control message input-custom" id="message" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button id="submit-contact" class="default-btn">Send Message</button>
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
                            <a class="to-github"><i class="ti-github"></i></a>
                            <a class="to-linkedin"><i class="ti-linkedin"></i></a>
                            <a class="to-stack"><i class="ti-stack-overflow"></i></a>
                        </div><!-- /.footer-social -->
                    </div>
                </div>
            </div>
        </footer><!-- /.footer-section -->

    </div><!-- /.dl-side-content -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/sweetalert2.all.min.js'); }}"></script>
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
    <script type="text/javascript" src="{{ URL::asset('js/vendor/swal2.js'); }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/contact.js'); }}"></script>

</body>

</html>