<?php

// $connect = mysqli_connect('localhost', 'root', '', 'database1') or die('pleass errar soleve...!');
$connect = mysqli_connect('localhost', 'root', '', 'database1');
if (!$connect)
    echo 'pleass connect databases with php';

?>
<table border="1" cellpadding="0" cellspacing='0' width="90%" >
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>GENDER</th>
            <th>CITY</th>
            <th>PIN CODE</th>
        </tr>
    <tbody>
        <?php
        $query = 'select * from costumer';
        $firequery = mysqli_query($connect, $query) or die(mysqli_error($connect));
        // echo "<pre>";
        // print_r($firequery);

        $risultquery = mysqli_fetch_array($firequery);

        // echo "<pre>";
        // print_r($risultquery); 
        ?>
        <?php
        while ($risultquery = mysqli_fetch_array($firequery)) {
            $risultquery['id'] . ' ' . $risultquery['name'] . ' ' . $risultquery['lname'] . ' ' . $risultquery['email'] . ' ' . $risultquery['gender'] . ' ' . $risultquery['city'] . ' ' . $risultquery['pic code'];
            // echo "<br>";

        ?>
    <tbody>
        <tr>
            <td><?= $risultquery['id'] ?></td>
            <td><?= $risultquery['name'] ?></td>
            <td><?= $risultquery['lname'] ?></td>
            <td><?= $risultquery['email'] ?></td>
            <td><?= $risultquery['gender'] ?></td>
            <td><?= $risultquery['city'] ?></td>
            <td><?= $risultquery['pic code'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</thead>
</table>