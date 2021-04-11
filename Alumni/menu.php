<?php
session_start();

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
	<div style="background-color: #000099; display: block; height: 50px; width: 100%">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni</b></p>
	</div>
	<div class="topnav" style="background-color: #000099; display: block; height: 50px; width: 100%">
		<a href="index.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-home" id='1' onclick="active_button1()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="search.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-search" id='2' onclick="active_button2()" style="font-size: 20px; color: #ffffff"></span></button></a>

    <a href="chat.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-comment" id='3' onclick="active_button3()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="notifications.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-bell" id='4' onclick="active_button4()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="#" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-menu-hamburger" id='5' onclick="active_button5()" style="font-size: 20px; color: #ffffff"></span></button></a>
			<script>
function active_button1() {
  document.getElementById("1").style.color="#bfbfbf";
}
function active_button2() {
  document.getElementById("2").style.color="#bfbfbf";
}
function active_button3() {
  document.getElementById("3").style.color="#bfbfbf";
}
function active_button4() {
  document.getElementById("4").style.color="#bfbfbf";
}
function active_button5() {
  document.getElementById("5").style.color="#bfbfbf";
}
</script>
	</div>
<?php
echo'
<div class="container">
	<div class="container" style="width: 10%; float: left;"><img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['2']).'" class="rounded-circle" style="width: 80px; margin-top: 15px;"></a></div>
	<div class="container" style="width: 90%; float: left;"><a href="profile.php"><p style="margin-top: 40px; font-size: 17px"><b>'.(array_values($_SESSION['userlogin']))['3'].' '.(array_values($_SESSION['userlogin']))['5'].'</b><br>@'.(array_values($_SESSION['userlogin']))['17'].', '.(array_values($_SESSION['userlogin']))['18'].'</p></a></div>
</div>';
?>

<hr>
<div class="container">
	<a href=""><b style="font-size: 17px; color: #bfbfbf">Edit Your Profile</b></a>
</div>
<hr>
<div class="container">
	<a href="logout.php"><b style="font-size: 17px; color: #bfbfbf">Logout</b></a>
</div>
<hr>
</body>
</html>