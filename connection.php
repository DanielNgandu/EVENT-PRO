<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu
 * Date: 10/01/2019
 * Time: 08:54
 */


//enabe error reporting
//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

// Localhost connection
 $servername = "localhost"; //replace it with your database server name
 $username = "root";  //replace it with your database username
 $password = "";  //replace it with your database password
 $dbname = "event_management2019";

// Online connection
//$servername = "testdczambia.crwpdwfieesc.eu-west-1.rds.amazonaws.com"; //replace it with your database server name
//$username = "dotcom_lars";  //replace it with your database username
//$password = "f1eRTall1";  //replace it with your database password
//$dbname = "event_management2019";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

}
?>
