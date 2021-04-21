<?php
require_once('config.php');

if(isset($_POST)){
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $password1 = sha1($_POST['password1']);
    if ($password = $password1) {
    $sql = "INSERT INTO admin (profile_pic,first_name,middle_name,last_name,department,email,password) VALUES(?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$image,$first_name,$middle_name,$last_name,$department,$email,$password]);
    if($result){
      #echo "sucessfull";
      header("location: login.php");
    }else{
      echo "Error";
    }
  }
  else{
    echo "Password Not Matching";
  }
}
  else{
      echo 'No data';
  }

?>