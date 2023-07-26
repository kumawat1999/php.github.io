


<?php
// mysqli driver 
// how to connct database with php 
// $conn=mysqli_connect('localhost','username','password','databas_name');
// $conn =mysqli_connect('localhost','root',' ','tableconn') or die('error connct batabase');
$conn = mysqli_connect('localhost', 'root', '', 'tableconn');
if (!$conn)
    echo 'error connct batabase';

    $query = 'select * from table1';
    $firequery = mysqli_query($conn, $query) or die(mysqli_error($conn));
   
   echo  "<pre>";
    print_r($firequery);
    echo "</pre>";
    $fetchdataQuery = mysqli_fetch_array($firequery);
    // echo ($firequery);
   echo  "<pre>";
    print_r($fetchdataQuery);
    while ($fetchdataQuery = mysqli_fetch_array($firequery)) {
      echo  $fetchdataQuery['id'] . ' ' . $fetchdataQuery['names'] . ' ' . $fetchdataQuery['password'] . ' ' . $fetchdataQuery['class'] . ' ' . $fetchdataQuery['address'];
    }
    ?>