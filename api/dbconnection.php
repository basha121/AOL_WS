<?php

$db_host="localhost";
$db_name="db_aol";
$db_user="root";
$db_pwd="";

$con=mysqli_connect($db_host,$db_user,$db_pwd,$db_name);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
