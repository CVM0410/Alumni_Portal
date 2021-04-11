<?php
require_once('config.php');
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
	</style>
</head>
<body>
	<div style="background-color: #000099; display: block; height: 75px; width: 100%; padding-top: 20px; padding-bottom: 20px">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni</b></p>
	</div>

	<div class="container" style="margin-top: 50px">
  <center><h2>Registration</h2></center>
  <form action="register.php" method="post">
 <h6 style="color: #ff0000">Fill up the correct values.</h6>
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="first name" name="firstname" required="required">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="last name" name="lastname" required="required">
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email" required="required">
    </div>
    <div class="form-group">
      <label for="phonenumber">Phone Number:</label>
      <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber" pattern="[0-9]{10}" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
    </div>
    <button type="submit" class="btn btn-primary" name ="create" id="register">Submit</button>
    <a href="login.php">For login Page</a>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
$('#register').click(function(e){
  var valid = this.form.checkValidity();
  if(valid){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var phonenumber = $('#phonenumber').val();
    var password = $('#password').val();
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
        success: function(data){
          Swal.fire({
          'title':'Successful',
          'text':data,
          'type': 'success'
          })
        },
        error: function(data){
          Swal.fire({
          'title':'Error',
          'text':'Error while saving data. ',
          'type': 'error'
          })
        }
    });
  }else{
  }

}); 
});
</script>
</body>
</html>