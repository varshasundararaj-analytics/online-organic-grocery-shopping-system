<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Livin Fresh</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<style>

/* ===== ABOUT PAGE FINAL LOCAL FIX ===== */

body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    color:#333;
}

/* HEADER */

.simple-header{
    background:#ffffff !important;
    border-bottom:1px solid #dddddd !important;
    padding:10px 0 !important;
}

.simple-header-inner{
    max-width:1200px !important;
    margin:0 auto !important;
    padding:0 25px !important;
    display:flex !important;
    align-items:center !important;
    gap:18px !important;
}

.simple-logo{
    width:75px !important;
    height:75px !important;
    max-width:75px !important;
    object-fit:contain !important;
}

.simple-header h1{
    margin:0 !important;
    font-size:28px !important;
    color:#2f6b2f !important;
}

.simple-nav{
    margin-left:auto !important;
    display:flex !important;
    align-items:center !important;
    gap:25px !important;
}

.simple-nav a{
    color:#333333 !important;
    text-decoration:none !important;
    font-size:16px !important;
    font-weight:600 !important;
}

.simple-nav a:hover{
    color:#7faa3d !important;
}


/* GREEN ABOUT TITLE */

.all-title-box{
    background:#7faa3d !important;
    color:white !important;
    padding:25px 0 !important;
    text-align:center !important;
}

.all-title-box h2{
    margin:0 !important;
    font-size:34px !important;
}

.breadcrumb{
    list-style:none !important;
    padding:0 !important;
    margin:10px 0 0 !important;
}

.breadcrumb-item{
    color:white !important;
}


/* MAIN ABOUT AREA */

.about-box-main{
    padding:45px 0 !important;
}

.about-box-main .container{
    width:100% !important;
    max-width:1200px !important;
    margin:0 auto !important;
    padding:0 20px !important;
    box-sizing:border-box !important;
}

.about-box-main .row{
    display:flex !important;
    flex-wrap:wrap !important;
    margin:0 -15px !important;
}

.about-box-main .col-lg-6{
    width:50% !important;
    flex:0 0 50% !important;
    max-width:50% !important;
    padding:0 15px !important;
    box-sizing:border-box !important;
}

/* Main organic image */

.banner-frame{
    width:100% !important;
}

.banner-frame img{
    width:100% !important;
    height:380px !important;
    max-height:380px !important;
    object-fit:cover !important;
    border-radius:8px !important;
    display:block !important;
}


/* ABOUT TEXT */

.noo-sh-title-top{
    margin-top:0 !important;
    margin-bottom:20px !important;
    font-size:32px !important;
}

.noo-sh-title-top span{
    color:#7faa3d !important;
}

.about-box-main p{
    font-size:16px !important;
    line-height:1.7 !important;
    color:#555 !important;
}

.about-box-main h2{
    line-height:1.35 !important;
}

.about-box-main h1{
    line-height:1.3 !important;
}


/* FEATURES */

.about-box-main .row.my-5{
    margin-top:40px !important;
    display:flex !important;
    flex-wrap:wrap !important;
}

.about-box-main .col-lg-4{
    width:33.333% !important;
    flex:0 0 33.333% !important;
    max-width:33.333% !important;
    padding:0 15px !important;
    box-sizing:border-box !important;
}

.service-block-inner{
    background:#f7f7f7 !important;
    border:1px solid #dddddd !important;
    padding:22px !important;
    min-height:170px !important;
    border-radius:6px !important;
}

.service-block-inner h3{
    color:#7faa3d !important;
}


/* INSTAGRAM */

.instagram-box{
    background:#f5f5f5 !important;
    padding:30px 15px !important;
}

.main-instagram{
    max-width:1200px !important;
    margin:0 auto !important;
    display:grid !important;
    grid-template-columns:repeat(5, 1fr) !important;
    gap:12px !important;
}

.main-instagram .item{
    width:100% !important;
}

.ins-inner-box img{
    width:100% !important;
    height:150px !important;
    object-fit:cover !important;
    display:block !important;
}


/* FOOTER */

.footer-main{
    background:#222222 !important;
    color:#dddddd !important;
    padding:40px 0 !important;
}

.footer-main .container{
    max-width:1200px !important;
    margin:0 auto !important;
    padding:0 20px !important;
}

.footer-main .row{
    display:flex !important;
    flex-wrap:wrap !important;
}

.footer-main .col-lg-4{
    width:33.333% !important;
    flex:0 0 33.333% !important;
    max-width:33.333% !important;
    padding:0 15px !important;
    box-sizing:border-box !important;
}

.footer-main h3,
.footer-main h4{
    color:#ffffff !important;
}

.footer-main a{
    color:#9ad25a !important;
}


/* MOBILE */

@media(max-width:768px){

    .simple-header-inner{
        flex-wrap:wrap !important;
    }

    .simple-nav{
        width:100% !important;
        margin-left:0 !important;
        flex-wrap:wrap !important;
    }

    .about-box-main .col-lg-6{
        width:100% !important;
        flex:0 0 100% !important;
        max-width:100% !important;
        margin-bottom:25px !important;
    }

    .about-box-main .col-lg-4,
    .footer-main .col-lg-4{
        width:100% !important;
        flex:0 0 100% !important;
        max-width:100% !important;
        margin-bottom:20px !important;
    }

    .main-instagram{
        grid-template-columns:repeat(2,1fr) !important;
    }
}

</style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>


<!-- ===== LIVIN FRESH SIMPLE HEADER ===== -->

