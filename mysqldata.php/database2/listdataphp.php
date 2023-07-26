<?php
// how to connect dp with php
// $conn = mysqli_connect('localhost','username','password','database name');
$conn = mysqli_connect('localhost', 'root', '', 'database1') or die('faild databases connectvity ');

if (!$conn)
    echo 'faild databases connectvity';

?>
<table border='1' cellpadding='10' cellspacing='0'>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>lname</th>
            <th>email</th>
            <th>password</th>
            <th>address</th>
            <th>class</th>
        </tr>
    </thead>
    <?php
    $mysqliquery = 'select * from table1';
    $firequery = mysqli_query($conn, $mysqliquery) or die(mysqli_error($conn));

    // echo "<pre>";
    // print_r ($firequery);

    // $resultquery =mysqli_fetch_array($firequery);
    // echo "<pre>";
    // print_r($resultquery);
    ?>
    <?php
    while ($resultquery = mysqli_fetch_array($firequery)) {
    ?>
        <tbody>
            <tr>
                <td><?= $resultquery['id'] ?></td>
                <td><?= $resultquery['name'] ?></td>
                <td><?= $resultquery['lname'] ?></td>
                <td><?= $resultquery['email'] ?></td>
                <td><?= $resultquery['password'] ?></td>
                <td><?= $resultquery['address'] ?></td>
                <td><?= $resultquery['class'] ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>

</table>