<  
<?php

$sname= "localhost";
$unmae= "Neha";
$password = "1235";
$db_name = "alumni";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}