<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'curd') or die('database not cennected...!');
    if (!$conn)
        echo "database not cennected...!";

$id=isset($_REQUEST['id'])?$_REQUEST['id']: "";
 if ($id==""){
 header ("location:table.php");

 }
 else{
 $delete = "DELETE FROM list WHERE id= $id";

    $chackdelet = mysqli_query($conn, $delete) or die (mysqli_error($conn));
    if ($chackdelet){
    header('location:table.php');

    }
    else{
        die("error in delete..!");
    }
 }
 
 ?>



