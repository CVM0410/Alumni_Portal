<?php
$connect = mysqli_connect("localhost", "Neha", "1235", "alumni");
$query = "SELECT alumni_details.alumni_id, alumni_details.first_name, alumni_details.last_name, alumni_details.position, alumni_details.name_of_company, posts.* FROM alumni_details RIGHT JOIN posts ON alumni_details.alumni_id = posts.alumni_id WHERE posts.approval_status IS NULL ORDER BY posts.time_for_upload ASC";  
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
echo '<p>'.$row['alumni_id'].' '.$row['first_name'].' '.$row['last_name'].' '.$row['position'].' '.$row['name_of_company'].' '.$row['caption'].' '.$row['time_for_upload'].' '.$row['approval_status'].'</p> <br><br><br><br><br><br><br>';
date_default_timezone_set("Asia/Kolkata");
$tim = date('Y-m-d h:i:s');
echo $tim;
}
?>