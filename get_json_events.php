<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 25/03/2019
 * Time: 10:21
 */


require('connection.php');

$json_events = "";
$sql = "SELECT * FROM `events`";
$result = $conn->query($sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $data[] = $row;
}





echo $json_events = json_encode($data);

?>