<header class="simple-header">
    <div class="simple-header-inner">

        <img src="images/livin logo.jpeg"
             alt="Livin Fresh Logo"
             class="simple-logo">

        <h1>LIVIN FRESH</h1>

        <nav class="simple-nav">
            <a href="home2.php">Home</a>
            <a href="about.php">About</a>
            <a href="Gallery.php">Gallery</a>
            <a href="Cart.php">Cart</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
        </nav>

    </div>
</header>


<!-- Start All Title Box -->

<div class="all-title-box">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2>
                    ABOUT OUR GROCERY APP
                </h2>

                <ul class="breadcrumb">

                    <li class="breadcrumb-item active">
                        ABOUT US
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- End All Title Box -->


<!-- Start About Page -->

<div class="about-box-main">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="banner-frame">

                    <img
                        class="img-fluid"
                        src="images/organic.jpeg"
                        alt="">

                </div>

            </div>


            <div class="col-lg-6">

                <h2 class="noo-sh-title-top">

                    About
                    <span>Livin Fresh</span>

                </h2>


                <p>

                    Livin Fresh is a online organic grocery shopping
                    system which is created for making
                    organic grocery shopping easy and feasible for the
                    organic food lovers.This website is also created to
                    create awareness about organic farming and organic
                    products make the products reachable to people.This
                    is mainly created to people who do not have time to
                    go the shops and purchase products.

                </p>


                <p>

                    The organic products are very good for health, with
                    no added chemicals and pesticides.Nowadays most of
                    the people ae affected due to several diseases like
                    diabetes, hyper tension etc. the best medice to
                    theese diseases are to eat organic food. This
                    initiative is to bring healthy food products in a
                    minimum price so that all the people are benefited.

                    <h2>
                        Let All Have Healty Food and Live Longer
                    </h2>

                    <h1>
                        STAY HEALTY STAY STRONG!
                    </h1>

                </p>

            </div>

        </div>


        <div class="row my-5">

            <div class="col-sm-6 col-lg-4">

                <div>

                    <h1>
                        Features of Livin Fresh
                    </h1>

                </div>


                <div class="service-block-inner">

                    <h3>
                        Fresh and Natural Products
                    </h3>

                    <p>

                        The organic groceries are fresh and naturally
                        cultivated without using pesticides.They have
                        good nutritious value.

                    </p>

                </div>

            </div>


            <div class="col-sm-6 col-lg-4">

                <div class="service-block-inner">

                    <h3>
                        Chatbot
                    </h3>

                    <p>

                        We have chatbot to clear the queries and will
                        also provide information on the list of products
                        available in our store.

                    </p>

                </div>

            </div>


            <div class="col-sm-6 col-lg-4">

                <div class="service-block-inner">

                    <h3>
                        Door Delivery
                    </h3>

                    <p>

                        The products will be provided to The customers
                        via door delivery within few hours of there
                        ordering.

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- End About Page -->


<!-- Start Instagram Feed -->

<div class="instagram-box">

    <div class="main-instagram owl-carousel owl-theme">


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-01.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-02.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-03.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-04.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-05.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-06.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-07.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-08.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-09.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="item">

            <div class="ins-inner-box">

                <img src="images/instagram-img-05.jpg" alt="">

                <div class="hov-in">

                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


    </div>

</div>

<!-- End Instagram Feed -->


<!-- Start Footer -->

<footer>

    <div class="footer-main">

        <div class="container">


            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-top-box">

                    </div>

                </div>


                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-top-box">

                        <h3>
                            Reviews or Complaints
                        </h3>

                        <form class="newsletter-box">

                            <div class="form-group">

                                <input
                                    class=""
                                    type=""
                                    name=""
                                    placeholder="">

                                <i class="fa fa-envelope"></i>

                            </div>


                            <button
                                class="btn hvr-hover"
                                type="submit">

                                Submit

                            </button>

                        </form>

                    </div>

                </div>


                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-top-box">

                    </div>

                </div>

            </div>


            <hr>


            <div class="row">


                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-widget">

                        <h4>
                            About us
                        </h4>

                        <p>

                            Livin Fresh is a online shopping system
                            created by the students of CSBS department
                            from Rajalakshmi Engineering College. To
                            create a platform for organic farmers and
                            the sellers of organic groceries for there
                            effient business. Livin fresh has also been
                            created to promote organic products there
                            uses and there benefits which will help us
                            to be healthy by slowly adopting to organic
                            food.

                        </p>

                    </div>

                </div>


                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-link">

                        <h4>
                            Information
                        </h4>

                        <p>

                            <li>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">Gallery</a>
                            </li>

                            <li>
                                <a href="#">Cart</a>
                            </li>

                            <li>
                                <a href="#">Contact Us</a>
                            </li>

                        </p>

                    </div>

                </div>


                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="footer-link-contact">

                        <h4>
                            Contact Us
                        </h4>

                        <ul>

                            <li>

                                <p>

                                    <i class="fas fa-map-marker-alt"></i>

                                    Location: Chennai

                                    <br>

                                    Tamil Nadu

                                    <br>

                                    India

                                </p>

                            </li>


                            <li>

                                <p>

                                    <i class="fas fa-phone-square"></i>

                                    Phone:

                                    <a href="">
                                        044-2278690
                                    </a>

                                </p>

                            </li>


                            <li>

                                <p>

                                    <i class="fas fa-envelope"></i>

                                    Email:

                                    <a href="mailto:organicgrochat@gmail.com">
                                        organicgrochat@gmail.com
                                    </a>

                                </p>

                            </li>

                        </ul>

                    </div>

                </div>


            </div>

        </div>

    </div>

</footer>

<!-- End Footer -->


<!-- ALL JS FILES -->

<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>


<!-- ALL PLUGINS -->

<script src="js/custom.js"></script>


</body>

</html>