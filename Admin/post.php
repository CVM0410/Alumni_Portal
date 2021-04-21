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
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
</head>
<body>
<div style="background: #000046; background: -webkit-linear-gradient(to right, #1CB5E0, #000046); background: linear-gradient(to right, #1CB5E0, #000046); display: block; height: 75px; width: 100%; padding-top: 20px; padding-bottom: 20px">
		<p style="color: #ffffff; font-size: 30px; font-family: playfair display SC"><img src="resources/dmce_logo.png" style="float: left; height: 50px; margin-left: 20px"><b style="font-family: Helvetica, sans-serif;">&nbsp DMCE Alumni Portal</b></p>
	</div>

	<div class="container" style="margin-top: 50px">
  <h2>Post an Invitation</h2>
  <form method="Post" enctype="multipart/form-data" action="action.php">

    <div class="form-group">
      <label for="image">Image To Post:</label>
      <input type="file" style="border: none;" class="form-control" id="image" name="image" required="required">
    </div>

<table style="width: 100%">
    <tr>
    <th>Images</th>
  </tr>
  <tr>
    <td>dmce_logo.jpeg</td>
  </tr>
</table>

    <div class="form-group">
      <label for="caption">Caption:</label>
      <input type="text" class="form-control" id="caption" placeholder="Enter caption for image" name="image" required="required">
    </div>

    <div>
    <div class="form-group" style="width: 35%; float: left; margin-right: 300px">
      <label for="branch">Share With: </label>
      <select class="form-control" id="branch" name="branch">
        <option>Select</option>
        <option>Only Admin</option>
        <option>Only Students</option>
        <option>Admin & Alumni</option>
        <option>Admin, Alumni & Students</option>
      </select>
    </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="branch">Select Branch: </label>
      <select class="form-control" id="branch" name="branch">
        <option>Select</option>
        <option>All</option>
        <option>Chemical Engineering</option>
        <option>Civil Engineering</option>
        <option>Computer Engineering</option>
        <option>Electronics Engineering</option>
        <option>Information Technology Engineering</option>
        <option>Mechanical Engineering</option>
      </select>
    </div>
</div>

<div>
    <div class="form-group" style="width: 35%; float: left; margin-right: 300px">
      <label for="year_passed_out">Year Passed Out: </label>
      <select class="form-control" id="year_passed_out" name="year_passed_out">
        <option>Select</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
  </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="branch">Select Gender: </label>
      <select class="form-control" id="branch" name="branch">
        <option>Select</option>
        <option>All</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
</div>

<div>
    <div class="form-group form-check" style="width: 35%; float: left; margin-right: 300px">
      <label for="qualification">Qualification wise:</label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="M.E./M.Tech">M.E./M.Tech<br>
        <input class="form-check-input" type="checkbox" name="Ph.D.">Ph.D.<br>
        <input class="form-check-input" type="checkbox" name="MS">MS<br>
        <input class="form-check-input" type="checkbox" name="MBA">MBA<br>
        <input class="form-check-input" type="checkbox" name="PGDM">PGDM<br>
        <input class="form-check-input" type="checkbox" name="PSU">PSU<br>
        <input class="form-check-input" type="checkbox" name="IAS/IPS/IFS">IAS/IPS/IFS<br>
        <input class="form-check-input" type="checkbox" name="Armed Force">Armed Force<br>
        <input class="form-check-input" type="checkbox" name="Merchant Navy">Merchant Navy<br>
        <input class="form-check-input" type="checkbox" name="Teaching">Teaching<br>
      </label>
    </div>

    <div class="form-group" style="width: 35%; float: left;">
      <label for="qualification">Specialisation wise:</label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="Artificial Intelligence(AI)">Artificial Intelligence(AI)<br>
        <input class="form-check-input" type="checkbox" name="Machine Learning(ML)">Machine Learning(ML)<br>
        <input class="form-check-input" type="checkbox" name="Data Science">Data Science<br>
        <input class="form-check-input" type="checkbox" name="Data Analysis">Data Analysis<br>
        <input class="form-check-input" type="checkbox" name="Computer Theory">Computer Theory<br>
        <input class="form-check-input" type="checkbox" name="Software Enggineering">Software Enggineering<br>
        <input class="form-check-input" type="checkbox" name="Hardware Enggineering">Hardware Enggineering<br>
        <input class="form-check-input" type="checkbox" name="Programming">Programming<br>
        <input class="form-check-input" type="checkbox" name="Computer Graphics Designing">Computer Graphics Designing<br>
        <input class="form-check-input" type="checkbox" name="Game Designing">Game Designing<br>
        <input class="form-check-input" type="checkbox" name="UX Designing">UX Designing<br>
        <input class="form-check-input" type="checkbox" name="System Administration">System Administration<br>
        <input class="form-check-input" type="checkbox" name="Network Administration">Network Administration<br>
        <input class="form-check-input" type="checkbox" name="Human Computer Interaction(HCI)">Human Computer Interaction(HCI)<br>
        <input class="form-check-input" type="checkbox" name="Cybersecurity">Cybersecurity<br>
        <input class="form-check-input" type="checkbox" name="Cloud Computing">Cloud Computing<br>
        <input class="form-check-input" type="checkbox" name="Information Systems">Information Systems<br>
        <input class="form-check-input" type="checkbox" name="Information Security">Information Security<br>
        <input class="form-check-input" type="checkbox" name="Digital/Interactive Media">Digital/Interactive Media<br>

      </label>
    </div>
</div>

<div class="form-group">
      <label for="post_through">Post Through:</label><br>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="Alumni Website Post">Alumni Website Post<br>
        <input class="form-check-input" type="checkbox" name="Email">Email<br>
        <h6 style="margin-left: 10px; margin-top: 5px">If Other Please Specify Full Name:</h6>
            <input type="text" style="width: 100%; margin-left: 20px" class="form-control" id="name" placeholder="Enter Full Name" name="name">
</label>
</div>

<button type="submit" class="btn btn-primary" style="background: #0575E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #021B79, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">Upload</button>
</div>
</form>
</body>
</html>