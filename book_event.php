<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 05/07/2019
 * Time: 15:35
 */

$status = "fail";

if(isset($_GET["id"])){

}else{
    header("location:index.php?status=".$status);
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.graygrids.com/themes/jobboard-demo/add-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 12:49:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

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

    <link rel="stylesheet" href="assets/extras/summernote.css" type="text/css">

    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">

    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />
</head>
<body>

<div class="header">
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
                    <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">

                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">
                                Home <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="index.html">
                                        Home 1
                                    </a>
                                </li>
                                <li>
                                    <a href="index-02.html">
                                        Home 2
                                    </a>
                                </li>
                                <li>
                                    <a href="index-03.html">
                                        Home 3
                                    </a>
                                </li>
                                <li>
                                    <a href="index-04.html">
                                        Home 4
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">
                                Pages <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="about.html">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="job-page.html">
                                        Job Page
                                    </a>
                                </li>
                                <li>
                                    <a href="job-details.html">
                                        Job Details
                                    </a>
                                </li>
                                <li>
                                    <a href="resume.html">
                                        Resume Page
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html">
                                        Pricing Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="active" href="#">
                                Candidates <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="browse-jobs.html">
                                        Browse Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="browse-categories.html">
                                        Browse Categories
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="add-resume.html">
                                        Add Resume
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-resumes.html">
                                        Manage Resumes
                                    </a>
                                </li>
                                <li>
                                    <a href="job-alerts.html">
                                        Job Alerts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Employers <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="post-job.html">
                                        Add Job
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-job-page.html">
                                        Manage Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="manage-applications.html">
                                        Manage Applications
                                    </a>
                                </li>
                                <li>
                                    <a href="browse-resumes.html">
                                        Browse Resumes
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">
                                Blog <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="blog.html">
                                        Blog - Right Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html">
                                        Blog - Left Sidebar
                                    </a>
                                </li>
                                <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                                <li>
                                    <a href="single-post.html">
                                        Blog Single Post
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right float-right">
                        <li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                        <li class="right"><a href="my-account.html"><i class="ti-lock"></i> Log In</a></li>
                    </ul>
                </div>
            </div>

            <ul class="wpb-mobile-menu">
                <li>
                    <a href="index.html">Home</a>
                    <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index-02.html">Home 2</a></li>
                        <li><a href="index-03.html">Home 3</a></li>
                        <li><a href="index-04.html">Home 4</a></li>
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
                    <a class="active" href="#">For Candidates</a>
                    <ul>
                        <li><a href="browse-jobs.html">Browse Jobs</a></li>
                        <li><a href="browse-categories.html">Browse Categories</a></li>
                        <li><a class="active" href="add-resume.html">Add Resume</a></li>
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

        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">

            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="ti-close"></i>
            </div>
            <h3 class="title-menu">All Pages</h3>
            <ul class="nav navmenu-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="index-02.html">Home Page 2</a></li>
                <li><a href="index-03.html">Home Page 3</a></li>
                <li><a href="index-04.html">Home Page 4</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="job-page.html">Job Page</a></li>
                <li><a href="job-details.html">Job Details</a></li>
                <li><a href="resume.html">Resume Page</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="pricing.html">Pricing Tables</a></li>
                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                <li><a href="browse-categories.html">Browse Categories</a></li>
                <li><a href="add-resume.html">Add Resume</a></li>
                <li><a href="manage-resumes.html">Manage Resumes</a></li>
                <li><a href="job-alerts.html">Job Alerts</a></li>
                <li><a href="post-job.html">Add Job</a></li>
                <li><a href="manage-job-page.html">Manage Jobs</a></li>
                <li><a href="manage-applications.html">Manage Applications</a></li>
                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="my-account.html">Login</a></li>
            </ul>
        </div>
        <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="ti-files"></i> All Pages</p>
        </div>
    </div>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Create Resume</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Resumes</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2">
                    <div class="page-ads box">
                        <div class="post-header">
                            <p>Already have an account? <a href="my-account.html">Click here to login</a></p>
                        </div>
                        <form class="form-ad">
                            <div class="divider"><h3>Basic information</h3></div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea"></label>
                                <label class="control-label" for="textarea">Email</label>
                                <input type="text" class="form-control" placeholder="Your@domain.com">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Profession Title</label>
                                <input type="text" class="form-control" placeholder="Headline (e.g. Front-end developer)">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Location</label>
                                <input type="text" class="form-control" placeholder="Location, e.g">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Web</label>
                                <input type="text" class="form-control" placeholder="Website address">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Pre Hour</label>
                                <input type="text" class="form-control" placeholder="Salary, e.g. 85">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Age</label>
                                <input type="text" class="form-control" placeholder="Years old">
                            </div>
                            <div class="form-group">
                                <div class="button-group">
                                    <div class="action-buttons">
                                        <div class="upload-button">
                                            <button class="btn btn-common">Choose a cover image</button>
                                            <input id="cover_img_file" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"><h3>Education</h3></div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Degree</label>
                                <input type="text" class="form-control" placeholder="Degree, e.g. Bachelor">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Field of Study</label>
                                <input type="text" class="form-control" placeholder="Major, e.g Computer Science">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">School</label>
                                <input type="text" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">From</label>
                                        <input type="text" class="form-control" placeholder="e.g 2014">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">To</label>
                                        <input type="text" class="form-control" placeholder="e.g 2018">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Description</label>
                                <textarea class="form-control" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="button-group">
                                    <div class="action-buttons">
                                        <div class="upload-button">
                                            <button class="btn btn-common">Choose a cover Logo</button>
                                            <input id="cover_img_file" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-post-btn">
                                <div class="pull-left">
                                    <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Education</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                                </div>
                            </div>
                            <div class="divider"><h3>Work Experience</h3></div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Company Name</label>
                                <input type="text" class="form-control" placeholder="Company name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Title</label>
                                <input type="text" class="form-control" placeholder="e.g UI/UX Researcher">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">Date Form</label>
                                        <input type="text" class="form-control" placeholder="e.g 2014">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">Date To</label>
                                        <input type="text" class="form-control" placeholder="e.g 2018">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="textarea">Description</label>
                            </div>
                            <section id="editor" style="margin-bottom: 30px;">
                                <div id="summernote"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?</p></div>
                            </section>
                            <div class="form-group">
                                <div class="button-group">
                                    <div class="action-buttons">
                                        <div class="upload-button">
                                            <button class="btn btn-common">Choose a cover Logo</button>
                                            <input id="cover_img_file" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-post-btn">
                                <div class="pull-left">
                                    <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Experience</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                                </div>
                            </div>
                            <div class="divider"><h3>Skills</h3></div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">Skill Name</label>
                                        <input class="form-control" placeholder="Skill name, e.g. HTML" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="textarea">% (1-100)</label>
                                        <input class="form-control" placeholder="Skill proficiency, e.g. 90" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="add-post-btn">
                                <div class="pull-left">
                                    <a href="#" class="btn-added"><i class="ti-plus"></i> Add New Skills</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn-delete"><i class="ti-trash"></i> Delete This</a>
                                </div>
                            </div>
                        </form>
                        <a href="resume.html" class="btn btn-common">Save</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>

</body>

<!-- Mirrored from demo.graygrids.com/themes/jobboard-demo/add-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2019 12:49:45 GMT -->
</html>



