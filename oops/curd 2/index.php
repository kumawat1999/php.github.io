<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include "Crud.php";
$objs=new Crud();

$qrys="select * from curd_table2 ";
$userdata=$objs->getDataMultiple($qrys);

?>

<div class="container">
  <h2>User's List</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Full Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Password</th>
        <th>TimeStamp</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        
       <?php  
       $srno=1;
       foreach($userdata as $userdatas): ?>

        <tr>
            <td><?= $srno?></td>
            <td><?= $userdatas['name']?></td>
            <td><?= $userdatas['mobile']?></td>
            <td><?= $userdatas['email']?></td>
            <td><?= $userdatas['passsword']?></td>
            <td><?= date("d-m-Y H:i:s",strtotime($userdatas['created_at']))?></td>
            <td>

            <a class="btn btn-primary" href="edit.php?id=<?= $userdatas['id']?>">Edit</a>

            </td>
       </tr>

       <?php $srno++; endforeach; ?>
       

    </tbody>
   
  </table>
</div>

</body>
</html>
