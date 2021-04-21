<?php
require_once('config.php');

if(isset($_POST)){
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $mother_name = $_POST['mother_name'];
    $branch = $_POST['branch'];
    $year_passed_out = $_POST['year_passed_out'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $qualification = $_POST['qualification'];
    $university_of_qualification = $_POST['university_of_qualification'];
    $specialisation = $_POST['specialisation'];
    $name_of_company = $_POST['name_of_company'];
    $position = $_POST['position'];
    $placement = $_POST['placement'];
    $appointment_letter = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));;
    $working_span = $_POST['working_span'];
    $package = $_POST['package'];
    $facebook_link = $_POST['facebook_link'];
    $linkedin_link = $_POST['linkedin_link'];
    $twitter_link = $_POST['twitter_link'];
    $contribution = json_encode($_POST['contribution']);
    $password = sha1($_POST['password']);
    $password1 = sha1($_POST['password1']);
    if ($password = $password1) {
    $sql = "INSERT INTO alumni_details (profile_pic,first_name,middle_name,last_name,mother_name,branch,year_passed_out,gender,date_of_birth,address,email,mobile_no,qualification,university_of_qualification,specialisation,name_of_company,position,placement,appointment_letter,working_span,package,facebook_link,linkedin_link,twitter_link,contribution,password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$image,$first_name,$middle_name,$last_name,$mother_name,$branch,$year_passed_out,$gender,$date_of_birth,$address,$email,$mobile_no,$qualification,$university_of_qualification,$specialisation,$name_of_company,$position,$placement,$appointment_letter,$working_span,$package,$facebook_link,$linkedin_link,$twitter_link,$contribution,$password]);
    if($result){
      #echo "sucessfull";
      header("location: Login.php");
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