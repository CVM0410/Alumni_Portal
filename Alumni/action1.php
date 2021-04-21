<?php
$connect = mysqli_connect("localhost", "Neha", "1235", "alumni");
if(isset($_POST["submit"]))  
 {  
 	  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $first_name = $_POST["first_name"];
      $middle_name = $_POST["middle_name"];
      $last_name = $_POST["last_name"];
      $mother_name = $_POST["mother_name"];
      $address = $_POST["address"];
      $email = $_POST["email"];
      $mobile_no = $_POST["mobile_no"];
      $qualification = $_POST["qualification"];
      $university_of_qualification = $_POST["university_of_qualification"];
      $specialisation = $_POST["specialisation"];
      $name_of_company = $_POST["name_of_company"];
      $position = $_POST["position"];
      $placement = $_POST["placement"];
      $appointment_letter = $_POST["appointment_letter"];
      $working_span = $_POST["working_span"];
      $package = $_POST["package"];
      $facebook_link = $_POST["facebook_link"];
      $linkedin_link = $_POST["linkedin_link"];
      $twitter_link = $_POST["twitter_link"];
      $alumni_id = $_POST["alumni_id"];
      $query = "UPDATE alumni_details SET profile_pic = '$image', first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', mother_name = '$mother_name', address = '$address' WHERE alumni_id='$alumni_id'";  
      if(mysqli_query($connect, $query))  
      {  
           header("location:profile.php");
      }  
 }
?>