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
  	<div style="background-color: #000099; display: block; height: 50px; width: 100%">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni</b></p>
	</div>
	<div class="topnav" style="background-color: #000099; display: block; height: 50px; width: 100%">
		<a href="#" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-home" id='1' onclick="active_button1()" style="font-size: 20px; color: #ffffff"></span></button></a>

		<a href="search.php" style="text-decoration: none;"><button style="background-color: #2d88ff; display: block; height: 50px; width: 20%; border: none; border-top-right-radius: 15px; border-top-left-radius: 10px; float: left;"><span class="glyphicon glyphicon-search" id='2' onclick="active_button2()" style="font-size: 20px; color: #ffffff"></span></button></a>

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
  <?php
  echo'
  <div class="container">
    <div style="float: left;">
  <a href="profile.html"><img src="data:image/jpeg;base64,'.base64_encode((array_values($_SESSION['userlogin']))['2']).'" class="rounded-circle" style="width: 80px; margin-top: 5px;"></a>
</div>
<div style="float: left; margin-top: 40px">
  <form method="post" action="action.php" enctype="multipart/form-data">
  <input type="text" name="caption" id="caption" placeholder="Write Something Here...." style="border: none; font-size: 20px; margin-left: 30px; padding: 0px 50px 20px 0px; float: left; margin-right: 20px">
  <input type="file" name="image" id="image" style="float: left; margin-right: 20px">
  <input type="hidden" name="alumni_id" value='.(array_values($_SESSION['userlogin']))['1'].' />
  <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary" style="float: left;">Upload</button>
</form>
</div>
</div>
';
?>
<hr>
<?php
$connect = mysqli_connect("localhost", "Neha", "1235", "alumni");  
$query = "SELECT alumni_details.alumni_id, alumni_details.first_name, alumni_details.last_name, alumni_details.position, alumni_details.name_of_company, posts.* FROM alumni_details RIGHT JOIN posts ON alumni_details.alumni_id = posts.alumni_id WHERE posts.approval_status IS True ORDER BY posts.time_of_approval DESC";  
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
echo'
<br>
  <div class="container">
<div class="container" style="border: 1px solid #bfbfbf; margin-top: 70px;">
  <a href="profile.html"><img src="resources\mProfile.png" class="rounded-circle" style="width: 55px; margin-top: 5px;"><b style="margin-right: 10px">'.($row['first_name']).' '.($row['last_name']).'</b></a><a href="#">@'.($row['position']).', '.($row['name_of_company']).'</a>
  <p style="float: right; margin-top: 17px">'.date('d M Y',strtotime($row['time_of_approval'])).' At '.date('h.i A',strtotime($row['time_of_approval'])).'</p>
</div>
<div class="container" style="border: 1px solid #bfbfbf; background-color: #000000">
  <center>
  <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style="margin: 5px 5px 5px 5px; height: 500px">
</center>
</div>
<div class="container">
  <span class="glyphicon glyphicon-education" style="font-size: 30px; margin-right: 10px"></span>
  <span class="glyphicon glyphicon-comment" style="font-size: 30px; margin-right: 10px"></span>
  <span class="glyphicon glyphicon-send" style="font-size: 30px; margin-right: 5px; margin-bottom: 10px"></span>
</div>
<div class="container"><p>'.($row['caption']).'</p></div>
</div>
';
}
?>

<br><br><br><br>
<center><img src="resources/done.png" style="width: 70px; margin-left: 10px" class="rounded-circle"></center>
  <br><center style="margin-top: 25px"><h2>You're All Caught Up!!!!</h2></center>

  </body>
</html>