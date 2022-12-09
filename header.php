<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsome.min.css">
    <link rel="stylesheet" href="assets/fonts/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/progress-bar.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title> M.L.Energy Transmissions</title>
    <!--<link rel="icon" type="image/png" href="assets/images/fav-icon.png" />-->
    <script>
        function product_click(clicked_id){

        let name=document.getElementById(clicked_id).innerHTML;
          localStorage.setItem("item_name", name);
          
          window.location.href="products.php";
        }
    </script>
</head>

<body>

    <div id="pre-loader">
        <ul class="cssload-cssload-ballsncups">
            <li>
                <div class="cssload-circle"></div>
                <div class="cssload-ball"></div>
            </li>
            <li>
                <div class="cssload-circle"></div>
                <div class="cssload-ball"></div>
            </li>
            <li>
                <div class="cssload-circle"></div>
                <div class="cssload-ball"></div>
            </li>
            <li>
                <div class="cssload-circle"></div>
                <div class="cssload-ball"></div>
            </li>
            <li>
                <div class="cssload-circle"></div>
                <div class="cssload-ball"></div>
            </li>
        </ul>
    </div>
    <div id="full-content">

        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-12">
                        <div class="topbar-social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-12 col-md-12 col-12">
                        <div class="topbar-right-area">
                            <ul>
                                <li><i class="fas fa-clock"></i> <a href="#"> 09:30 AM 06:30 PM</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="422a272e2e2d02313623312b316c212d2f">mlenenergytransmission@gmail.com</span></a></li>
                                <li><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/D6qT2oWaAE46pHd77" target="blank">
                                        Shop No. 11-5-234, H.P. Road, Moosapet, Hyderabad, Telangana.
                                    </a></li>
                            </ul>
                            <!--  <div class="language">
                                <span><i class="fas fa-globe"></i></span>
                                <i class="fas fa-angle-down"></i>
                                <select class="form-select language-select" aria-label="Default select example">
                                    <option selected>English</option>
                                    <option value="1">Dutch</option>
                                    <option value="2">French</option>
                                    <option value="3">Greek</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-area">
            <div class="navbar-area">
                <!-- Menu For Mobile Device -->
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="mobile-nav">
                            <a href="index.php" class="logo"><img src="assets/images/mle/mlet.jpg"  alt="logo" style="height:50px;"/></a>
                           <!--  <ul class="menu-sidebar menu-small-device">
                                <li><a class="default-button" href="#">Get A Quote <i class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/mle/mlet.jpg" width="295px" alt="logo" />
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item plus-icon">
                                        <a href="index.php" class="nav-link active dropdown-toggle">Home <!--<i class="fas fa-angle-down"></i>-->
                                        </a>
                                        <!--  <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="index.html" class="nav-link">Home Page 1</a></li>
                                            <li class="nav-item"><a href="index-2.html" class="nav-link">Home Page 2</a></li>
                                            <li class="nav-item"><a href="index-3.html" class="nav-link active">Home Page 3</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                                    <li class="nav-item">
                                        <a href="products.php" class="nav-link dropdown-toggle">Products<i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a  id="Power_Drives_Pulley" onclick="product_click(this.id)"class="nav-link dropdown-toggle">Power Drives Pulleys</a>
                                                <!-- <i class="fas fa-caret-right"></i> -->
                                                <!-- <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                                                    <li class="nav-item"><a href="service-2.html" class="nav-link">Services 02</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="nav-item"><a href="#" id="Machine_Tools" onclick="product_click(this.id)"  class="nav-link">Machine Tools</a></li>
                                            <li class="nav-item"><a href="#" id="Pin_Bush_Couplings" onclick="product_click(this.id)" class="nav-link">Pin Bush Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Star_Type_Couplings" onclick="product_click(this.id)" class="nav-link">Star Type Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Taper_Fit_Pulley" onclick="product_click(this.id)" class="nav-link">Taper Fit Pulley</a></li>
                                            <li class="nav-item"><a href="#" id="Tyre_Couplings" onclick="product_click(this.id)" class="nav-link">Tyre Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Gear_Couplings" onclick="product_click(this.id)" class="nav-link">Gear Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="HRC_Couplings" onclick="product_click(this.id)" class="nav-link">HRC Couplings</a></li>
                                            <li class="nav-item"><a href="#" id="Crusher_Pulleys" onclick="product_click(this.id)" class="nav-link">Crusher_Pulleys</a></li>
                                            <li class="nav-item"><a href="#" id="Timer_Pulleys" onclick="product_click(this.id)" class="nav-link">Timer Pulleys</a></li>
                                            <li class="nav-item"><a href="#" id="Weldon_Hubs" onclick="product_click(this.id)" class="nav-link">Weldon Hubs</a></li>








                                        </ul>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link dropdown-toggle">Gallery
                                        </a>
                                    </li>
                                    
                                    </li>
                                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                                    <!-- <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li> -->
                                </ul>
                               <!--  <div class="menu-sidebar">
                                    <a class="default-button" href="#">Download Brochure<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>