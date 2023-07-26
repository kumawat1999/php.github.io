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
include "DbConfig.php";
class UserData extends DbConfig{
 
    private $data="";
    public function getData(){

        $this->data=$this->connection->query("select * from curd_table ");
        
        $data_array=[];
        while($dataFetch=$this->data->fetch_assoc()){

            $data_array[]=$dataFetch;

        }

        return $data_array;
    }

}
$objs=new UserData();
$userdata=$objs->getData();
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
      </tr>
    </thead>
    <tbody>
        
       <?php  
       $srno=1;
       foreach($userdata as $userdatas): ?>

        <tr>
            <td><?= $srno?></td>
            <td><?= $userdatas['name']?></td>
            <td><?= $userdatas['email']?></td>
            <td><?= $userdatas['mobile']?></td>
            <td><?= $userdatas['password']?></td>
            <td><?= date("d-m-Y H:i:s",strtotime($userdatas['created']))?></td>
       </tr>

       <?php $srno++; endforeach; ?>
       

    </tbody>
   
  </table>
</div>

</body>
</html>
