<?php
session_start();
if (!isset($_SESSION['studentlogin'])) {
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
<img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['studentlogin']))['2']).'" class="rounded-circle" style="width: 80px; margin-top: 15px;">
<h3>
Student ID: '.(array_values($_SESSION['studentlogin']))['1'].'<br>
First Name: '.(array_values($_SESSION['studentlogin']))['3'].'<br>
Middle Name: '.(array_values($_SESSION['studentlogin']))['4'].'<br>
Last Name: '.(array_values($_SESSION['studentlogin']))['5'].'<br>
Branch: '.(array_values($_SESSION['studentlogin']))['6'].'<br>
Year Of Study: '.(array_values($_SESSION['studentlogin']))['7'].'<br>
Division: '.(array_values($_SESSION['studentlogin']))['8'].'<br>
Roll No: '.(array_values($_SESSION['studentlogin']))['9'].'<br>
Email Id: '.(array_values($_SESSION['studentlogin']))['10'].'<br>
</h3>
';
	?>
</body>
</html>