<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 05/07/2019
 * Time: 09:29
 */


require('connection.php');


$sql = "SELECT * FROM `events` INNER JOIN event_organizers ON events.event_organizer_id = event_organizers.event_organizer_id INNER JOIN event_venues ON event_venues.event_venue_id = events.event_venue_id INNER JOIN event_types ON event_types.event_type_id = events.event_type_id";
$result = $conn->query($sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $data[] = $row;
}


$results = ["sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data ];


echo json_encode($results);


?>