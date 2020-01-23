<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 05/07/2019
 * Time: 09:27
 */
require('connection.php');


$get_events_sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id";
$events_result = $conn->query($get_events_sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Asset Management System - Dashboard</title>
    <!-- Hearder Imports-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>






</head>

<body id="page-top">


<div id="wrapper" class="container">




            <!-- DataTables Example -->

                    <div class="table-responsive">
                        <table id="example" class="table" style="width:100% " >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Organizer</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($row = $events_result->fetch_assoc()) {
                                $event_id = $row["event_id"];
                                $event_title = strtolower($row["title"]);
                                $event_desc = strtolower($row["description"]);
                                $event_venue = $row["event_venue"];
                                $event_type = $row["event_type"];
                                $event_organizer = $row["event_organizer"];
                                $event_cat = $row["event_category"];
                                $event_thumbnail = $row["event_image_path"];
                                $start_date = date("d-m-Y", strtotime($row["end"]));
                                echo "<tr>";
                                echo "<td >".$event_id."</td >";
                                echo "<td ><img height=100 width=100;' src=".$event_thumbnail."></td >";
                                echo "<td >".$event_title."</td >";
                                echo "<td >".$event_desc."</td >";
                                echo "<td >".$event_organizer."</td >";
                                echo "<td >".$start_date."</td >";

                           echo "<tr>";
                                }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Organizer</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>

                            <tbody>

                            </tbody>
                        </table>

                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#example').DataTable();
                            });
                        </script>
                    </div>


            </div>
            <!-- /.container-fluid -->

</body>

</html>

