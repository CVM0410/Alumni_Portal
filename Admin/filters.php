<!DOCTYPE html>
<html>
<head>
	<title>DMCE - Alumni Portal Admin</title>
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
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
</head>
<body>
<div style="background: #000046; background: -webkit-linear-gradient(to right, #1CB5E0, #000046); background: linear-gradient(to right, #1CB5E0, #000046); display: block; height: 75px; width: 100%; padding-top: 20px; padding-bottom: 20px">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.png" style="float: left; height: 50px; margin-left: 20px"><b style="font-family: Helvetica, sans-serif;">&nbsp DMCE Alumni Portal</b></p>
	</div>

	<div class="container" style="margin-top: 50px">
  <h3 style="margin-bottom: 30px">Start Filtering Alumni</h3>
  <form method="post">

    <div>
    <div class="form-group form-check" style="width: 35%; float: left; margin-right: 300px;">
      <label for="contribution"><b>Contribution wise:</b></label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="By Providing Courses" name="contribution[]">By Providing Courses<br>
        <input class="form-check-input" type="checkbox" value="By Providing Internships" name="contribution[]">By Providing Internships<br>
        <input class="form-check-input" type="checkbox" value="By Providing Recruitments" name="contribution[]">By Providing Recruitments<br>
        <input class="form-check-input" type="checkbox" value="By Providing Funds" name="contribution[]">By Providing Funds<br>
        <input class="form-check-input" type="checkbox" value="By Providing Membership" name="contribution[]">By Providing Membership<br>
        <input class="form-check-input" type="checkbox" value="By Providing Sponsorships In Events" name="contribution[]">By Providing Sponsorships In Events<br>
        <input class="form-check-input" type="checkbox" value="By Providing Guidence Lectures" name="contribution[]">By Providing Guidence Lectures<br>
        <input class="form-check-input" type="checkbox" value="By Regular Attendance In Alumni Meetings And Giving Suggesions" name="contribution[]">By Regular Attendance In Alumni Meetings And Giving Suggesions<br>
      </label>
    </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="branch"><b>Branch wise:</b></label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Chemical Engineering" name="branch[]">Chemical Engineering
      </label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Civil Engineering" name="branch[]">Civil Engineering
      </label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Computer Engineering" name="branch[]">Computer Engineering 
      </label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Electronics Engineering" name="branch[]">Electronics Engineering 
      </label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Information Technology Engineering" name="branch[]">Information Technology Engineering 
      </label><br>
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="Mechanical Engineering" name="branch[]">Mechanical Engineering 
      </label><br>
    </div>
</div>

<div class="container">
    <div class="form-group" style="width: 35%; float: left; margin-right: 300px">
      <label for="year_passed_out"><b>Passed Out Year Wise:</b></label><br>
      <label class="form-check-label">
        <div style="width: 17%; float: left; margin-right: 50px">
        <input class="form-check-input" type="checkbox" value="1992" name="year_passed_out[]">1992<br>
        <input class="form-check-input" type="checkbox" value="1993" name="year_passed_out[]">1993<br>
        <input class="form-check-input" type="checkbox" value="1994" name="year_passed_out[]">1994<br>
        <input class="form-check-input" type="checkbox" value="1995" name="year_passed_out[]">1995<br>
        <input class="form-check-input" type="checkbox" value="1996" name="year_passed_out[]">1996<br>
        <input class="form-check-input" type="checkbox" value="1997" name="year_passed_out[]">1997<br>
        <input class="form-check-input" type="checkbox" value="1998" name="year_passed_out[]">1998<br>
        <input class="form-check-input" type="checkbox" value="1999" name="year_passed_out[]">1999<br>
        <input class="form-check-input" type="checkbox" value="2000" name="year_passed_out[]">2000<br>
      </div>
      <div style="width: 17%; float: left;">
        <input class="form-check-input" type="checkbox" value="2001" name="year_passed_out[]">2001<br>
        <input class="form-check-input" type="checkbox" value="2002" name="year_passed_out[]">2002<br>
        <input class="form-check-input" type="checkbox" value="2003" name="year_passed_out[]">2003<br>
        <input class="form-check-input" type="checkbox" value="2004" name="year_passed_out[]">2004<br>
        <input class="form-check-input" type="checkbox" value="2005" name="year_passed_out[]">2005<br>
        <input class="form-check-input" type="checkbox" value="2006" name="year_passed_out[]">2006<br>
        <input class="form-check-input" type="checkbox" value="2007" name="year_passed_out[]">2007<br>
        <input class="form-check-input" type="checkbox" value="2008" name="year_passed_out[]">2008<br>
        <input class="form-check-input" type="checkbox" value="2009" name="year_passed_out[]">2009<br>
        <input class="form-check-input" type="checkbox" value="2010" name="year_passed_out[]">2010<br>
        <input class="form-check-input" type="checkbox" value="2011" name="year_passed_out[]">2011<br>
        <input class="form-check-input" type="checkbox" value="2012" name="year_passed_out[]">2012<br>
        <input class="form-check-input" type="checkbox" value="2013" name="year_passed_out[]">2013<br>
        <input class="form-check-input" type="checkbox" value="2014" name="year_passed_out[]">2014<br>
        <input class="form-check-input" type="checkbox" value="2015" name="year_passed_out[]">2015<br>
        <input class="form-check-input" type="checkbox" value="2016" name="year_passed_out[]">2016<br>
        <input class="form-check-input" type="checkbox" value="2017" name="year_passed_out[]">2017<br>
        <input class="form-check-input" type="checkbox" value="2018" name="year_passed_out[]">2018<br>
        <input class="form-check-input" type="checkbox" value="2019" name="year_passed_out[]">2019<br>
        <input class="form-check-input" type="checkbox" value="2020" name="year_passed_out[]">2020<br>
      </div>
      </label>
  </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="gender"><b>Gender Wise:</b></label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="gender[]" value="male">Male<br>
        <input class="form-check-input" type="checkbox" name="gender[]" value="female">Female<br>
      </label>
    </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="alumni_id"><b>Alumni Id:</b></label><br>
      <input type="text" class="form-control" id="alumni_id" placeholder="Enter Alumni Id" name="alumni_id">
    </div>

