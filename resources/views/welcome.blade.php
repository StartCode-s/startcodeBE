<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartCode | Make Your Ideas Come True</title>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BSRM83J1NM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BSRM83J1NM');
</script>
    <!--Vendor CSS-->
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--Slick Css-->
        <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ url('assets/vendor/slick/slick-theme.css') }}">
        <!--Icon Scout-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
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
                        <i class="uis uis-align-right"></i>
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
                        <h1>Make your ideas come true with <span class="primaryText">StartCode</span></h1>
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
                                    <h3>Web Design</h3>
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
                                    <h3>Backend Developing</h3>
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
                                    <h3>Frontend Developing</h3>
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
                                    <h3>Mobile Developing</h3>
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
                        <div class="col-12 col-md-6 h-100">

                        <div class="col-12 col-md-12 left">
                            <div class="project">
                                <div class="previewProjectImages">
                                    <img src="{{ url('assets/images/previewLatestProject.png') }}" alt="">
                                </div>
                                <div class="previewWebsite">
                                    <div class="detailWebsite">
                                        <h5>Plantsasri ID</h5>
                                        <a href="http://plantsasri.co.id/">View Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-md-12 left">
                            <div class="project">
                                <div class="previewProjectImages">
                                    <img src="{{ url('assets/images/goldenkitchen.png') }}" alt="">
                                </div>
                                <div class="previewWebsite">
                                    <div class="detailWebsite">
                                        <h5>Golden Kitchen Spray and Renovation</h5>
                                        <a href="https://goldenkitchenrenovation.com.au/">View Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12 col-md-12 left">
                            <div class="project">
                                <div class="previewProjectImages">
                                    <img src="{{ url('assets/images/copyrade.png') }}" alt="">
                                </div>
                                <div class="previewWebsite">
                                    <div class="detailWebsite">
                                        <h5>Copytrade App</h5>
                                        <a href="">View Website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-12 col-md-6 h-100">
                            <br>
                            <div class="row mb-3 right">
                                <div class="col-6">
                                    <div class="project">
                                        <div class="previewProjectImages">
                                            <img src="{{ url('assets/images/sunskyProject.png') }}" alt="">
                                        </div>
                                        <div class="previewWebsite">
                                            <div class="detailWebsite">
                                                <h5>Sunsky Gaming Shop</h5>
                                                <a href="https://www.sunskygamingshop.com">View Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="project">
                                        <div class="previewProjectImages">
                                            <img src="{{ url('assets/images/UnisolProject.png') }}" alt="">
                                        </div>
                                        <div class="previewWebsite">
                                            <div class="detailWebsite">
                                                <h5>Unisol Crypto</h5>
                                                <a href="https://unisol.me/">View Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-12 col-md-12 right">
                                <div class="project">
                                    <div class="previewProjectImages">
                                        <img src="{{ url('assets/images/plantsasri.png') }}" alt="">
                                    </div>
                                    <div class="previewWebsite">
                                        <div class="detailWebsite">
                                            <h5>Plantsasri Marketplace</h5>
                                            <a href="http://plantsasri.co.id/shop">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="col-12 col-md-12 right">
                                <div class="project">
                                    <div class="previewProjectImages">
                                        <img src="{{ url('assets/images/scindapsus.png') }}" alt="">
                                    </div>
                                    <div class="previewWebsite">
                                        <div class="detailWebsite">
                                            <h5>Scindapsus Community</h5>
                                            <a href="https://scindapsus.org">View Website</a>
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
                                    <p>ML</p>
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
                                    <a href="https://wa.me/6285280044559">Get Contact</a>
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
                <div class="containerTeam">
                    <div class="buttonControl">
                        <div class="arrow leftAction">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </div>
                        <div class="arrow rightAction">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="slideTeam">
                        <div class="team">
                            <div class="infoTeam">
                                <h2>M Alfito Rahman</h2>
                                <p>Chief Executive Officer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_alfito.png" alt="">
                            </div>
                        </div>
                        <div class="team">
                            <div class="infoTeam">
                                <h2>Nabila Nur Jayanti</h2>
                                <p>Chief Operating Officer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_nabila.png" alt="">
                            </div>
                        </div>
                        <div class="team">
                            <div class="infoTeam">
                                <h2>Reksya Prayoga Syahputra</h2>
                                <p>Chief Technology Officer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_reksa.png" alt="">
                            </div>
                        </div>
                        <div class="team">
                            <div class="infoTeam">
                                <h2>Leonard Deniel Damanik</h2>
                                <p>Chief Marketing Officer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_leo.png" alt="">
                            </div>
                        </div>
                        <div class="team">
                            <div class="infoTeam">
                                <h2>Yoga Pratama</h2>
                                <p>UI UX Designer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_yoga.png" alt="">
                            </div>
                        </div>
                        <div class="team">
                            <div class="infoTeam">
                                <h2>Dwi Febryansyah</h2>
                                <p>Backend Developer</p>
                            </div>
                            <div class="imagesTeam">
                                <img src="./assets/images/team/team_dwi.png" alt="">
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
                <div class="wrapperContentFooter justify-content-center align-items-center text-center">
                    <div class="footerContent">
                        <a href="#" class="brand justify-content-center">
                            <div class="logoBrand">
                                <img src="{{ url('assets/images/logoStartCode_white.png') }}" alt="">
                            </div>
                            <h2 class="nameBrand">StartCode</h2>
                        </a>
                        <p class="addres">Banana Residence Jl Pisang Mas 4, Kab Bogor, Jawa Barat</p>
                        <div class="wrapperSocialMedia">
                            <a href="https://www.instagram.com/startcode.id/" class="socialMedia">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#" class="socialMedia">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="https://wa.me/628528004459" class="socialMedia">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
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



        $('.slideTeam').slick({
        infinite: false,
        dots: false,
        speed: 500,
        slidesToShow: 2.5,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        prevArrow: $('.leftAction'),
        nextArrow: $('.rightAction'),
        responsive: [
                {
                breakpoint: 768,
                    settings: {
                        slidesToShow: 2.1,
                    }
                },

                {
                breakpoint: 576,
                    settings: {
                        slidesToShow: 1.4,
                    }
                },

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BSRM83J1NM"></script>

</body>

</html>
