<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartCode | Your Code Friend's</title>
    <meta name="description"
        content="Startcode is the right solution for those of you who need digitization in any aspect, both in Indonesia and internationally.">
    <meta name="keywords"
        content="startcode, coding, digital, php, website, web development, make your own website, code, laravel">
    <meta name="author" content="Startcode Indonesia">
    <meta property="og:title" content="Startcode Your Code Friend's" />
    <meta property="og:url" content="https://startcode.id" />
    <meta property="og:image" itemprop="image" content="{{ url('assets/images/scode.png') }}" />

    <meta property="og:image:url" itemprop="image" content="{{ url('assets/images/scode.png') }}" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <meta property="og:locale" content="id" />


    <!--Vendor CSS-->
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--Slick Css-->
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick-theme.css') }}">
    <!--Css This Pages-->
    <link rel="stylesheet" href="{{ url('assets/css/landingpage.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">
</head>

<body>
    <link itemprop="thumbnailUrl" href="{{ url('assets/images/scode.png') }}">

    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="{{ url('assets/images/scode.png') }}">
    </span>

    <div id="app">
        <!--Navbar-->
        <div id="navbarContainer">
            <div class="container">
                <div class="brand">
                    <a href="#">
                        <img src="{{ url('assets/images/logoStartCode_WithoutName.png') }}" alt=""
                            class="brandImages">
                        <h2 class="nameBrand">StartCode</h2>
                    </a>
                </div>
                <div class="navMenu">
                    <button class="buttonNavbarMenu">
                        <ion-icon name="reorder-three-outline"></ion-icon>
                    </button>
                    <div class="containerMenu">
                        <ul class="wrapperMenu">
                            <li class="list-menu">
                                <a href="#jumbotron" class="nav-menu active">
                                    <ion-icon name="home"></ion-icon>
                                    <p>Home</p>
                                </a>
                            </li>
                            <li class="list-menu">
                                <a href="#service" class="nav-menu">
                                    <ion-icon name="construct"></ion-icon>
                                    <p>Service</p>
                                </a>
                            </li>
                            <li class="list-menu">
                                <a href="#featuredWorks" class="nav-menu">
                                    <ion-icon name="cube"></ion-icon>
                                    <p>Project</p>
                                </a>
                            </li>
                            <li class="list-menu">
                                <a href="#contact" class="nav-menu">
                                    <ion-icon name="call"></ion-icon>
                                    <p>Contact</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--EndNavbar-->

        <!--Jumbotron -->
        <div id="jumbotron">
            <div class="container">
                <div class="wrapperContent">
                    <div class="textContent">
                        <p>Creative Developer</p>
                        <h1>Make your idea cometrue with <span class="primaryText">StartCode</span></h1>
                    </div>
                    <div class="wrapperVector">
                        <div class="leftSection">
                            <div class="vector firstVector">
                                <img src="./assets/images/iconSkills/django.png" alt="">
                            </div>
                            <div class="vector secondVector">
                                <img src="./assets/images/iconSkills/css.png" alt="">
                            </div>
                            <div class="vector threeVector">
                                <img src="./assets/images/iconSkills/fluter.png" alt="">
                            </div>
                            <div class="vector fourVector">
                                <img src="./assets/images/iconSkills/laravel.png" alt="">
                            </div>
                        </div>
                        <div class="rightSection">
                            <div class="vector firstVector">
                                <img src="./assets/images/iconSkills/codeigniter.png" alt="">
                            </div>
                            <div class="vector secondVector">
                                <img src="./assets/images/iconSkills/MI.png" alt="">
                            </div>
                            <div class="vector threeVector">
                                <img src="./assets/images/iconSkills/sass.png" alt="">
                            </div>
                            <div class="vector fourVector">
                                <img src="./assets/images/iconSkills/css.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="partnerWrapper">
                        <div class="whiteCard">
                            <p>Partnership</p>
                            <div class="containerPartnership">
                                <div class="partnership">
                                    <img src="./assets/images/plantsasriLogo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Jumbotron End-->

        <!--Service-->
        <div id="service">
            <div class="container">
                <div class="serviceContainer">
                    <div class="titleSection">
                        <h2>I Know That <span class="textPrimary">Good Design</span></h2>
                        <h2>Means <span class="textPrimary">Good Business</span></h2>
                    </div>
                    <div class="row bodySectionService justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="service">
                                <div class="imageService">
                                    <img src="{{ url('assets/images/webDesignerImagesService.png') }}" alt="">
                                </div>
                                <div class="infoService">
                                    <h3>Web Designer</h3>
                                    <p>we can help you create a web designer with a passion for creating beautiful and
                                        functional web applications</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="service">
                                <div class="imageService">
                                    <img src="{{ url('assets/images/backendDeveloperImagesService.png') }}" alt="">
                                </div>
                                <div class="infoService">
                                    <h3>Backend Developer</h3>
                                    <p>we can help you backend with passion for creating beautiful and functional web
                                        apps</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="service">
                                <div class="imageService">
                                    <img src="{{ url('assets/images/frontEndDeveloperImagesService.png') }}" alt="">
                                </div>
                                <div class="infoService">
                                    <h3>Frontend Developer</h3>
                                    <p>we can help you with website creation with passion to create beautiful and
                                        functional web applications</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="service">
                                <div class="imageService">
                                    <img src="{{ url('assets/images/mobileDeveloperService.png') }}" alt="">
                                </div>
                                <div class="infoService">
                                    <h3>Mobile Developer</h3>
                                    <p>we can help you with the mobile app creation you need with passion to create beautiful and functional web apps</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Service-->

        <!--featuredWorks-->
        <div id="featuredWorks">
            <div class="container">
                <div class="containerProjectWorks">
                    <div class="titleSection">
                        <h2>Featured Works</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <div class="project">
                                <div class="previewProjectImages">
                                    <img src="{{ url('assets/images/previewLatestProject.png') }}" alt="">
                                </div>
                                <div class="previewWebsite">
                                    <div class="detailWebsite">
                                        <h5>Plantsasri ID</h5>
                                        <a href="#">View Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 h-100">
                            <div class="row mb-3 right">
                                <div class="col-6">
                                    <div class="project">
                                        <div class="previewProjectImages">
                                            <img src="{{ url('assets/images/previewLatestProject.png') }}" alt="">
                                        </div>
                                        <div class="previewWebsite">
                                            <div class="detailWebsite">
                                                <h5>Plantsasri ID</h5>
                                                <a href="#">View Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="project">
                                        <div class="previewProjectImages">
                                            <img src="{{ url('assets/images/previewLatestProject.png') }}" alt="">
                                        </div>
                                        <div class="previewWebsite">
                                            <div class="detailWebsite">
                                                <h5>Plantsasri ID</h5>
                                                <a href="#">View Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 right">
                                <div class="project">
                                    <div class="previewProjectImages">
                                        <img src="{{ url('assets/images/previewLatestProject.png') }}" alt="">
                                    </div>
                                    <div class="previewWebsite">
                                        <div class="detailWebsite">
                                            <h5>Plantsasri ID</h5>
                                            <a href="#">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End featuredWorks-->

        <!--Skills-->
        <div id="skills">
            <div class="container">
                <div class="skillsContainer">
                    <div class="titleSection">
                        <h2>Skills</h2>
                    </div>
                    <div class="skillWrapper">
                        <div class="row justify-content-center">
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/php.png') }}" alt="">
                                    <p>PHP</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/git.png') }}" alt="">
                                    <p>Git</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/js.png') }}" alt="">
                                    <p>Javascript</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/html.png') }}" alt="">
                                    <p>HTML 5</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/css.png') }}" alt="">
                                    <p>CSS 3</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/sass.png') }}" alt="">
                                    <p>Sass</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/laravel.png') }}" alt="">
                                    <p>Laravel</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/adobeXD.png') }}" alt="">
                                    <p>Adobe XD</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/MI.png') }}" alt="">
                                    <p>Adobe XD</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/django.png') }}" alt="">
                                    <p>Django</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/codeigniter.png') }}" alt="">
                                    <p>Codeigniter 3</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/flask.png') }}" alt="">
                                    <p>Flask</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/figma.png') }}" alt="">
                                    <p>Figma</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/fluter.png') }}" alt="">
                                    <p>Flutter</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/adobe.png') }}" alt="">
                                    <p>Adobe</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/expresJS.png') }}" alt="">
                                    <p>Express JS</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/java.png') }}" alt="">
                                    <p>Java</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/kotlin.png') }}" alt="">
                                    <p>Kotlin</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/realm.png') }}" alt="">
                                    <p>Realm</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/sqlite.png') }}" alt="">
                                    <p>Sqlite</p>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <div class="skills">
                                    <img src="{{ url('assets/images/iconSkills/yii2.png') }}" alt="">
                                    <p>Yii2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--EndSkills-->

        <!--Testimoni-->
        <div id="testimoni">
            <div class="container">
                <div class="titleSection">
                    <h2>Testimoni</h2>
                </div>
                <div class="wrapperTestimoni">
                    @foreach (DB::table('feedback')->limit(5)->orderBy('id', 'DESC')->get()
    as $item)
                        <div class="testimoni">
                            <div class="avatarTestimoni">
                                @if (!is_null($item->thumb))
                                    <img src="{{ url('thumbReviews/' . $item->thumb) }}" alt="">
                                @else
                                    <img src="{{ url('assets/images/vectorReviewJumbotron.png') }}" alt="">
                                @endif
                            </div>
                            <div class="comment">
                                <p>{{ $item->review }}</p>
                            </div>
                            <p class="name">{{ $item->name }}</p>
                        </div>
                    @endforeach

                </div>
                <div class="slick-slider-dots"></div>
            </div>
        </div>
        <!--End Testimoni-->

        <!--Contact-->
        <div id="contact">
            <div class="container">
                <div class="wrapperContant">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5">
                            <div class="textContact">
                                <h1>Get In Touch With Us Now!</h1>
                                <p>Various Reasons to Choose StartCode As Your Business Partner, Good & Convenient
                                    Service With StartCode. we are ready to serve you with kind and fast response!</p>
                                <div class="wrapperButtonContact">
                                    <a href="#">Get Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="imagesVector">
                                <img src="{{ url('assets/images/contactVectorIcon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--EndContact-->


        <!--Team-->
        <div id="team">
            <div class="container">
                <div class="titleSection">
                    <h2>Our Team</h2>
                </div>
                <div class="wrapperTeam d-flex justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="team">
                                <div class="imagesTeam">
                                    <img src="{{ url('assets/images/Avatar/1.jpg') }}" alt="">
                                </div>
                                <p>Reksa Prayoga</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="team">
                                <div class="imagesTeam">
                                    <img src="{{ url('assets/images/Avatar/2.jpg') }}" alt="">
                                </div>
                                <p>M Alfito Rahman</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="team">
                                <div class="imagesTeam">
                                    <img src="{{ url('assets/images/Avatar/3.jpg') }}" alt="">
                                </div>
                                <p>Yoga Saputra</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="team">
                                <div class="imagesTeam">
                                    <img src="{{ url('assets/images/Avatar/4.jpg') }}" alt="">
                                </div>
                                <p>Dwi Febryansyah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Team-->


        <!--Footer-->
        <footer>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
                <path fill="#F6F8FD" fill-opacity="1"
                    d="M0,64L120,90.7C240,117,480,171,720,170.7C960,171,1200,117,1320,90.7L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
                </path>
            </svg>
            <div class="container">
                <div class="wrapperContentFooter">
                    <div class="footerContent">
                        <a href="#" class="brand">
                            <div class="logoBrand">
                                <img src="{{ url('assets/images/logoStartCode_white.png') }}" alt="">
                            </div>
                            <h2 class="nameBrand">StartCode</h2>
                        </a>
                        <p class="addres">Banana Residence Jl Pisang Mas 4, Kab Bogor, Jawa Barat</p>
                        <div class="wrapperSocialMedia">
                            <a href="#" class="socialMedia">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#" class="socialMedia">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#" class="socialMedia">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <div class="footerContent">
                        <h2 class="labelService">Service</h2>
                        <div class="wrapperService">
                            <a href="#">UI UX Designer</a>
                            <a href="#">Backend Development</a>
                            <a href="#">Frontend Development</a>
                            <a href="#">Mobile Development</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyRight">
                <p>Copyright © 2022 - StartCode</p>
            </div>
        </footer>

    </div>




    <!--Vendor JS-->
    <!--Jquery-->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!--Bootstrap Js-->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!--Slick Js-->
    <script src="{{ url('assets/vendor/slick/slick.min.js') }}"></script>
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Js This Pages-->
    <script>
        //Nav SideBar Menu Active
        $('.buttonNavbarMenu').click(function() {
            $('.containerMenu').toggleClass('containerMenuActive');
        });
        $('.buttonNavbarMenu').click(function() {
            $('.buttonNavbarMenu').toggleClass('activeButton');
        });
        //On Scrool Effect
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 10) {
                $("#navbarContainer").addClass("navbarOnScrolled");
            } else {
                $("#navbarContainer").removeClass("navbarOnScrolled");
            }
        });
    </script>

    <script>
        $('.wrapperTestimoni').slick({
            infinite: true,
            dots: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            appendDots: $('.slick-slider-dots'),
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script>


    <script>
        /*Smooth Scrooling */
        $('a[href*="#"]').click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 750);
                }
            }
        });

        $(document).ready(function() {
            $('.nav-menu').click(function(e) {

                $('.nav-menu').removeClass('active');

                var $this = $(this);
                if (!$this.hasClass('active')) {
                    $this.addClass('active');
                }
                //e.preventDefault();
            });
        });
    </script>
</body>

</html>