</div>

<div>
    <div class="form-group" style="width: 100%; float: left;">
    <button type="submit" class="btn btn-primary" style="background: #0575E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #021B79, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">Filter</button>
    </div>
</div>
  </form>
</div>


<?php
if (isset($_POST['submit'])) {
echo "
    <center>
    <table style='margin: 20px 0px 20px 0px; width: 90%;'>
    <tr>
        <th>ID</th>
        <th>Alumni ID</th>
        <th>Name Of Alumni</th>
        <th>Branch</th>
        <th>Year Passed Out</th>
    </tr>
    ";
    




$connect = mysqli_connect("localhost", "root", "", "alumni");  

$contributions = (isset($_POST['contribution'])) ? $_POST['contribution'] : array(); 
if (count($contributions) > 0) { 
  
    foreach ($contributions as $contribution) {  
      $query = "SELECT * FROM alumni_details WHERE contribution='$contribution'";  
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_array($result)){
        echo "<tr>";

        echo "<td>" . $row['id'] . " </td>";
        echo "<td><a href='#'>" . $row['alumni_id'] . "</a> </td>";
        echo "<td><a href='#'>" . $row['last_name']. "</a> </td>";
        echo "<td>" . $row['branch'] . " </td>";
        echo "<td>" . $row['year_passed_out'] . " </td>";
        echo "</tr>";
        } 
    }
} 

$branches = (isset($_POST['branch'])) ? $_POST['branch'] : array(); 
if (count($branches) > 0) { 
    foreach ($branches as $branch) {  
    $query1 = "SELECT * FROM alumni_details WHERE branch='$branch'";  
      $result1 = mysqli_query($connect, $query1);
      while($row1 = mysqli_fetch_array($result1)){
        echo "<tr>";

        echo "<td>" . $row1['id'] . " </td>";
        echo "<td><a href='#'>" . $row1['alumni_id'] . "</a> </td>";
        echo "<td><a href='#'>" . $row1['last_name']." ".$row1['first_name']." ".$row1['middle_name']. "</a> </td>";
        echo "<td>" . $row1['branch'] . " </td>";
        echo "<td>" . $row1['year_passed_out'] . " </td>";
        echo "</tr>";
        } 
    }
} 

$year_passed_outs = (isset($_POST['year_passed_out'])) ? $_POST['year_passed_out'] : array(); 
if (count($year_passed_outs) > 0) { 
    foreach ($year_passed_outs as $year_passed_out) {  
        $query2 = "SELECT * FROM alumni_details WHERE year_passed_out='$year_passed_out'";  
      $result2 = mysqli_query($connect, $query2);
      while($row2 = mysqli_fetch_array($result2)){
        echo "<tr>";

        echo "<td>" . $row2['id'] . " </td>";
        echo "<td><a href='#'>" . $row2['alumni_id'] . "</a> </td>";
        echo "<td><a href='#'>" . $row2['last_name']." ".$row2['first_name']." ".$row2['middle_name']."</a> </td>";
        echo "<td>" . $row2['branch'] . " </td>";
        echo "<td>" . $row2['year_passed_out'] . " </td>";
        echo "</tr>";
        } 
    }
}

$genders = (isset($_POST['gender'])) ? $_POST['gender'] : array(); 
if (count($genders) > 0) { 
    foreach ($genders as $gender) {  
          
      $query3 = "SELECT * FROM alumni_details WHERE gender='$gender'";  
      $result3 = mysqli_query($connect, $query3);
      while($row3 = mysqli_fetch_array($result3)){
        echo "<tr>";

        echo "<td>" . $row3['id'] . " </td>";
        echo "<td><a href='#'>" . $row3['alumni_id'] . "</a> </td>";
        echo "<td><a href='#'>" . $row3['last_name']." ".$row3['first_name']." ".$row3['middle_name']."</a> </td>";
        echo "<td>" . $row3['branch'] . " </td>";
        echo "<td>" . $row3['year_passed_out'] . " </td>";
        echo "</tr>";
        } 
    }
}



if ($_POST['submit'] && $_POST['alumni_id']) {
  $id = $_POST['alumni_id'];
  $qry = "SELECT * FROM alumni_details WHERE alumni_id='$id'";
  $res = mysqli_query($connect, $qry);
  while($row4 = mysqli_fetch_array($res)){
        echo "<tr>";

        echo "<td>" . $row4['id'] . " </td>";
        echo "<td><a href='#'>" . $row4['alumni_id'] . "</a> </td>";
        echo "<td><a href='#'>" . $row4['last_name']." ".$row4['first_name']." ".$row4['middle_name']."</a> </td>";
        echo "<td>" . $row4['branch'] . " </td>";
        echo "<td>" . $row4['year_passed_out'] . " </td>";
        echo "</tr>";
        }

}
}
    
echo"</table>
</center>";
?>
</body>
</html>
