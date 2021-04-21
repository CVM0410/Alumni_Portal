<?php
require_once('config.php');

if(isset($_POST)){
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $division = $_POST['division'];
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $password1 = sha1($_POST['password1']);
    if ($password = $password1) {
    $sql = "INSERT INTO student (profile_pic,first_name,middle_name,last_name,branch,year,division,roll_no,email,password) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$image,$first_name,$middle_name,$last_name,$branch,$year,$division,$roll_no,$email,$password]);
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