<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 24/06/2019
 * Time: 11:16
 */
include "connection.php";


$get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id";
$events_result = $conn->query($get_events_sql);
?>


<!DOCTYPE html>
<html lang="en">

<!--
Developer: Daniel Ng`andu
Contact Details: +260975517084

-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>EventPro - Events</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">

    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">

    <link rel="stylesheet" href="assets/css/color-switcher.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">

    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">

    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">

    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />
    <style>

        .page {
            display: none;
        }
        .page-active {
            display: block;
        }
    </style>

</head>
<body>

<div class="header">

    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="index.php"><img src="assets/img/logo.jpg" alt="" style="height: 50px; width:100px;"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">

                        <ul class="nav navbar-nav">
                            <li>
                                <a class="active" href="index.php">
                                    Home <i class="fa fa-home"></i>
                                </a>

                            </li>
                            <li>
                                <a href="about.html">
                                    Events <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="about.html">
                                            Create
                                        </a>
                                    </li>
                                    <li>
                                        <a href="job-page.html">
                                            View/Browse
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">
                                    Help <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="about.html">
                                            How It Works?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="job-page.html">
                                            How To Contact Event Organizer
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right float-right">
                            <li class="left"><a href="create_event.php"><i class="ti-pencil-alt"></i> Post An Event</a></li>
                            <li class="right"><a href="my-account.html"><i class="ti-lock"></i> Login/Register</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="index-og.php">Home</a>
                        <ul>
                            <li><a class="active" href="index.php">Home</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="about.html">Pages</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="job-page.html">Job Page</a></li>
                            <li><a href="job-details.html">Job Details</a></li>
                            <li><a href="resume.html">Resume Page</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="pricing.html">Pricing Tables</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">For Candidates</a>
                        <ul>
                            <li><a href="browse-jobs.html">Browse Jobs</a></li>
                            <li><a href="browse-categories.html">Browse Categories</a></li>
                            <li><a href="add-resume.html">Add Resume</a></li>
                            <li><a href="manage-resumes.html">Manage Resumes</a></li>
                            <li><a href="job-alerts.html">Job Alerts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">For Employers</a>
                        <ul>
                            <li><a href="post-job.html">Add Job</a></li>
                            <li><a href="manage-jobs.html">Manage Jobs</a></li>
                            <li><a href="manage-applications.html">Manage Applications</a></li>
                            <li><a href="browse-resumes.html">Browse Resumes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog.html">Blog - Right Sidebar</a></li>
                            <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                            <li><a href="single-post.html">Blog Single Post</a></li>
                        </ul>
                    </li>
                    <li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                    <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i> Log In</a></li>
                </ul>

            </nav>



            <div class="search-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Find An Event Near You.</h1><br><h2>More Than <strong>12,000</strong> Events Are Waiting For You To Explore!</h2>
                            <div class="content">
                                <form method="" action="#">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="event title / keywords /">
                                                <i class="ti-time"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" placeholder="city / province / zip code">
                                                <i class="ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="search-category-container">
                                                <label class="styled-select">
                                                    <select class="dropdown-product selectpicker">
                                                        <option>All Categories</option>
                                                        <option>Finance</option>
                                                        <option>IT & Engineering</option>
                                                        <option>Education/Training</option>
                                                        <option>Art/Design</option>
                                                        <option>Sale/Markting</option>
                                                        <option>Healthcare</option>
                                                        <option>Science</option>
                                                        <option>Food Services</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="popular-jobs">
                                <b>Popular Keywords: </b>
                                <a href="#">Meet-up</a>
                                <a href="#">Colorfest</a>
                                <a href="#">Weekend</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="find-job section">
        <div class="container">
            <div id = "demo">


            </div>

            <h2 class="section-title">Hot Events</h2>
            <!--->
            <?php
            while($row = $events_result->fetch_assoc()){
                $event_id = $row["event_id"];
                $event_title = $row["title"];
                $event_desc = $row["description"];
                $event_venue = $row["event_venue"];
                $event_type = $row["event_type"];
                $event_organizer = $row["event_organizer"];
                $event_thumbnail = $row["event_image_path"];
                $start_date = date("d-m-Y", strtotime($row["end"]));

                ?>
                <div class="job-list" id="<?php echo $event_id;?>">
                    <div class="thumb">
                        <a href="job-details.html"><img src="<?php echo $event_thumbnail;?>" height="100" width="100" alt=""></a>
                    </div>
                    <div class="job-list-content">
                        <h4><a href="view_event.php?event_id=<?php echo $event_id;?>"><?php echo $event_title;?></a><span class="full-time"><?php echo $start_date;?></span></h4>
                        <p><?php echo $event_desc;?></p>
                        <div class="job-tag">
                            <div class="pull-left">
                                <div class="meta-tag">
                                    <span><a href="browse-categories.html"><i class="ti-notepad"></i><?php echo $event_type;?></a></span>
                                    <span><i class="ti-facebook"></i><?php echo $event_organizer;?></span>
                                    <span><i class="ti-location-pin"></i><?php echo $event_venue;?></span>
                                    <span><i class="ti-time"></i><?php echo $start_date;?></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <!--<div class="icon">-->
                                <!--<i class="ti-heart"></i>-->
                                <!--</div>-->
                                <a href="view_event.php?event_id=<?php echo $event_id;?>" class="btn btn-common btn-rm">View Event</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

</div>
</section>


<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h2>Events</h2>
                        <h1 class="counter">12050</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="desc">
                        <h2>Members</h2>
                        <h1 class="counter">10890</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-write"></i>
                    </div>
                    <div class="desc">
                        <h2>Locations</h2>
                        <h1 class="counter">700</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-heart"></i>
                    </div>
                    <div class="desc">
                        <h2>Tickets Sold</h2>
                        <h1 class="counter">9050</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="infobox section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">
                    <h2>Don't Want To Miss a Thing?</h2>
                    <p>Just go to <a href="#">Google Play</a> to download EventPro App</p>
                </div>
                <a href="#" class="btn btn-border">Google Play</a>
            </div>
        </div>
    </div>
</section>


<footer>

    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title"><img src="assets/img/logo_transparent.png" class="img-responsive" alt="Footer Logo" ></h3>
                        <div class="textwidget">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Links</h3>
                        <ul class="menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Trending Jobs</h3>
                        <ul class="menu">
                            <li><a href="#">Android Developer</a></li>
                            <li><a href="#">Senior Accountant</a></li>
                            <li><a href="#">Frontend Developer</a></li>
                            <li><a href="#">Junior Tester</a></li>
                            <li><a href="#">Project Manager</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Follow Us</h3>
                        <div class="bottom-social-icons social-icon">
                            <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                            <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                            <a class="youtube" href="https://youtube.com/"><i class="ti-youtube"></i></a>
                            <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                        </div>
                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                        <form class="subscribe-box">
                            <input type="text" placeholder="Your email">
                            <input type="submit" class="btn-system" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>All Rights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com/">GrayGrids</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<!--<script type="text/javascript" src="assets/js/color-switcher.js"></script>-->
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/jobboard-demo/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 12:48:17 GMT -->
</html>
