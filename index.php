<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 24/06/2019
 * Time: 11:16
 */
 include "connection.php";


    $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id ORDER BY events.event_id DESC";
    $events_result = $conn->query($get_events_sql);


 ?>

<!DOCTYPE html>
<html lang="en">

<!--
Developer: Daniel Ng`andu
Contact Details: +260975517084

-->

<?php include "head.php";?>
<body>

<div class="header">

<section id="intro" class="section-intro">
<div class="logo-menu">
<?php include "nav.php";?>


<div class="search-container">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Find An Event Near You.</h1><br><h2>More Than <strong>12,000</strong> Events Are Waiting For You To Explore!</h2>
<div class="content">
<form method="GET" action="event_search.php">
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="form-group">
<input class="form-control" name="q" type="text" placeholder="event title / keywords /" required="required">
<i class="ti-time"></i>
</div>
</div>
<div class="col-md-4 col-sm-6">
    <div class="search-category-container">
        <label class="styled-select">
            <select class="dropdown-product selectpicker"
                    name='city_select' id="city_select"
                    required="required">
                <option value="">Choose one...</option>
                <?php
                $sql_routes = "SELECT * FROM `cities`";
                if ($result1 = $conn->query($sql_routes)) {

                    while ($row1 = $result1->fetch_assoc()) {
                        $city_name = $row1["city_name"];

                        $city_id = $row1["city_id"];
                        echo "<option name ='$city_id' value='$city_id'>$city_name</option>";
                    }
                }
                ?>
            </select>
        </label>
    </div>

</div>
<div class="col-md-3 col-sm-6">
    <div class="search-category-container">
        <label class="styled-select">
            <select class="dropdown-product selectpicker"
                    name='event_type_select' id="event_type_select"
                    >
                <option value="">Choose one...</option>
                <?php
                $sql_routes = "SELECT * FROM `event_types`";
                if ($result1 = $conn->query($sql_routes)) {

                    while ($row1 = $result1->fetch_assoc()) {
                        $event_type = $row1["event_type"];
                        $event_type_id = $row1["event_type_id"];
                        echo "<option name ='$event_type_id' value='$event_type_id'>$event_type</option>";
                    }
                }
                ?>
            </select>
        </label>
    </div>
</div>
<div class="col-md-1 col-sm-6">
<button name="go" type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
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


<section id="service-main" class="section">

<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="service-item">
<div class="icon-wrapper">
<i class="ti-search">
</i>
</div>
<h2>
    Discover Local Events
</h2>
<p>
    Discover local events around you or share your own event with the world.
    Looking to have a good time or find people that have similar interests to you?
</p>
</div>

</div>
<div class="col-sm-6 col-md-4">

<div class="service-item">
<div class="icon-wrapper">
<i class="ti-world">
</i>
</div>
<h2>
    Check In And Buy Tickets
</h2>
<p>
    Check in and buy tickets to events in your area with our easy to use interface.
    Try it out today!
</p>
    <p>
        Try it out today!
    </p>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div class="service-item">
<div class="icon-wrapper">
<i class="ti-stats-up">
</i>
</div>
<h2>
    Create Events
</h2>
<p>
    Hosting an event? Share your event on our platform with the world. Get started for free and share your event with the world.
</p>
</div>
</div>
</div>
</div>
</section>


<section class="find-job section">
<div class="container">
    <div id = "demo">


    </div>

<h2 class="section-title">Latest Events</h2>
<!--->
    <?php
    while($row = $events_result->fetch_assoc()){
     $event_id = $row["event_id"];
     $event_title = strtolower($row["title"]);
     $event_desc = strtolower($row["description"]);
     $event_venue = $row["event_venue"];
     $event_type = $row["event_type"];
     $event_organizer = $row["event_organizer"];
     $event_cat = $row["event_category"];
     $event_thumbnail = $row["event_image_path"];
     $start_date = date("d F,Y", strtotime($row["end"]));

    ?>
<div class="job-list" id="<?php echo $event_id;?>">
<div class="thumb">
<a href="job-details.html"><img src="<?php echo $event_thumbnail;?>" height="100" width="100" alt=""></a>
</div>
<div class="job-list-content">
<h4><a href="view_event.php?event_id=<?php echo $event_id;?>"><?php echo ucwords($event_title);?></a><span class="full-time"><?php echo $event_cat;?></span></h4>
<p><?php echo ucwords($event_desc);?></p>
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

<a href="view_event.php?id=<?php echo $event_id;?>" class="btn btn-common btn-rm">View Event</a>
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


<?php include "footer.php";?>
</body>

<!--
Developed By: DANIEL NG`ANDU
Contact Me: 0975517084/daniel_ngandu@outlook.com
 -->
</html>