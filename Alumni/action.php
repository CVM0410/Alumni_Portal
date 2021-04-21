<?php  
 $connect = mysqli_connect("localhost", "Neha", "1235", "alumni");  
 if(isset($_POST["submit"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $caption = $_POST["caption"];
      $alumni_id = $_POST["alumni_id"];
      $query = "INSERT INTO posts(image, caption, alumni_id) VALUES ('$file','$caption', '$alumni_id')";  
      if(mysqli_query($connect, $query))  
      {  
           header("location:index.php");
      }  
 }  
 ?>  