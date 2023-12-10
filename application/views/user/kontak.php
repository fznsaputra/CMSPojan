<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warung'e Fauzan</title>

    <?php require_once('_css.php'); ?>
</head>

<body>
    <!-- Page Preloder -->
    

    <!-- Humberger Begin -->
    <?php require_once('_burger.php'); ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php require_once('_header.php'); ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories" >
                        <div class="hero__categories__all" style="background-color: rgb(40, 40, 206);">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <ul>
                            <li><a href="#">Makanan Ringan</a></li>
                            <li><a href="#">Minuman Sachet/Instan</a></li>
                            <li><a href="#">Bahan Roti</a></li>
                            <li><a href="#">Sembako</a></li>
                            <li><a href="#">Bumbu Instan</a></li>
                            <li><a href="#">Paket Data</a></li>
                            <li><a href="#">Voucher Game</a></li>
                            <li><a href="#">Pulsa(Semua Operator)</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn" style="background-color: rgb(40, 40, 206);">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+62 857 415 999 60</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Telepon</h4>
                        <p>+62 857 415 999 60</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Alamat</h4>
                        <p>Palur Wetan Rt 01 Rw 07, Mojolaban, Sukoharjo</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Waktu Buka</h4>
                        <p>07:00 am sampai 20:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>WarungFzn@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0273472527006!2d110.87596587420306!3d-7.571997274790926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17cd44db7925%3A0x785570d174ddfa46!2sWarung&#39;e%20FAUZAN!5e0!3m2!1sid!2sid!4v1695256849821!5m2!1sid!2sid" width="1366" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
    </div>
    <!-- Map End -->

    

    <!-- Footer Section Begin -->
    <?php require_once('_footer.php'); ?>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php require_once('_js.php'); ?>


</body>

</html>