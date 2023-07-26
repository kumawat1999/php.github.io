<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
// mysqli driver 
// how to connct database with php 
// $conn=mysqli_connect('localhost','username','password','databas_name');
// $conn=mysqli_connect('localhost','root',' ','tableconn') or die('error connct batabase');
$conn = mysqli_connect('localhost', 'root', '', 'tableconn');


if (!$conn)
    echo 'error connct batabase';
?>

<table class="table" border="1px" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Password</th>
            <th>Class</th>
            <th>Address</th>
        </tr>
    </thead>
    <?php
    $query = 'select * from tabal';

    $firequery = mysqli_query($conn, $query) or die(mysqli_error($conn));


    ?>
    <!-- <pre>"; -->
<!-- // print_r($firequery); -->
<!-- // echo "</pre>"; -->

    <?php
    // $fetchdataQuery = mysqli_fetch_array($firequery);
    // echo "
    ?>
        <?php
        // print_r($fetchdataQuery);

        ?>
    <?php
    while ($fetchdataQuery = mysqli_fetch_array($firequery)) {
        // $fetchdataQuery['id'] . ' ' . $fetchdataQuery['names'] . ' ' . $fetchdataQuery['password'] . ' ' . $fetchdataQuery['class'] . ' ' . $fetchdataQuery['address'];
    ?>
        <tbody>
            <tr>
                <td><?= $fetchdataQuery['id'] ?></td>
                <td><?= $fetchdataQuery['names'] ?></td>
                <td><?= $fetchdataQuery['E_mail'] ?></td>
                <td><?= $fetchdataQuery['password'] ?></td>
                <td><?= $fetchdataQuery['class'] ?></td>
                <td><?= $fetchdataQuery['address'] ?></td>
            </tr>
        <?php } ?>
        </tbody>

</table>