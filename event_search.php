<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 04/07/2019
 * Time: 15:56
 */
require('connection.php');
$status = "fail";
//check if GET variable set
if (isset($_GET["go"])) {
    $q = $_GET["q"];

    if(isset($_GET["city_select"])){
        $city_id = $_GET["city_select"];

        $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id INNER JOIN cities ON cities.city_id = event_venues.event_venue_id  WHERE `events`.`title` LIKE '$q' OR `events`.description LIKE '$q' AND `events`.end LIKE '$q' OR event_venues.city_id ='$city_id'";
    }elseif($_GET["event_type_select"]){
        $event_type_id = $_GET["event_type_select"];
        $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id INNER JOIN cities ON cities.city_id = event_venues.event_venue_id  WHERE `events`.`title` LIKE '$q' OR `events`.description LIKE '$q' OR `events`.end LIKE '$q' OR event_types.event_type_id = '$event_type_id'";

    }elseif($_GET["q"]){

        $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id INNER JOIN cities ON cities.city_id = event_venues.event_venue_id  WHERE `events`.`title` LIKE '$q' OR `events`.description LIKE '$q'";
    }else{
            $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id INNER JOIN cities ON cities.city_id = event_venues.event_venue_id";
    }


//    $get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id INNER JOIN cities ON cities.city_id = event_venues.event_venue_id  WHERE `events`.`title` LIKE '$q' OR `events`.description LIKE '$q' OR `events`.end LIKE '$q' OR event_venues.city_id ='$city_id' OR event_types.event_type_id = '$event_type_id'";


    $events_result = $conn->query($get_events_sql);
//echo "It Works!!";
} else {
    header("location:index.php?status=" . $status);
}

?>


<!DOCTYPE html>
<html lang="en">

<!--
Developer: Daniel Ng`andu
Contact Details: +260975517084

-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Search Results | EventPro</title>
     <!--Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Hearder Imports-->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">


    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>


</head>
<?php //include "head.php";?>
<body>

<div class="header">

</div>
<section class="find-job section">
    <div class="container">
        <div id="demo">


        </div>
        <br><br>
        <a href="index.php"> <button style="width: 100px;" class="btn btn-danger btn-sm" value=""><i class="ti-arrow-left"></i></button><span class="text-uppercase"></span></a>
        <br>
        <hr>
        <h2 class="section-title">All Events</h2>

        <!-- DataTables Example -->

        <div class="table-responsive">
            <table id="example" class="table table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Venue</th>
                    <th>Organizer</th>
                    <th>Start</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = $events_result->fetch_assoc()) {
                    $event_id = $row["event_id"];
                    $event_title = strtolower($row["title"]);
                    $event_desc = strtolower($row["description"]);
                    $event_venue = $row["event_venue"];
                    $event_type = $row["event_type"];
                    $event_organizer = $row["event_organizer"];
                    $event_cat = $row["event_category"];
                    $event_thumbnail = $row["event_image_path"];
                    $start_date = date("d F,Y", strtotime($row["end"])); ?>

                        <tr>
                            <a href="view_event.php?id=<?php echo $event_id;?>">
                            <td style="width: 2%;"><?php echo $event_id; ?></td></a>
                            <td style="width: 200px;"><img style="width: 200px;height:150px;"
                                                           src="<?php echo $event_thumbnail; ?>"></td>
                            <td style="width: 100px;"><?php echo ucwords($event_title); ?></td>
                            <td><?php echo ucwords($event_desc); ?></td>
                            <td><?php echo $event_venue; ?></td>
                            <td><?php echo $event_organizer; ?></td>
                            <td><?php echo $start_date; ?></td>
                            <td><a href="view_event.php?id=<?php echo $event_id;?>">
                                    <button class="btn btn-danger btn-sm">View</button>
                                </a></td>

                    </tr>
                    <?php
                }
                ?>

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Venue</th>
                    <th>Organizer</th>
                    <th>Start</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#example').DataTable();
                });
            </script>
        </div>
    </div>
</section>
<br><hr>
<footer>
        <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>All Rights reserved &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> -<a rel="nofollow" href="http://www.dczambia.com/">DotCom Zambia</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

</body>
</html>


