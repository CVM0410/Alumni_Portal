<!DOCTYPE html>
<html>
<head>
  <title>DMCE . Alumni Registration</title>
  <meta charset="utf-8">
  <link rel="icon" href="resources/dmce_logo.jpeg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@700&display=swap');
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
<!--------------------------------------------------------Heading & Navigation Bar-------------------------------------->
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <a class="navbar-brand" href="#" style="font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="width: 40px; height: 40px; margin-left: 20px"> DMCE ALUMNI</a>
  </nav>
  
  <div class="container" style="margin-top: 50px">
  <center><h2>Register Here</h2></center>
  <form action="process.php" method="post" enctype="multipart/form-data">
<!-------------------------------------------------------- Personal Details Section -------------------------------------->
<div class="form-group">
  <h3>Personal Details</h3>
  <div class="form-group">
      <label for="image">Profile Picture:</label>
      <input type="file" style="border: none;" class="form-control" name="image" required="required">
    </div>
    <label>Name:</label><br>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Person</span>
    </div>
    <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" required="required">
    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
    <input type="text" class="form-control" placeholder="Mother Name" name="mother_name" required="required">
  </div>
</div>

<div class="form-group">
      <label for="branch">Branch: </label>
      <select class="form-control" name="branch" required="required">
        <option>Select</option>
        <option>Chemical Engineering</option>
        <option>Civil Engineering</option>
        <option>Computer Engineering</option>
        <option>Electronics Engineering</option>
        <option>Information Technology Engineering</option>
        <option>Mechanical Engineering</option>
      </select>
  </div>

  <div class="form-group">
      <label for="year_passed_out">Year Passed Out: </label>
      <select class="form-control" name="year_passed_out" required="required">
        <option>Select</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
  </div>

<div class="form-group">
  <label for="gender">Gender:</label>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" value="male" name="gender" checked="checked">
      <label class="custom-control-label" for="male">Male</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" value="female" name="gender">
      <label class="custom-control-label" for="female">Female</label>
    </div>
</div>

<div class="form-group">
      <label for="date_of_birth">Date Of Birth:</label>
      <input type="Date" class="form-control" placeholder="YYYY-MM-DD" name="date_of_birth" required="required">
    </div>

  <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" placeholder="Enter Address" name="address" required="required">
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
      <input type="email" class="form-control" placeholder="Enter email" name="email" required="required">
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
    <input type="tel" class="form-control" name="mobile_no" placeholder="Mobile Number" pattern="[0-9]{10}" required="required">
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
      <select class="form-control" name="qualification">
        <option>Select</option>
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
    <input type="text" class="form-control" name="university_of_qualification" placeholder="Name Of University">
  </div></td>
  </tr>
</table>


<!-------------------------------------------------------- Speciaisations -------------------------------------->
    <h3>Specialisation Details</h3>
    <table style="width: 100%; margin-bottom: 20px">
    <tr>
    <th>Specialisations</th>
  </tr>
  <tr>
    <td><div class="form-group">
      <label for="specialisation">Specialisations:</label>
      <select class="form-control" name="specialisation">
        <option>Select</option>
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
    <input type="text" class="form-control" name="name_of_company" placeholder="Name Of Company">
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="position">Position:</label>
    <input type="text" class="form-control" name="position" placeholder="Position">
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="placement">Placement:</label>
      <select class="form-control" name="placement">
        <option>Select</option>
        <option>On Campus</option>
        <option>Off Campus</option>
    </select>
</div>
    </td>
    <td>
      <div class="form-group">
      <label for="appointment_letter">Appointment Letter:</label>
      <input type="file" style="border: none;" class="form-control" name="appointment_letter">
    </div>
    </td>
    <td>
      <div class="form-group">
      <label for="working_span">Span Of Working In Company:</label>
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">In years:</span>
    </div>
    <input type="text" class="form-control" name="working_span">
  </div>
  </div>
    </td>
    <td>
      <div class="form-group">
      <label for="working_span">Package:</label>
      <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">In INR (L.P.A.):</span>
    </div>
    <input type="text" class="form-control" name="package">
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
    <input type="link" class="form-control" name="facebook_link" placeholder="Paste Your Facebook Profile Link Here">
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
    <input type="link" class="form-control" name="linkedin_link" placeholder="Paste Your LinkedIn Profile Link Here">
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
    <input type="link" class="form-control" name="twitter_link" placeholder="Paste Your Twiter Profile Link Here">
  </div>
    </td>
  </tr>
</table>

<hr>

<div class="form-group">
      <h3>Contribution</h3>
      <label for="contribution">How will you contribute to the college:</label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Courses">By Providing Courses</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Internships">By Providing Internships</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Recruitments">By Providing Recruitments</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Funds">By Providing Funds</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Membership">By Providing Membership</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Sponsorships In Events">By Providing Sponsorships In Events</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Providing Guidence Lectures">By Providing Guidence Lectures</label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="contribution[]" value="By Regular Attendance In Alumni Meetings And Giving Suggesions">By Regular Attendance In Alumni Meetings And Giving Suggesions</label><br>
    </div>

<hr>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
    </div>

    <div class="form-group">
      <label for="password1">Confirm Password:</label>
      <input type="password" class="form-control" id="password1" placeholder="Confirm password" name="password1" required="required">
    </div>

    
    <button type="submit" id="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>