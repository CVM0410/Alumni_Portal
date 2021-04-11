<!DOCTYPE html>
<html>
<head>
	<title>DMCE . Alumni Portal Admin</title>
	<link rel="icon" href="resources/dmce_logo.jpeg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
	</style>
</head>
<body>
	<div style="background-color: #000099; display: block; height: 75px; width: 100%; padding-top: 20px; padding-bottom: 20px">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni Admin</b></p>
	</div>

<?php
$connect = mysqli_connect("localhost", "Neha", "1235", "test");  
$query = "SELECT * FROM posts  WHERE approval_status IS NULL ORDER BY time_for_upload ASC";  
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
echo'
<div class="container">
<div class="container" style="border: 1px solid #bfbfbf; margin-top: 70px;">
  <a href="profile.html"><img src="resources\mProfile.png" class="rounded-circle" style="width: 55px; margin-top: 5px;"><b style="margin-right: 10px">Firstname Surname</b></a><a href="#">@Software Engineer, Capgemini</a>
  <p style="float: right; margin-top: 17px">'.date('d M Y',strtotime($row['time_for_upload'])).' At '.date('h.i A',strtotime($row['time_for_upload'])).'</p>
</div>
<div class="container" style="border: 1px solid #bfbfbf; background-color: #000000">
  <center>
  <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style="margin: 5px 5px 5px 5px; height: 500px">
</center>
</div>
<div class="container"><p>'.($row['caption']).'</p></div>
<form method="post" action="action2.php">
<input type="submit" name="action" value="Not Approve" class="btn btn-danger" style="float: right; margin-left: 20px"/>
<input type="submit" name="action" value="Approve" class="btn btn-success" style="float: right;"/>
<input type="hidden" name="id" value='.($row['id']).' />
</form>
</div>
';
}
if (is_null(mysqli_fetch_array($result))){
  echo '<br><br><br><br>
<center><img src="resources/done.png" style="width: 70px; margin-left: 10px" class="rounded-circle"></center>
  <br><center style="margin-top: 25px"><h2>You\'re All Caught Up!!!!</h2></center>';
}
?>
</body>
</html>