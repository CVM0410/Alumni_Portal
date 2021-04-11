<!DOCTYPE html>
<html>
<head>
	<title>DMCE . Alumni-Student Portal</title>
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
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni-Student</b></p>
	</div>
	<div class="topnav" style="background-color: #000099; display: block; height: 50px; width: 100%">
		<a href="index.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-home" id='1' onclick="active_button1()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="#" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-search" id='2' onclick="active_button2()" style="font-size: 20px; color: #ffffff"></span></button></a>

    <a href="chat.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-comment" id='3' onclick="active_button3()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="notifications.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-bell" id='4' onclick="active_button4()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="menu.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-menu-hamburger" id='5' onclick="active_button5()" style="font-size: 20px; color: #ffffff"></span></button></a>
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

<form class="form-inline" action="/action_page.php" style="padding-right: 20px">
		    <center>
		    	<div style="margin-top: 10px">
		    <input class="form-control mr-sm-4" type="text" placeholder="Search person..." style="width: 75%;">
		    <button class="btn btn-primary" type="submit" style="padding: 0px; border: none;"><img src="resources\button.png" style="width: 40px; height: 40px"></button>
		</div>
		</center>
		<hr>
		</form>

</body>
</html>