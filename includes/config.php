<?php

$host = "localhost";
$username = "portaluser";
$password = "portal@user";
$database = "paintingportal";

$con = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>