<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>DMCE . Alumni Portal</title>
  	<link rel="icon" href="resources/dmce_logo.jpeg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
  </head>

  <body>
  	<div style="background-color: #000099; display: block; height: 50px; width: 100%">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni</b></p>
	</div>
	
  <!--------------------------------------------------------Heading & Navigation Bar-------------------------------------->

  
  <div class="container" style="margin-top: 50px">
  <center><h2>Edit Your Profile</h2></center>
  <?php
  echo'
  <form action="action1.php" method="post" enctype="multipart/form-data">
<!-------------------------------------------------------- DMCE Student ID -------------------------------------->
<div class="form-group">
  <h3>Student ID</h3>
      <input type="text" class="form-control" id="alumni_id" placeholder="DMCE Student ID" name="alumni_id"
      value="'.(array_values($_SESSION['userlogin']))['1'].'" readonly="readonly">
    </div>
    <hr>
<!-------------------------------------------------------- Personal Details Section -------------------------------------->
<div class="form-group">
  <h3>Personal Details</h3>
  <div class="form-group">
      <label for="image">Profile Picture:</label><br>
      <img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['2']).'" class="rounded-circle" style="width: 170px; height: 170px; margin-top: 15px;">
      <input type="file" style="border: none;" class="form-control" id="image" name="image">
    </div>
    <label>Name:</label><br>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Person</span>
    </div>
    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="'.(array_values($_SESSION['userlogin']))['3'].'" required="required">
    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle Name" value="'.(array_values($_SESSION['userlogin']))['4'].'" required="required">
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="'.(array_values($_SESSION['userlogin']))['5'].'" required="required">
    <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Mother Name" value="'.(array_values($_SESSION['userlogin']))['6'].'" required="required">
  </div>
</div>

<div class="form-group">
<label for="Branch">Branch:</label>
      <input type="text" class="form-control" id="branch" placeholder="Branch" name="Branch"
      value="'.(array_values($_SESSION['userlogin']))['7'].'" readonly="readonly">
  </div>

  <div class="form-group">
      <label for="year_passed_out">Year Passed Out: </label>
      <input type="text" class="form-control" id="year_passed_out" placeholder="year_passed_out" name="year_passed_out"
      value="'.(array_values($_SESSION['userlogin']))['8'].'" readonly="readonly">
  </div>

<div class="form-group">
  <label for="gender">Gender:</label>
    <input type="text" class="form-control" id="gender" placeholder="gender" name="gender"
      value="'.ucfirst((array_values($_SESSION['userlogin']))['9']).'" readonly="readonly">
</div>

<div class="form-group">
      <label for="date_of_birth">Date Of Birth:</label>
      <input type="text" class="form-control" id="date_of_birth" placeholder="YYYY-MM-DD" name="date_of_birth" value="'.date('d/m/Y',strtotime((array_values($_SESSION['userlogin']))['10'])).'" readonly="readonly">
    </div>

  <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="'.(array_values($_SESSION['userlogin']))['11'].'">
    </div>
    
<hr>
<!-------------------------------------------------------- Contact Details Section -------------------------------------->
    
<div style="margin-bottom: 20px">
  <h3>Contact Details</h3>
<table style="width: 100%">
    <tr>
    <th>Email Id</th>
  </tr>
  <tr>
    <td><div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="'.(array_values($_SESSION['userlogin']))['13'].'" placeholder="Enter email" name="email">
    </div></td>
  </tr>
</table>
</div>

  <div style="margin-bottom: 20px">
<table style="width: 100%">
    <tr>
    <th>Mobile Number</th>
  </tr>
  <tr>
    <td><div class="form-group">
      <label for="tel">Mobile No:</label>
    <input type="tel" class="form-control" id="mobile_no" name="mobile_no" value="'.(array_values($_SESSION['userlogin']))['12'].'" placeholder="Mobile Number" pattern="[0-9]{10}">
  </div></td>
  </tr>
</table>
</div>
  
  <hr>
<!-------------------------------------------------------- Qualification Details Setion -------------------------------------->
  <h3>Qualification Details</h3>
  

<table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Qualification</th>
    <th>University Of Qualification</th>
  </tr>
  <tr>
    <td><div class="form-group">
      <label for="qualification">Qualifications:</label>
      <select class="form-control" id="qualification" name="qualification">
        <option>'.(array_values($_SESSION['userlogin']))['14'].'</option>
        <option>M.E./M.Tech</option>
        <option>Ph.D.</option>
        <option>MS</option>
        <option>MBA</option>
        <option>PGDM</option>
        <option>PSU</option>
        <option>IAS/IPS/IFS</option>
        <option>Armed Force</option>
        <option>Merchant Navy</option>
        <option>Teaching</option>
      </select>
    
    </div></td>
    <td><div class="form-group">
      <label for="university_of_qualification">University Of Qualification:</label>
    <input type="text" class="form-control" name="university_of_qualification" value="'.(array_values($_SESSION['userlogin']))['15'].'" placeholder="Name Of University">
  </div></td>
  </tr>
