<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 24/06/2019
 * Time: 10:44
 */


require('connection.php');
$status = "fail";
$id ="";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id WHERE events.event_id=".$id;
    $events_result = $conn->query($get_events_sql);
//echo "It Works!!";
} else {
    header("location:index.php?status=".$status);
}
?>
<!DOCTYPE html>
<html lang="en">

<!--
   Developed By: Daniel Ng`andu
   Contact: 0975517084 / daniel_ngandu@outlook.com

 -->
<?php include "head.php";?>
<body>

<div class="header">
    <div class="logo-menu">
<?php include "nav.php";?>

    </div>


    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">View Event Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Event</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="right-sideabr">
                        <div class="inner-box">
                            <h4>Manage Account</h4>
                            <ul class="lest item">
                                <li><a class="active" href="resume.html">My Resume</a></li>
                                <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                                <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                            </ul>
                            <h4>Manage Job</h4>
                            <ul class="lest item">
                                <li><a href="manage-applications.html">Manage Applications</a></li>
                                <li><a href="job-alerts.html">Job Alerts</a></li>
                            </ul>
                            <ul class="lest">
                                <li><a href="change-password.html">Change Password</a></li>
                                <li><a href="index-og.php">Sing Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php
                while($row = $events_result->fetch_assoc()) {
                    $event_id = $row["event_id"];
                    $event_title = strtolower($row["title"]);
                    $event_desc = strtolower($row["description"]);
                    $event_venue = $row["event_venue"];
                    $event_type = $row["event_type"];
                    $event_organizer = $row["event_organizer"];
                    $event_cat = $row["event_category"];
                    $venue_contact = $row["event_venue_contact"];
                    $event_thumbnail = $row["event_image_path"];
                    $start_date = date("d F,Y", strtotime($row["end"]));
                }
                ?>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="inner-box my-resume">
                        <div class="author-resume">
                            <div class="thumb">
                                <img src="<?php echo $event_thumbnail;?>" height="100" width="100" alt="">
                            </div>
                            <div class="author-info">
                                <h3><?php echo ucwords($event_title);?></h3>
                                <p class="sub-title"><?php echo $event_cat;?></p>
                                <p><span class="address"><i class="ti-location-pin"></i><?php echo $event_venue;?>, <?php echo $event_organizer;?>. </span> </p><p><span><i class="ti-phone"></i><?php echo $venue_contact;?></span></p>
                                <div class="social-link">
                                    <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                                    <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                                    <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google"></i></a>
                                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="about-me item">
                            <h3>About<i class="ti-pencil"></i></h3>
                            <p><?php echo ucwords($event_desc);?>
                            </p>

                        </div>
                        <br>
                        <div class="pull-right">

                            <a href="book_event.php?id=<?php echo $event_id;?>" class="btn btn-common btn-rm">Book Event</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php";?>
</body>

<!--
   Developed By: Daniel Ng`andu
   Contact: 0975517084 / daniel_ngandu@outlook.com

 -->
</html>
