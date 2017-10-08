<?php ob_start(); session_start(); ?>
<? // error_reporting(E_ALL); // ini_set( "display_errors", 1); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/google-login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!-- <link href="css/gsdk.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!--Navigation-->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars icon-bars"></i>
                </button>
                <!-- <div class="header">
                        <a class="page-scroll"><img style="width:50px;height:20px;" src="img/psd-logo.png"></a>
                    </div> --.>
                    <!-- <img style="width:50px;height:px;" src="img/psd-logo.png"> -->

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#appointment"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Appointment</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team"><span class="glyphicon glyphicon-user"></span>&nbsp;About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-earphone"></span>Call us now!&nbsp;<u>(046) 413 5533</u></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--Header-->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Artencjen Dental Clinic</div>
                <div class="intro-lead-in">Dr. Jenalyn Hebron and
                    <br>staff are dedicated to providing you with
                    <br>a pleasant visit and results
                    <br>that you're proud to show off..</div>
            </div>
        </div>
    </header>

    <!--background header -->
    <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

        <!-- Wrapper for slides -->
    <!-- <div class="carousel-inner">
             <div class="item active">
                <img src="img/5.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/5.jpg" alt="Chicago" style="width:100%;">
            </div>
    
            <div class="item">
                <img src="img/5.jpg" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
 </div>
