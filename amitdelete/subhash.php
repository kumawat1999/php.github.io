<?php
if(isset($_FILES['image'])){  
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tam = $_FILES['image']['tmp_name'];
    $tam_type= $_FILES['image']['type'];


   $uplodfile= move_uploaded_file($file_name, "new/" . $file_name);
    echo  $uplodfile;
die;
echo "<img src='../img/".$file_name."'>";
die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image"/><br><br>
    <input type="submit">

    </form>