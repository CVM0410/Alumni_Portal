<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["submit"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $caption = $_POST["caption"];
      $query = "INSERT INTO posts(image, caption) VALUES ('$file','$caption')";  
      if(mysqli_query($connect, $query))  
      {  
           header("location:index.php");
      }  
 }  
 ?>  
