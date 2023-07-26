<?php
$connect = mysqli_connect('localhost','root','','database2') or die('pleasee crect database...!');
if(!$connect)
echo 'pleasee crect database...!';

// $databas = "create database database2";

// $createtable = "create table table1 
// (id int not null auto_increment,
// name varchar(100),
// lname varchar(100),
// email varchar(100),
// password varchar(100),
// gender varchar(100),
// city varchar(100),
// primary key(id)
// )";

// $insert = "insert into table1 (id,name,lname,email,password,gender,city)
//  values ('id',
//  'sunita',
//  'kumawat',
//  'sunita@gmail.com',
//  '99999',
//  'female',
//  'jaipur');";

// $update= "update table1 set name='raju', lname='kumawat', email='raju@gamil.com', password='252545', gender='male', city='jaipur' where id='3' "; 
 $delete = "delete from table1 where id='2'";


$firequery = mysqli_query($connect,$delete) or die(mysqli_error($connect));
 
if ($firequery){
    echo "ok";
}
else{
    echo "no";
}
?>