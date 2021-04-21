<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["submit"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $caption = $_POST["caption"];
      $approve = $_POST["1"];
      $query = "INSERT INTO posts(image, caption, approval_status) VALUES ('$file','$caption', '$approve')";  
      if(mysqli_query($connect, $query))  
      {  
           header("location:post.php");
      }  
 }  
 ?>  


