<?php
session_start();
require_once('config.php');
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM alumni_details WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);
if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        $_SESSION['userlogin'] = $user;
        if ((array_values($_SESSION['userlogin']))['28'] == '1') {
        header("Location:index.php");
    }
    else{
    	echo "You're Not An Approved User!!";
    }
    }else{
        header('location: login.php?error=No User Found That Combo!!');
    }
}else{
    echo "Error";
}

