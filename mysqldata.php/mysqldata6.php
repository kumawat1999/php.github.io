<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>

    <?php
    $mysqliconnect = mysqli_connect('localhost', 'root', '', 'database1') or die('your database with php connectivity faild....!');

    if (!$mysqliconnect)
        echo 'your database with php connectivity faild....!';

    // $updatequery = "create table datainsert (id int not null auto_increment,
    // name varchar(100),
    // lname varchar(100),
    // email varchar(100),
    // password varchar(100),
    // gender varchar(100),
    // city varchar(100),
    // fulladdress varchar(100),
    // date varchar(100),
    // primary key(id));";


    if (isset($_POST['submit'])) {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $city = $_REQUEST['city'];
        $fulladdress = $_REQUEST['fulladdress'];
        $date = $_REQUEST['date'];
    };

    $mysqlinsert= "insert into datainsert (`id`,`name`,`lname`,`email`,`password`,`gender`,`city`,`fulladdress`,`date`)
     values('$id','$name', '$lname' , '$email' ,'$password' ,'$gender' ,'$city' ,'$fulladdress' ,'$date');";

    // $firequery = mysqli_query($mysqliconnect,$updatequery) or die(mysqli_error($mysqliconnect));
    $firequery = mysqli_query($mysqliconnect,$mysqlinsert) or die(mysqli_error($mysqliconnect));

    if ($firequery) {
        echo "ok";
    } else {
        echo "error";
    };
    ?>