<!--background header -->

    <!--SERVICES SECTION-->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services Offered</h2>
                    <h3 class="section-subheading text-muted">We strive to improve the dental health of the people and communities we serve. Caring for our patients is our top priority. </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Teeth Cleaning</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <strong>Services Offered</strong>
                            </div>
                        </div>
                        <img src="img/portfolio/teethcleaning.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--APPOINTMENT SECTION-->
    <section id="appointment" class="appointment1">
        <div class="container">

            <div class="row" style="height: 200px">
                <div class="col-lg-12 text-center">
                    <br>
                    <center>
                        <h2 class="test">MAKE AN APPOINTMENT TODAY</h2>
                    </center>
                    <h3 class="section-subheading text-muted">We valued our customers deeply. Manage your appointment to us here.</h3>
                    <div class="col-lg-12">
                        <button type="button" class="btn-link btn-xl" data-toggle="modal" data-target="#myModal">Make Appointment</button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button1" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Schedule an appointment</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-md-offset-1">
                                                        <?php
                                                            $msg = '';
                                                                if (isset($_POST['login']) && !empty($_POST['username']) 
                                                                    && !empty($_POST['password'])) {
                                                                    if ($_POST['username'] == 'argie' && 
                                                                        $_POST['password'] == '1234') {
                                                                        $_SESSION['valid'] = true;
                                                                        $_SESSION['timeout'] = time();
                                                                        $_SESSION['username'] = 'argie';
                                                                        $msg = 'You have entered valid use name and password';
                                                                    }else {
                                                                        $msg = 'Wrong username or password';
                                                                    }
                                                                }
                                                        ?>
                                                    <div class="account-wall">
                                                        <h1 class="text-center login-title">Contact us and make appointment to serve you.</h1>
                                                        <form class="form-signin form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"><br>
                                                            <input name="username" type="text" class="form-control" placeholder="First Name" required autofocus><br>
                                                            <input name="password" type="text" class="form-control" placeholder="Last Name" required autofocus><br>
                                                            <input name="email" type="text" class="form-control" placeholder="Email" required autofocus><br>
                                                            <input name="cellphone" type="text" class="form-control" placeholder="Phone Number" required><br>
                                                            <textarea name="message" type="text" class="form-control" placeholder="Message or Questions" required></textarea><br>
                                                            <i>Communications through our website or via email are not encrypted and are not necessarily secure. Use of the internet or email is for your convenience only, and by using them, you assume the risk of unauthorized use.</i>
                                                            <br><br>
                                                            <button class="btn btn-md btn-primary btn-block" name="send" type="submit">Request Appointment</button>
                                                            <span class="clearfix"></span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button1" class="btn btn-default" data-dismiss="modal">CLose</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!--ABOUT US-->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Artencjen Dental Clinic</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>

            <div class="row">
               <!-- <div class="container">
                    <!--first col-->
               <!--     <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/1.jpg" class="img-responsive img-circle" alt="" data-toggle="collapse" data-target="#demo3">
                            <h2>Dentist Assistant</h2>
                            <div id="demo3" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa
                            </div>
                            <p class="text-muted"><strong>Assistant</strong>
                            </p>
                            
                        </div>
                    </div>
                    <!--second col-->
                <!--    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/2.jpg" class="img-responsive img-circle" alt="" data-toggle="collapse" data-target="#demo1">
                            <h2>Dentist</h2>
                            <div id="demo1" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa
                            </div>
                            <p class="text-muted"><strong>Dra. Jenalyn Hebron</strong>
                            </p>
                            
                        </div>
                    </div>
                    <!--third col-->
                <!--    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="img/team/3.jpg" class="img-responsive img-circle" alt="" data-toggle="collapse" data-target="#demo2">
                            <h2>Dentist Secretary</h2>
                            <div id="demo2" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa
                            </div>
                            <p class="text-muted"><strong>Secretary</strong>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <!--ARTICLE ABOUT ADC BELOW-->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
    </section>



    <!--CONTACT SECTION-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><center>Contact Us</center></h2>
                    <h3 class="section-subheading">Consult to our dental clinic? Just contact us!</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div align="center" class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15464.018499557542!2d121.051351!3d14.311164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46989a666ec06523!2sArtencjen!5e0!3m2!1sen!2sph!4v1507113212479" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div style="color:#fff;font-size:17px;" class="col-lg-6 text-left">
                        <center>
                            <br>
                            <br>
                            <br>
                            <address>
                        <strong><abbr class="material-icons">room</abbr>Artencjen Dental Clinic Orthodontics</strong>
                        <br>1130 J.M Loyola Street Mabuhay<br>Carmona Cavite Philippines 4116
                    </address>
                            <address>
                        <abbr title="Phone">Phone:</abbr> +639 228 723592 or +639 258 782159
                    <br>
                        <abbr title="tel-phone">Tel. No:</abbr>&nbsp;(046) 413 5533
                    <br>
                        <abbr title="Email">E-mail:</abbr><a href="mailto: jenalynhebron17@yahoo.com">&nbsp;jenalynhebron17@yahoo.com</a>
                    <br>
                        <strong><span class="glyphicon glyphicon-time"></span>&nbsp;Opening Hours</strong>
                    <br>
                        <abbr>Monday to Saturday: 9:00AM to 7:00PM</abbr>
                    <br>
                        <abbr>Sunday: Closed</abbr>
                </address>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="line-height:4px;" class="col-lg-12">
                        <!--social sites-->
                        <ul class="list-inline social-buttons">
                            <li>
                                <span><strong>Connect With Us</strong></span>
                            </li>
                            <li>
                                <a target="_self" href="https://www.facebook.com/GCGMgmtCons"><i class="fa fa-facebook" ></i></a>
                            </li>
                            <li>
                                <a target="_self" href="https://www.linkedin.com/company/gcg-management-consulting"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a target="_self" href="https://plus.google.com/114234485461650700432/posts"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>

                    <!-- This facebook plugin is under construction -->
                    <div class="col-lg-12 fb-like" data-share="true" data-width="250" data-show-faces="true"></div>
                    <!-- end plugin -->
                    <div style="line-height:5px;" class="col-lg-12">
                        <!--links-->
                        <ul class="list-inline quicklinks">
                            <li>
                                <a target="_blank" href="#">Privacy Policy</a>
                            </li>
                            &amp;
                            <li>
                                <a target="_blank" href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                    <!--copyright-->
                    <div class="col-lg-12">
                        <span style="line-height:5px;" class="copyright">Copyright &copy; Artencjen Dental Clinic Orthodontics 2017, Philippines</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio services! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Services Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of RoundIcons.com</a>, or you can purchase the 1500 icon set.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
</body>

</html>