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
	</style>
</head>
<body>
<div style="background: #000046; background: -webkit-linear-gradient(to right, #1CB5E0, #000046); background: linear-gradient(to right, #1CB5E0, #000046); display: block; height: 75px; width: 100%; padding-top: 20px; padding-bottom: 20px">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.png" style="float: left; height: 50px; margin-left: 20px"><b style="font-family: Helvetica, sans-serif;">&nbsp DMCE Alumni Portal</b></p>
	</div>

	<div class="container" style="margin-top: 50px">
  <h2>Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="id" style="font-weight: bold">ID:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required="required" style="background-color: #FFF;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px">
    </div>
    <div class="form-group">
      <label for="pwd" style="font-weight: bold">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required="required" style="background-color: #FFF;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" style="background: #0575E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #021B79, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">Submit</button>
<button type="button" class="btn btn-link" href="/register.php">Register Now</button>
  </form>
</div>
</body>
</html>
