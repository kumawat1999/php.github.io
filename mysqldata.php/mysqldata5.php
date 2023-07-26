<?php

$mysqliconnect = mysqli_connect('localhost', 'root', '' ,'database1') or die('your database with php connectivity faild....!');

if(!$mysqliconnect)
echo 'your database with php connectivity faild....!';

$mysqliquery ="create table tableak (
    id int not null auto_increment,
    name varchar(100),
    lname varchar(100),
    email varchar(100),
    password varchar(100),
    primary key (id));";

// $mysqliinsert= "insert into tableak (name,lname,email,password)
//  values (
//     'amit kumawat',
//     'kumawat',
//     'amit@gmail.com',
//     '97854646');";

$updatequery =" update tableak set email='rajesh@gmail.com', name='subhsh' ";
    // $firequery = mysqli_query($mysqliconnect,$mysqliquery) or die(mysqli_error($mysqliconnect));
    // $firequery = mysqli_query($mysqliconnect,$mysqliinsert) or die(mysqli_error($mysqliconnect));
    $firequery = mysqli_query($mysqliconnect,$updatequery) or die(mysqli_error($mysqliconnect));
   
    if($firequery){
        echo "ok";
    }
    else{
        echo "error";
    }
?>