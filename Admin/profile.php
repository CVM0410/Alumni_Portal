<?php
session_start();
if (!isset($_SESSION['adminlogin'])) {
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
<img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['adminlogin']))['1']).'" class="rounded-circle" style="width: 80px; margin-top: 15px;">
<h3>
First Name: '.(array_values($_SESSION['adminlogin']))['2'].'<br>
Middle Name: '.(array_values($_SESSION['adminlogin']))['3'].'<br>
Last Name: '.(array_values($_SESSION['adminlogin']))['4'].'<br>
Branch: '.(array_values($_SESSION['adminlogin']))['5'].'<br>
Email Id: '.(array_values($_SESSION['adminlogin']))['6'].'<br>
</h3>
';
	?>
</body>
</html>