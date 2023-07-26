<?php
if (isset($_POST["upload"])){
    $file_name = $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $file_size = $_FILES["file"]["size"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $file_store = "images.php/" .$file_name;

    //  print_r($_FILES);
     if(move_uploaded_file($tmp_name, "images/".$file_name));{
        echo "file got successfully";



        echo "<img src='images/" . $file_name . "'>";
     }
        
    
      if($file_size>6000){
        echo "upload";
        header("location:fileuplod.php");
     }

    echo "sussfully upload";
    if($file_size>9000){
        echo "not sussfully";
        header("$tmp_name:fileuplod.php");
     }
    echo "<img src ='images/". $file_name ."'>";  
    
}

       



?>