</table>
<!-------------------------------------------------------- Speciaisations -------------------------------------->
    <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Specialisations</th>
  </tr>
  <tr>
    <td><div class="form-group">
      <label for="specialisation">Specialisations:</label>
      <select class="form-control" id="specialisation" name="specialisation">
        <option>'.(array_values($_SESSION['userlogin']))['16'].'</option>
        <option>Artificial Intelligence(AI)</option>
        <option>Machine Learning(ML)</option>
        <option>Data Science</option>
        <option>Data Analysis</option>
        <option>Computer Theory</option>
        <option>Software Enggineering</option>
        <option>Hardware Enggineering</option>
        <option>Programming</option>
        <option>Computer Graphics Designing</option>
        <option>Game Designing</option>
        <option>UX Designing</option>
        <option>System Administration</option>
        <option>Network Administration</option>
        <option>Human Computer Interaction(HCI)</option>
        <option>Cybersecurity</option>
        <option>Cloud Computing</option>
        <option>Information Systems</option>
        <option>Information Security</option>
        <option>Digital/Interactive Media</option>
      </select>
      
    </div></td>
  </tr>
</table>


<hr>
<!-------------------------------------------------------- Job Details Section -------------------------------------->
<h3>Job Details</h3>

  <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Name Of Company:</th>
    <th>Position:</th>
    <th>Placement:</th>
    <th>Appointment Letter:</th>
    <th>Working Span:</th>
    <th>Package:</th>
  </tr>
  <tr>
    <td>
      <div class="form-group">
      <label for="company_name">Name Of Company:</label>
    <input type="text" class="form-control" name="company_name" value="'.(array_values($_SESSION['userlogin']))['17'].'" placeholder="Name Of Company">
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="position">Position:</label>
    <input type="text" class="form-control" name="position" value="'.(array_values($_SESSION['userlogin']))['18'].'" placeholder="Position">
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="placement">Placement:</label>
      <select class="form-control" id="placement" name="placement">
        <option>'.(array_values($_SESSION['userlogin']))['19'].'</option>
        <option>On Campus</option>
        <option>Off Campus</option>
    </select>
</div>
    </td>
    <td>
      <div class="form-group">
      <label for="appointment_letter">Appointment Letter:</label>
      <img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['20']).'">
      <input type="file" style="border: none;" class="form-control" id="appointment_letter" name="appointment_letter">
    </div>
    </td>
    <td>
      <div class="form-group">
      <label for="working_span">Span Of Working In Company:</label>
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">In years:</span>
    </div>
    <input type="text" name="working_span" value="'.(array_values($_SESSION['userlogin']))['21'].'" class="form-control">
  </div>
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="working_span">Package:</label>
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">In INR:</span>
    </div>
    <input type="text" name="package" value="'.(array_values($_SESSION['userlogin']))['22'].'" class="form-control">
  </div>
  </div>
    </td>
  </tr>
</table>

<hr>
<!-------------------------------------------------------- Social Media Details Section -------------------------------------->
<h3>Social Media Details:</h3>
  <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Facebook Link:</th>
  </tr>
  
  <tr>
    <td>
      <div class="form-group">
      <label for="facebook_link">Facebook Link:</label>
    <input type="link" class="form-control" name="facebook_link" value="'.(array_values($_SESSION['userlogin']))['23'].'" placeholder="Paste Your Facebook Profile Link Here">
  </div>
    </td>
  </tr>
</table>


  <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>LinkedIn Link:</th>
  </tr>
  
  <tr>
    <td>
      <div class="form-group">
      <label for="linkedin_link">LinkedIn Link:</label>
    <input type="link" class="form-control" name="linkedin_link" value="'.(array_values($_SESSION['userlogin']))['24'].'" placeholder="Paste Your LinkedIn Profile Link Here">
  </div>
    </td>
  </tr>
</table>

  <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Twitter Link:</th>
  </tr>
  <tr>
    <td>
      <div class="form-group">
      <label for="twitter_link">Twitter Link:</label>
    <input type="link" class="form-control" name="twitter_link" value="'.(array_values($_SESSION['userlogin']))['25'].'" placeholder="Paste Your Twiter Profile Link Here">
  </div>
    </td>
  </tr>
</table>
<hr>

<div class="form-group">
      <h3>Contribution</h3>
      <input type="text" class="form-control" id="contribution" name="contribution"
      value='.(array_values($_SESSION['userlogin']))['26'].' readonly="readonly"><br>
      <label for="contribution">How will you contribute to the college:</label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Courses">By Providing Courses</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Internships">By Providing Internships</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Recruitments">By Providing Recruitments</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Funds">By Providing Funds</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Membership">By Providing Membership</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Sponsorships In Events">By Providing Sponsorships In Events</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Providing Guidence Lectures">By Providing Guidence Lectures</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="By Regular Attendance In Alumni Meetings And Giving Suggesions">By Regular Attendance In Alumni Meetings And Giving Suggesions</label><br>
    </div>

<hr>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    
    <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
  ';
  ?>
</div>
  </body>
</html>