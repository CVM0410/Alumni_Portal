<?php
session_start();
if (isset($_SESSION['userlogin'])) {
  header("location: index.php");
}
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
  <h2>Login</h2>
  <form action="jslogin.php" method="post">
    <?php
      echo $_GET['error'];
    ?>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" id="login" name="login">Login</button>
    <div>
      Don't have an account?&nbsp <a href="register.php" class="m1-2">SignUp</a>
    </div>
    <div>
    <a href="register.php" class="m1-2">Forgot password?</a>
    </div>
  </form>
</div>
</body>
</html>
