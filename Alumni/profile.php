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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
	</style>
</head>
<body>
	<?php
echo'
<br>
<h3>Profile Picture: </h3>
<img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['2']).'" class="rounded-circle" style="width: 80px; margin-top: 15px;">
<h3>Alumni ID: '.(array_values($_SESSION['userlogin']))['1'].'<br>
First Name: '.(array_values($_SESSION['userlogin']))['3'].'<br>
Middle Name: '.(array_values($_SESSION['userlogin']))['4'].'<br>
Last Name: '.(array_values($_SESSION['userlogin']))['5'].'<br>
Mother Name: '.(array_values($_SESSION['userlogin']))['6'].'<br>
Branch: '.(array_values($_SESSION['userlogin']))['7'].'<br>
Year Passed Out: '.(array_values($_SESSION['userlogin']))['8'].'<br>
Gender: '.ucfirst((array_values($_SESSION['userlogin']))['9']).'<br>
Date Of Birth: '.date('d/m/Y',strtotime((array_values($_SESSION['userlogin']))['10'])).'<br>
Current Address: '.(array_values($_SESSION['userlogin']))['11'].'<br>
Contact No: '.(array_values($_SESSION['userlogin']))['12'].'<br>
Email Id: '.(array_values($_SESSION['userlogin']))['13'].'<br>
Qualification: '.(array_values($_SESSION['userlogin']))['14'].'<br>
University Of Qualification: '.(array_values($_SESSION['userlogin']))['15'].'<br>
Specialisation: '.(array_values($_SESSION['userlogin']))['16'].'<br>
Name Of Company: '.(array_values($_SESSION['userlogin']))['17'].'<br>
Position: '.(array_values($_SESSION['userlogin']))['18'].'<br>
Placement: '.(array_values($_SESSION['userlogin']))['19'].'<br>
Appointment Letter: <br>
<img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['20']).'" class="rounded-circle" style="width: 80px; margin-top: 15px;"><br>
Span Of Working: '.(array_values($_SESSION['userlogin']))['21'].' Years<br>
Package: '.(array_values($_SESSION['userlogin']))['22'].' L.P.A.<br>
Facebook Profile Link: <a href="">'.(array_values($_SESSION['userlogin']))['23'].'</a><br>
LinekIn Profile Link: <a href="">'.(array_values($_SESSION['userlogin']))['24'].'</a><br>
Twitter Profile Link: <a href="">'.(array_values($_SESSION['userlogin']))['25'].'</a><br>
Your Contribution To College: '.(array_values($_SESSION['userlogin']))['26'].'<br>
';
	?>
</body>
</html>
