<?php
if ($_POST['action'] && $_POST['id']) {
  if ($_POST['action'] == 'Approve') {
  $id = $_POST['id'];
  date_default_timezone_set("Asia/Kolkata");
  $time = date('Y-m-d H:i:s');
  $connect = mysqli_connect("localhost", "Neha", "1235", "alumni");  
  $qry = "UPDATE posts SET approval_status = '1', time_of_approval = '$time' WHERE id='$id'";
  $res = mysqli_query($connect, $qry);
  header("location:approve.php");
  }
  if ($_POST['action'] == 'Not Approve') {
  $id = $_POST['id'];
  $reason = $_POST['reason'];
  date_default_timezone_set("Asia/Kolkata");
  $time = date('Y-m-d H:i:s');
  $connect = mysqli_connect("localhost", "Neha", "1235", "alumni");  
  $qry = "UPDATE posts SET approval_status = '0', time_of_approval = '$time', reason = '$reason' WHERE id='$id'";
  $res = mysqli_query($connect, $qry);
  header("location:approve.php");
  }
}
?>