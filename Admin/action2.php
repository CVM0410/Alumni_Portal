<?php
if ($_POST['action'] && $_POST['id']) {
  if ($_POST['action'] == 'Approve') {
  $id = $_POST['id'];
  $connect = mysqli_connect("localhost", "root", "", "test");  
  $qry = "UPDATE posts SET approval_status = '1' WHERE id='$id'";
  $res = mysqli_query($connect, $qry);
  header("location:approve.php");
  }
  if ($_POST['action'] == 'Not Approve') {
  $id = $_POST['id'];
  $connect = mysqli_connect("localhost", "root", "", "test");  
  $qry = "UPDATE posts SET approval_status = '0' WHERE id='$id'";
  $res = mysqli_query($connect, $qry);
  header("location:approve.php");
  }
}
?>
