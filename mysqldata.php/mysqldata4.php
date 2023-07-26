<?php
// $connect = mysqli_connect('localhost','root',' ','database1') or die('connect databases with php....!');
$connect = mysqli_connect('localhost' ,'root' ,'', 'database1');
if(!$connect)
    echo "connect databases with php....!";
?>
<table border='1'cellpadding='0' cellspacing='0' width='90%'>
    <thead>
        <tr>
            <th>ID</th>
            <th>ITEMS.NAME</th>
            <th>AMOUNT</th>
            <th>DATE</th>
            <th>OTHER</th>
        </tr>
    </thead>
<?php
    $query = 'select * from items';
    $fetchdataquery = mysqli_query($connect,$query) or die(mysqli_error($connect));

    // $query_result = mysqli_fetch_array($fetchdataquery);
    // echo "<pre>";
    // print_r ($query_result);
    ?>
    <tbody>
        <?php 
    while ($query_result = mysqli_fetch_array($fetchdataquery)){
        ?>
        <tr>
            <td><?= $query_result['id'] ?></td>
            <td><?= $query_result['items_name'] ?></td>
            <td><?= $query_result['amount'] ?></td>
            <td><?= $query_result['date'] ?></td>
            <td><?= $query_result['other'] ?></td>
        </tr>
    <?php }?>
    </tbody> 
</table>