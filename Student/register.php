<!DOCTYPE html>
<html>
<head>
  <title>DMCE . Alumni-Student Portal</title>
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
    <p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.jpeg" style="float: left; height: 45px; margin-left: 20px"><b>DMCE Alumni-Student Portal</b></p>
  </div>

<div class="container" style="margin-top: 50px">
  <center><h3>Student Registration</h3></center>
  <form action="process.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label for="image">Profile Picture:</label>
      <input type="file" style="border: none;" class="form-control" id="image" name="image" required="required">
    </div>
    <label>Name:</label><br>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Person</span>
    </div>
    <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" required="required">
    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
  </div>

<div class="form-group">
      <label for="branch">Branch: </label>
      <select class="form-control" name="branch" required="required">
        <option>Select</option>
        <option>Chemical Engineering</option>
        <option>Civil Engineering</option>
        <option>Computer Engineering</option>
        <option>Electronics Engineering</option>
        <option>Information Technology Engineering</option>
        <option>Mechanical Engineering</option>
      </select>
  </div>

  <div class="form-group">
      <label for="year">Year: </label>
      <select class="form-control" name="year" required="required">
        <option>Select</option>
        <option>First Year</option>
        <option>Second Year</option>
        <option>Third Year</option>
        <option>Fourth Year</option>
      </select>
  </div>

  <div class="form-group">
      <label for="division">Division: </label>
      <select class="form-control" name="division" required="required">
        <option>Select</option>
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
      </select>
  </div>

  <div class="form-group">
  <label>Roll No:</label>
      <input type="text" class="form-control" id="roll_no" placeholder="Roll No" name="roll_no">
    </div>

    <div class="form-group">
  <label>Email:</label>
      <input type="Email" class="form-control" id="Email" placeholder="Email" name="email">
    </div>

    <div class="form-group">
  <label>Password:</label>
      <input type="Password" class="form-control" id="password" placeholder="Password" name="password">
    </div>

    <div class="form-group">
  <label>Confirm Password:</label>
      <input type="Password" class="form-control" id="password1" placeholder="Confirm Password" name="password1">
    </div>

    <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>