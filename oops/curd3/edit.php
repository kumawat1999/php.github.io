<?php
include "Curd.php";
$id = $_REQUEST['id'];
echo $id;
$objs = new Curd();
$qrys = "select * from curd_table3 where id=$id ";
$single_update_data = $objs->getDataSingle($qrys);

// echo $single_update_data['email'];
// $name = $single_update_data->name;
// $email = $single_update_data->email;
// $number = $single_update_data->mobile;
// $password = $single_update_data->passsword;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CURD 3 </title>
</head>

<body>
    <form>
        <div class="form-group">
            <label for="">NAME:</label>
            <input type="text" class="form-control" name="" id="" value="<?= $name ?>">
            <small id="emailHelpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">EMAIL:</label>
            <input type="email" class="form-control" name="" id="" value="<?= $email ?>">
            <small id="emailHelpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">MOBILE:</label>
            <input type="text" class="form-control" name="" id="" value="<?= $number ?>">
            <small id="emailHelpId" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">PASSWORD:</label>
            <input type="text" class="form-control" name="" id="" value="<?= $password ?>">
            <small id="emailHelpId" class="form-text text-muted"></small>
        </div>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block"></button>
    </form>
</body>

</html>