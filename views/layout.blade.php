
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./Assets/hotel.ico">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <title>Hotel Miranda</title>
</head>
<body>
    <header>
        <div class="container-menu">
            <div class="container-menu__toggle">
                <div class="container-menu__burger"><img src="./Assets/1.png"></div>
                <div class="container-menu__burger-close"><img src="./Assets/icon/cerrar.png"></div>
            </div>
            <a href="./index.php">
                <div class="container-menu__box-h"><p>H</p></div>
            </a>
                <div class="container-menu__main-title"><span class="container__title">HOTEL</span><p>MIRANDA</p></div>
            <div><img src="./Assets/Vector.png"></div>
            <div class="container-menu__search"><img src="./Assets/search.png"></div>
        </div>
    </header>
    <div class="nav__list ">
        <a class="a-menu" href="./about-us.php">About Us</a>
        <a class="a-menu" href="./rooms.php">Rooms</a>
        <a class="a-menu" href="./offers.php">Offers</a>
        <a class="a-menu" href="./contact.php">Contact</a>
    </div>
<main>
    @yield('content')
</main>
<section class="footer">
       <div class="footer__container">
           <div class="footer__logo">H</div>
           <div class="footer__main-title"><span class="footer__title">HOTEL</span><p>MIRANDA</p></div>
        </div> 
           <p class="footer__paragraph">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
        <div class="social">
            <img src="./Assets/facebook-icon.png" alt="">
            <img class="social__twitter" src="./Assets/twitter.png" alt="">
            <img src="./Assets/behance logo_icon 1.png" alt="">
            <img src="./Assets/linkedin_icon.png" alt="">
            <img src="./Assets/youtube logo_icon.png" alt="">
        </div>
        <div>
            <h5>Services.</h5>
            <div class="services-list">
                <div class="services-list__1">
                    <p class="services-list__p">+ Restaurant Bar</p>
                    <p class="services-list__p">+ Swimming Pool</p>
                    <p class="services-list__p">+ Wellness & Spa</p>
                    <p class="services-list__p">+ Tennis Courts</p>
                    <p class="services-list__p">+ Conference Room</p>
                    <p class="services-list__p">+ Cocktail Party House</p>
                </div>
                <div class="services-list__2">  
                    <p  class="services-list__p">+ Gaming Zone</p>
                    <p  class="services-list__p">+ Marrige Party</p>
                    <p  class="services-list__p">+ Party Plannung</p>
                    <p  class="services-list__p">+ Tour Consultancy</p>
                </div>
            </div>
        </div>   
            <h5>Contact Us.</h5>
            <div class="contact-icons">
                <img src="./Assets/phone-icon.png" alt="phone">
                <div class="contact-icons__numbers">
                    <h4>Phone Number</h4>
                    <p>+98787676576577</p>
                </div>
            </div>
            <div class="contact-icons">
                <img src="./Assets/mail-icon.png" alt="mail">
                <div class="contact-icons__numbers">
                    <h4>Phone Number</h4>
                    <p>+98787676576577</p>
                </div>
            </div>
            <div class="contact-icons"class="contact-us__icons">
                <img src="./Assets/location-icon.png" alt="location">
                <div class="contact-icons__numbers">
                    <h4>Phone Number</h4>
                    <p>+98787676576577</p>
                </div>
            </div>
           <div class="copyright"> 
                <p>Copyright By@Example-2020</p>
                <p>Terms of use | Privacy Environmental Policy</p>
           </div> 
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>
</body>
</html>