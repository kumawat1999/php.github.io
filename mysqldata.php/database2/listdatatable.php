<?php
// how to connect dp with php
// $conn = mysqli_connect('localhost','username','password','database name');
$conn = mysqli_connect('localhost', 'root', '', 'database2') or die('faild databases connectvity ');

// if (!$conn)
//     echo 'faild databases connectvity';

?>
<table border='1' cellpadding='10' cellspacing='0'>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>lname</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>city</th>
        </tr>
    </thead>
    <?php
    $mysqliquery = 'select * from listtable';
    $firequery = mysqli_query($conn,$mysqliquery) or die(mysqli_error($conn));

    // echo "<pre>";
    // print_r ($firequery);

    // $resultquery =mysqli_fetch_array($firequery);
    // echo "<pre>";
    // print_r($resultquery);
    ?>
    <?php
    $puls = 1;
    while ($resultquery = mysqli_fetch_array($firequery)) {
    ?>
        <tbody>
            <tr>
                <td><?= $puls ?></td>
                <td><?= $resultquery['name'] ?></td>
                <td><?= $resultquery['lname'] ?></td>
                <td><?= $resultquery['email'] ?></td>
                <td><?= $resultquery['password'] ?></td>
                <td><?= $resultquery['gender'] ?></td>
                <td><?= $resultquery['city'] ?></td>
            </tr>
        </tbody>
    <?php $puls++;
    }
    ?>

</table>