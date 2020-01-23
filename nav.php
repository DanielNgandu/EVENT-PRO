<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 04/07/2019
 * Time: 16:21
 */?>

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
                            <a href="create_event.php">
                                Create
                            </a>
                        </li>
                        <li>
                            <a href="browse_events.php">
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

