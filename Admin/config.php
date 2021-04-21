<?php


$db_user = "Neha";
$db_pass = "1235";
$db_name = "alumni";;
$db = new PDO('mysql:host=localhost;dbname=' .$db_name . ';charset-utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>