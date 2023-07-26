Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 123
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| amitkumawat        |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| rajesh kumawat     |
| structure          |
| test               |
+--------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]> use amitkumawat;
Database changed
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| newtable              |
| rajesh                |
| shyamlal              |
| table23               |
| table8                |
+-----------------------+
5 rows in set (0.001 sec)

MariaDB [amitkumawat]> use newtable;
ERROR 1049 (42000): Unknown database 'newtable'
MariaDB [amitkumawat]> desc newtable;
+-----------+-------------+------+-----+---------+----------------+
| Field     | Type        | Null | Key | Default | Extra          |
+-----------+-------------+------+-----+---------+----------------+
| id        | int(200)    | NO   | PRI | NULL    | auto_increment |
| name      | varchar(30) | YES  |     | NULL    |                |
| last_name | varchar(30) | NO   |     | NULL    |                |
| father    | varchar(30) | NO   |     | NULL    |                |
| mother    | varchar(30) | NO   |     | NULL    |                |
| address   | varchar(30) | YES  |     | NULL    |                |
| mobile    | varchar(10) | YES  |     | NULL    |                |
| email     | varchar(50) | YES  |     | NULL    |                |
+-----------+-------------+------+-----+---------+----------------+
8 rows in set (0.349 sec)

MariaDB [amitkumawat]> insert into newtable values(
    -> 'amit kumawat',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhaixyz@gmail.com'
    -> );
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [amitkumawat]> insert into newtable values(
    -> '2',
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 2
MariaDB [amitkumawat]> insert into newtable values(
    -> 2,
    -> 'amit kumawat',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhaixyz@gmail.com'
    -> );
Query OK, 1 row affected (0.521 sec)

MariaDB [amitkumawat]> select * from newtable;
+----+--------------+-----------+-----------------+-------------+---------+----------+-----------------------+
| id | name         | last_name | father          | mother      | address | mobile   | email                 |
+----+--------------+-----------+-----------------+-------------+---------+----------+-----------------------+
|  2 | amit kumawat | kumawat   | devilal kumawat | supyar devi | lunwa   | 97854646 | amitbhaixyz@gmail.com |
+----+--------------+-----------+-----------------+-------------+---------+----------+-----------------------+
1 row in set (0.002 sec)

MariaDB [amitkumawat]> insert table newtable values(
    -> 2,
    -> 'kailash',
    -> 'kumawat',
    -> 'raju kumawat',
    -> 'mohani devi',
    -> 'lunwa nawa',
    -> '978524569',
    -> 'kailas@gmail.com'
    -> ); 
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table newtable values(
2,
'kailash',
'kumawat',
'raju kumawat',
'mohani devi'...' at line 1
MariaDB [amitkumawat]> insert into newtable values(
    -> 2,
    -> 'kailash',
    -> 'kumawat',
    -> 'raju kumawat',
    -> 'mohani devi',
    -> 'lunwa nawa',
    -> '978524569',
    -> 'kailas@gmail.com'
    -> );
ERROR 1062 (23000): Duplicate entry '2' for key 'PRIMARY'
MariaDB [amitkumawat]> insert into newtable values(
    -> 3,
    -> 'kailash',
    -> 'kumawat',
    -> 'raju kumawat',
    -> 'mohani devi',
    -> 'lunwa nawa',
    -> '978524569',
    -> 'kailas@gmail.com'
    -> );
Query OK, 1 row affected (0.319 sec)

MariaDB [amitkumawat]> select* from newtable;
+----+--------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
| id | name         | last_name | father          | mother      | address    | mobile    | email                 |
+----+--------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
|  2 | amit kumawat | kumawat   | devilal kumawat | supyar devi | lunwa      | 97854646  | amitbhaixyz@gmail.com |
|  3 | kailash      | kumawat   | raju kumawat    | mohani devi | lunwa nawa | 978524569 | kailas@gmail.com      |
+----+--------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> insert into newtable values(
    -> 4,
    -> 'rajesh kumawat',
    -> 'kumawat',
    -> 'ksfhs kumawat',
    -> 'jsdifkj',
    -> 'bhadwa',
    -> '989545454',
    -> 'sdfhajhjj@gmail.com'
    -> );
Query OK, 1 row affected (0.520 sec)

MariaDB [amitkumawat]> select* from newtable;
+----+----------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
| id | name           | last_name | father          | mother      | address    | mobile    | email                 |
+----+----------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
|  2 | amit kumawat   | kumawat   | devilal kumawat | supyar devi | lunwa      | 97854646  | amitbhaixyz@gmail.com |
|  3 | kailash        | kumawat   | raju kumawat    | mohani devi | lunwa nawa | 978524569 | kailas@gmail.com      |
|  4 | rajesh kumawat | kumawat   | ksfhs kumawat   | jsdifkj     | bhadwa     | 989545454 | sdfhajhjj@gmail.com   |
+----+----------------+-----------+-----------------+-------------+------------+-----------+-----------------------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]> truncate table newtable;
Query OK, 0 rows affected (0.748 sec)

MariaDB [amitkumawat]> select * from newtable;
Empty set (0.000 sec)

MariaDB [amitkumawat]> insert into newtable values(
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> desc newtable;
+-----------+-------------+------+-----+---------+----------------+
| Field     | Type        | Null | Key | Default | Extra          |
+-----------+-------------+------+-----+---------+----------------+
| id        | int(200)    | NO   | PRI | NULL    | auto_increment |
| name      | varchar(30) | YES  |     | NULL    |                |
| last_name | varchar(30) | NO   |     | NULL    |                |
| father    | varchar(30) | NO   |     | NULL    |                |
| mother    | varchar(30) | NO   |     | NULL    |                |
| address   | varchar(30) | YES  |     | NULL    |                |
| mobile    | varchar(10) | YES  |     | NULL    |                |
| email     | varchar(50) | YES  |     | NULL    |                |
+-----------+-------------+------+-----+---------+----------------+
8 rows in set (0.283 sec)

MariaDB [amitkumawat]> create into newtable values(
    -> 1,
    -> 'amit',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhai@gmail.com'
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'into newtable values(
1,
'amit',
'kumawat',
'devilal kumawat',
'supyar devi',...' at line 1
MariaDB [amitkumawat]> desc newtable;
+-----------+-------------+------+-----+---------+----------------+
| Field     | Type        | Null | Key | Default | Extra          |
+-----------+-------------+------+-----+---------+----------------+
| id        | int(200)    | NO   | PRI | NULL    | auto_increment |
| name      | varchar(30) | YES  |     | NULL    |                |
| last_name | varchar(30) | NO   |     | NULL    |                |
| father    | varchar(30) | NO   |     | NULL    |                |
| mother    | varchar(30) | NO   |     | NULL    |                |
| address   | varchar(30) | YES  |     | NULL    |                |
| mobile    | varchar(10) | YES  |     | NULL    |                |
| email     | varchar(50) | YES  |     | NULL    |                |
+-----------+-------------+------+-----+---------+----------------+
8 rows in set (0.335 sec)

MariaDB [amitkumawat]> create into newtable values (
    -> 1,
    -> 'amit',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhai@gmail.com'
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'into newtable values (
1,
'amit',
'kumawat',
'devilal kumawat',
'supyar devi'...' at line 1
MariaDB [amitkumawat]> desc newtable;
+-----------+-------------+------+-----+---------+----------------+
| Field     | Type        | Null | Key | Default | Extra          |
+-----------+-------------+------+-----+---------+----------------+
| id        | int(200)    | NO   | PRI | NULL    | auto_increment |
| name      | varchar(30) | YES  |     | NULL    |                |
| last_name | varchar(30) | NO   |     | NULL    |                |
| father    | varchar(30) | NO   |     | NULL    |                |
| mother    | varchar(30) | NO   |     | NULL    |                |
| address   | varchar(30) | YES  |     | NULL    |                |
| mobile    | varchar(10) | YES  |     | NULL    |                |
| email     | varchar(50) | YES  |     | NULL    |                |
+-----------+-------------+------+-----+---------+----------------+
8 rows in set (0.347 sec)

MariaDB [amitkumawat]> insert into newtable values (
    -> 'amit',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhai@gmail.com'
    -> );
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [amitkumawat]> insert into newtable values (
    -> 1,
    -> 'amit',
    -> 'kumawat',
    -> 'devilal kumawat',
    -> 'supyar devi',
    -> 'lunwa',
    -> '97854646',
    -> 'amitbhai@gmail.com'
    -> );
Query OK, 1 row affected (0.335 sec)

MariaDB [amitkumawat]> select* from newtable;
+----+------+-----------+-----------------+-------------+---------+----------+--------------------+
| id | name | last_name | father          | mother      | address | mobile   | email              |
+----+------+-----------+-----------------+-------------+---------+----------+--------------------+
|  1 | amit | kumawat   | devilal kumawat | supyar devi | lunwa   | 97854646 | amitbhai@gmail.com |
+----+------+-----------+-----------------+-------------+---------+----------+--------------------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> update newtable set mother ='supyari devi' where id=1;
Query OK, 1 row affected (0.077 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [amitkumawat]> select* from newtable;
+----+------+-----------+-----------------+--------------+---------+----------+--------------------+
| id | name | last_name | father          | mother       | address | mobile   | email              |
+----+------+-----------+-----------------+--------------+---------+----------+--------------------+
|  1 | amit | kumawat   | devilal kumawat | supyari devi | lunwa   | 97854646 | amitbhai@gmail.com |
+----+------+-----------+-----------------+--------------+---------+----------+--------------------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]>





<!--search database-->


Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin> show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin> show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 22
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| amitkumawat        |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| rajesh kumawat     |
| structure          |
| test               |
+--------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]> use amitkumawat;
Database changed
MariaDB [amitkumawat]> create table table06 (
    -> id int not null auto_increment primary key (id),
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(id),
name varchar (100),
fname varchar (100),
email varchar (100),
password ...' at line 2
MariaDB [amitkumawat]> create table table06 (
    -> id int not null auto_increment,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100)
)' at line 6
MariaDB [amitkumawat]> create table table06 (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 6
MariaDB [amitkumawat]> create table table06(
    -> id int NOT NULL AUTO_INCREMENT,
    ->
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 7
MariaDB [amitkumawat]> create table table06(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id))' at line 6
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| newtable              |
| persons               |
| rajesh                |
| shyamlal              |
| table02               |
| table03               |
| table04               |
| table10               |
| table11               |
| table14               |
| table23               |
| table8                |
+-----------------------+
12 rows in set (0.001 sec)

MariaDB [amitkumawat]> create table table077(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id))' at line 6
MariaDB [amitkumawat]> create table table06(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 6
MariaDB [amitkumawat]> create table table55(
    -> id int not null auto_increment,
    -> name varchar(200),
    -> fname varchar(200),
    -> email varchar(200),
    -> password varchar(200),
    -> primary key ( id )
    -> );
Query OK, 0 rows affected (0.969 sec)

MariaDB [amitkumawat]> desc table55;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(200) | YES  |     | NULL    |                |
| fname    | varchar(200) | YES  |     | NULL    |                |
| email    | varchar(200) | YES  |     | NULL    |                |
| password | varchar(200) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
5 rows in set (0.292 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'amit kumar kumawat',
    -> 'amit@gmail.com',
    -> '12345678945'
    -> );
Query OK, 1 row affected (0.443 sec)

MariaDB [amitkumawat]> select* from table55;
+----+--------------+--------------------+----------------+-------------+
| id | name         | fname              | email          | password    |
+----+--------------+--------------------+----------------+-------------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | 12345678945 |
+----+--------------+--------------------+----------------+-------------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawat',
    -> 'amit@gmail.com',
    -> '123456'
    -> ) , (id,
    -> 'rakesh kumawat',
    -> 'kumawat',
    -> 'rakesh@gmail.com',
    -> '12345sdsdf6'
    -> ) , (id,
    -> 'kailash',
    -> 'kumawat',
    -> 'kumawat@gmail.com',
    -> 'ggggggg'
    -> ) , (id,
    -> 'subhash kumawat',
    -> 'kumawat',
    -> 'subhash@gmail.com',
    -> 'ssssssg'
    -> );
Query OK, 4 rows affected (0.294 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select* form table55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'form table55' at line 1
MariaDB [amitkumawat]> select * from table55;
+----+-----------------+--------------------+-------------------+-------------+
| id | name            | fname              | email             | password    |
+----+-----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat    | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat    | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat  | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash         | kumawat            | kumawat@gmail.com | ggggggg     |
|  5 | subhash kumawat | kumawat            | subhash@gmail.com | ssssssg     |
+----+-----------------+--------------------+-------------------+-------------+
5 rows in set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where name='amit kumawat' or name='kailash' or name='rakesh kumawat' email='amit@gmail.com';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'email='amit@gmail.com'' at line 1
MariaDB [amitkumawat]> insert into table55 values (
    -> 'kailash',
    -> 'kumawat',
    -> 'kumawat@gmail.com',
    -> 'ggggggg'
    -> );
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [amitkumawat]> select * from table55 where name='amit kumawat' or name='kailash' or name='rakesh kumawat' email='amit@gmail.com';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'email='amit@gmail.com'' at line 1
MariaDB [amitkumawat]> update table55 change name fname varchar(200) ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'change name fname varchar(200)' at line 1
MariaDB [amitkumawat]> select id name as fname from tbale55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as fname from tbale55' at line 1
MariaDB [amitkumawat]> update table55 change name ='fname' ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'change name ='fname'' at line 1
MariaDB [amitkumawat]> alter table table55 change name fname varchar(200);
ERROR 1060 (42S21): Duplicate column name 'fname'
MariaDB [amitkumawat]> alter table table55 change name lname varchar(200);
Query OK, 0 rows affected (0.553 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+-----------------+--------------------+-------------------+-------------+
| id | lname           | fname              | email             | password    |
+----+-----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat    | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat    | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat  | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash         | kumawat            | kumawat@gmail.com | ggggggg     |
|  5 | subhash kumawat | kumawat            | subhash@gmail.com | ssssssg     |
+----+-----------------+--------------------+-------------------+-------------+
5 rows in set (0.000 sec)

MariaDB [amitkumawat]> DELETE FROM employees
    -> WHERE employeeID = 3;
ERROR 1146 (42S02): Table 'amitkumawat.employees' doesn't exist
MariaDB [amitkumawat]> delete from table55
    -> where tbale55 id = 5;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = 5' at line 2
MariaDB [amitkumawat]> delete from table55
    -> where tbale55 id = '5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = '5'' at line 2
MariaDB [amitkumawat]> delete from table55
    -> where table55 id = '5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = '5'' at line 2
MariaDB [amitkumawat]> delete from table55 where id='5';
Query OK, 1 row affected (0.420 sec)

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-------------------+-------------+
| id | lname          | fname              | email             | password    |
+----+----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash        | kumawat            | kumawat@gmail.com | ggggggg     |
+----+----------------+--------------------+-------------------+-------------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> alter table table55 drop colum password;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'password' at line 1
MariaDB [amitkumawat]> alter table table55 drop column password;
Query OK, 0 rows affected (0.481 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select* from table55;
+----+----------------+--------------------+-------------------+
| id | lname          | fname              | email             |
+----+----------------+--------------------+-------------------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  |
|  4 | kailash        | kumawat            | kumawat@gmail.com |
+----+----------------+--------------------+-------------------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> alter table table55 add password varchar(100);
Query OK, 0 rows affected (0.547 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-------------------+----------+
| id | lname          | fname              | email             | password |
+----+----------------+--------------------+-------------------+----------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    | NULL     |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    | NULL     |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  | NULL     |
|  4 | kailash        | kumawat            | kumawat@gmail.com | NULL     |
+----+----------------+--------------------+-------------------+----------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND `fname` = 'kumawat' AND `email` = 'amit@gmail.com';
+----+--------------+---------+----------------+----------+
| id | lname        | fname   | email          | password |
+----+--------------+---------+----------------+----------+
|  2 | amit kumawat | kumawat | amit@gmail.com | NULL     |
+----+--------------+---------+----------------+----------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'fname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'fname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' ='rakesh kumawat' or email ='rakessjd@kjg.cokm');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' ='rakesh kumawat' or email ='rakesh@gmail.com');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawatkk',
    -> 'amitkumawat@gmail.com',
    -> 'hhhhh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kuma,
    '> ;
    '>
    '>
    '> );
    '>
    '>
    '> select * from table55;
    '>
    '> );
    '> ');
ERROR 1136 (21S01): Column count doesn't match value count at row 2
MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawatkk',
    -> 'amitkumawat@gmail.com',
    -> 'hhhhh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kuma',
    -> 'amitkumaw@gmail.com',
    -> 'hhghgh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kumawatd',
    -> 'amit kumaw@gmal.com',
    -> 'hghghg'
    -> );
Query OK, 3 rows affected (0.069 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-----------------------+----------+
| id | lname          | fname              | email                 | password |
+----+----------------+--------------------+-----------------------+----------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com        | NULL     |
|  2 | amit kumawat   | kumawat            | amit@gmail.com        | NULL     |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com      | NULL     |
|  4 | kailash        | kumawat            | kumawat@gmail.com     | NULL     |
|  6 | amit kumawat   | kumawatkk          | amitkumawat@gmail.com | hhhhh    |
|  7 | amit kumawat   | kuma               | amitkumaw@gmail.com   | hhghgh   |
|  8 | amit kumawat   | kumawatd           | amit kumaw@gmal.com   | hghghg   |
+----+----------------+--------------------+-----------------------+----------+
7 rows in set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where 'lname'= 'amit kumawat' and ('email'='amitkumawat@gmail.com' or 'password'='hhhhh' or 'email'='amit@gmail.com' or
    -> 'email'= 'amitkumaw@gmail.com');
Empty set (0.001 sec)

MariaDB [amitkumawat]> select * from table55 where 'lname'= 'amit kumawat' and ('email' ='amit@gmail.com' or 'email' ='amit@gmail.com' or 'email' ='amitkumawat@gmail.com');
Empty set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where lname= 'amit kumawat' and (email='amitkumawat@gmail.com' or password ='hhhhh' or email='amit@gmail.com');
+----+--------------+--------------------+-----------------------+----------+
| id | lname        | fname              | email                 | password |
+----+--------------+--------------------+-----------------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com        | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com        | NULL     |
|  6 | amit kumawat | kumawatkk          | amitkumawat@gmail.com | hhhhh    |
+----+--------------+--------------------+-----------------------+----------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]>






Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin> show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin> show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 22
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| amitkumawat        |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| rajesh kumawat     |
| structure          |
| test               |
+--------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]> use amitkumawat;
Database changed
MariaDB [amitkumawat]> create table table06 (
    -> id int not null auto_increment primary key (id),
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(id),
name varchar (100),
fname varchar (100),
email varchar (100),
password ...' at line 2
MariaDB [amitkumawat]> create table table06 (
    -> id int not null auto_increment,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100)
)' at line 6
MariaDB [amitkumawat]> create table table06 (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 6
MariaDB [amitkumawat]> create table table06(
    -> id int NOT NULL AUTO_INCREMENT,
    ->
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 7
MariaDB [amitkumawat]> create table table06(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id))' at line 6
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| newtable              |
| persons               |
| rajesh                |
| shyamlal              |
| table02               |
| table03               |
| table04               |
| table10               |
| table11               |
| table14               |
| table23               |
| table8                |
+-----------------------+
12 rows in set (0.001 sec)

MariaDB [amitkumawat]> create table table077(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id))' at line 6
MariaDB [amitkumawat]> create table table06(
    -> id int AUTO_INCREMENT,
    -> name varchar (100),
    -> fname varchar (100),
    -> email varchar (100),
    -> password vharchar(100),
    -> PRIMARY KEY (id)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(100),
PRIMARY KEY (id)
)' at line 6
MariaDB [amitkumawat]> create table table55(
    -> id int not null auto_increment,
    -> name varchar(200),
    -> fname varchar(200),
    -> email varchar(200),
    -> password varchar(200),
    -> primary key ( id )
    -> );
Query OK, 0 rows affected (0.969 sec)

MariaDB [amitkumawat]> desc table55;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(200) | YES  |     | NULL    |                |
| fname    | varchar(200) | YES  |     | NULL    |                |
| email    | varchar(200) | YES  |     | NULL    |                |
| password | varchar(200) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
5 rows in set (0.292 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'amit kumar kumawat',
    -> 'amit@gmail.com',
    -> '12345678945'
    -> );
Query OK, 1 row affected (0.443 sec)

MariaDB [amitkumawat]> select* from table55;
+----+--------------+--------------------+----------------+-------------+
| id | name         | fname              | email          | password    |
+----+--------------+--------------------+----------------+-------------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | 12345678945 |
+----+--------------+--------------------+----------------+-------------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawat',
    -> 'amit@gmail.com',
    -> '123456'
    -> ) , (id,
    -> 'rakesh kumawat',
    -> 'kumawat',
    -> 'rakesh@gmail.com',
    -> '12345sdsdf6'
    -> ) , (id,
    -> 'kailash',
    -> 'kumawat',
    -> 'kumawat@gmail.com',
    -> 'ggggggg'
    -> ) , (id,
    -> 'subhash kumawat',
    -> 'kumawat',
    -> 'subhash@gmail.com',
    -> 'ssssssg'
    -> );
Query OK, 4 rows affected (0.294 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select* form table55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'form table55' at line 1
MariaDB [amitkumawat]> select * from table55;
+----+-----------------+--------------------+-------------------+-------------+
| id | name            | fname              | email             | password    |
+----+-----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat    | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat    | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat  | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash         | kumawat            | kumawat@gmail.com | ggggggg     |
|  5 | subhash kumawat | kumawat            | subhash@gmail.com | ssssssg     |
+----+-----------------+--------------------+-------------------+-------------+
5 rows in set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where name='amit kumawat' or name='kailash' or name='rakesh kumawat' email='amit@gmail.com';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'email='amit@gmail.com'' at line 1
MariaDB [amitkumawat]> insert into table55 values (
    -> 'kailash',
    -> 'kumawat',
    -> 'kumawat@gmail.com',
    -> 'ggggggg'
    -> );
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [amitkumawat]> select * from table55 where name='amit kumawat' or name='kailash' or name='rakesh kumawat' email='amit@gmail.com';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'email='amit@gmail.com'' at line 1
MariaDB [amitkumawat]> update table55 change name fname varchar(200) ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'change name fname varchar(200)' at line 1
MariaDB [amitkumawat]> select id name as fname from tbale55;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as fname from tbale55' at line 1
MariaDB [amitkumawat]> update table55 change name ='fname' ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'change name ='fname'' at line 1
MariaDB [amitkumawat]> alter table table55 change name fname varchar(200);
ERROR 1060 (42S21): Duplicate column name 'fname'
MariaDB [amitkumawat]> alter table table55 change name lname varchar(200);
Query OK, 0 rows affected (0.553 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+-----------------+--------------------+-------------------+-------------+
| id | lname           | fname              | email             | password    |
+----+-----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat    | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat    | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat  | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash         | kumawat            | kumawat@gmail.com | ggggggg     |
|  5 | subhash kumawat | kumawat            | subhash@gmail.com | ssssssg     |
+----+-----------------+--------------------+-------------------+-------------+
5 rows in set (0.000 sec)

MariaDB [amitkumawat]> DELETE FROM employees
    -> WHERE employeeID = 3;
ERROR 1146 (42S02): Table 'amitkumawat.employees' doesn't exist
MariaDB [amitkumawat]> delete from table55
    -> where tbale55 id = 5;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = 5' at line 2
MariaDB [amitkumawat]> delete from table55
    -> where tbale55 id = '5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = '5'' at line 2
MariaDB [amitkumawat]> delete from table55
    -> where table55 id = '5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'id = '5'' at line 2
MariaDB [amitkumawat]> delete from table55 where id='5';
Query OK, 1 row affected (0.420 sec)

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-------------------+-------------+
| id | lname          | fname              | email             | password    |
+----+----------------+--------------------+-------------------+-------------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    | 12345678945 |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    | 123456      |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  | 12345sdsdf6 |
|  4 | kailash        | kumawat            | kumawat@gmail.com | ggggggg     |
+----+----------------+--------------------+-------------------+-------------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> alter table table55 drop colum password;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'password' at line 1
MariaDB [amitkumawat]> alter table table55 drop column password;
Query OK, 0 rows affected (0.481 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select* from table55;
+----+----------------+--------------------+-------------------+
| id | lname          | fname              | email             |
+----+----------------+--------------------+-------------------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  |
|  4 | kailash        | kumawat            | kumawat@gmail.com |
+----+----------------+--------------------+-------------------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> alter table table55 add password varchar(100);
Query OK, 0 rows affected (0.547 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-------------------+----------+
| id | lname          | fname              | email             | password |
+----+----------------+--------------------+-------------------+----------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com    | NULL     |
|  2 | amit kumawat   | kumawat            | amit@gmail.com    | NULL     |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com  | NULL     |
|  4 | kailash        | kumawat            | kumawat@gmail.com | NULL     |
+----+----------------+--------------------+-------------------+----------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND `fname` = 'kumawat' AND `email` = 'amit@gmail.com';
+----+--------------+---------+----------------+----------+
| id | lname        | fname   | email          | password |
+----+--------------+---------+----------------+----------+
|  2 | amit kumawat | kumawat | amit@gmail.com | NULL     |
+----+--------------+---------+----------------+----------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'fname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'fname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' = 'rakesh kumawat' or email ='rakessjd@kjg.cokm';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' ='rakesh kumawat' or email ='rakessjd@kjg.cokm');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> SELECT * FROM `table55` WHERE `lname` = 'amit kumawat' AND ( `fname` = 'kumawat' or `email` = 'amit@gmail.com' or 'lname' ='rakesh kumawat' or email ='rakesh@gmail.com');
+----+--------------+--------------------+----------------+----------+
| id | lname        | fname              | email          | password |
+----+--------------+--------------------+----------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com | NULL     |
+----+--------------+--------------------+----------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawatkk',
    -> 'amitkumawat@gmail.com',
    -> 'hhhhh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kuma,
    '> ;
    '>
    '>
    '> );
    '>
    '>
    '> select * from table55;
    '>
    '> );
    '> ');
ERROR 1136 (21S01): Column count doesn't match value count at row 2
MariaDB [amitkumawat]> insert into table55 values(
    -> id,
    -> 'amit kumawat',
    -> 'kumawatkk',
    -> 'amitkumawat@gmail.com',
    -> 'hhhhh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kuma',
    -> 'amitkumaw@gmail.com',
    -> 'hhghgh'
    -> ),(id,
    -> 'amit kumawat',
    -> 'kumawatd',
    -> 'amit kumaw@gmal.com',
    -> 'hghghg'
    -> );
Query OK, 3 rows affected (0.069 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from table55;
+----+----------------+--------------------+-----------------------+----------+
| id | lname          | fname              | email                 | password |
+----+----------------+--------------------+-----------------------+----------+
|  1 | amit kumawat   | amit kumar kumawat | amit@gmail.com        | NULL     |
|  2 | amit kumawat   | kumawat            | amit@gmail.com        | NULL     |
|  3 | rakesh kumawat | kumawat            | rakesh@gmail.com      | NULL     |
|  4 | kailash        | kumawat            | kumawat@gmail.com     | NULL     |
|  6 | amit kumawat   | kumawatkk          | amitkumawat@gmail.com | hhhhh    |
|  7 | amit kumawat   | kuma               | amitkumaw@gmail.com   | hhghgh   |
|  8 | amit kumawat   | kumawatd           | amit kumaw@gmal.com   | hghghg   |
+----+----------------+--------------------+-----------------------+----------+
7 rows in set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where 'lname'= 'amit kumawat' and ('email'='amitkumawat@gmail.com' or 'password'='hhhhh' or 'email'='amit@gmail.com' or
    -> 'email'= 'amitkumaw@gmail.com');
Empty set (0.001 sec)

MariaDB [amitkumawat]> select * from table55 where 'lname'= 'amit kumawat' and ('email' ='amit@gmail.com' or 'email' ='amit@gmail.com' or 'email' ='amitkumawat@gmail.com');
Empty set (0.000 sec)

MariaDB [amitkumawat]> select * from table55 where lname= 'amit kumawat' and (email='amitkumawat@gmail.com' or password ='hhhhh' or email='amit@gmail.com');
+----+--------------+--------------------+-----------------------+----------+
| id | lname        | fname              | email                 | password |
+----+--------------+--------------------+-----------------------+----------+
|  1 | amit kumawat | amit kumar kumawat | amit@gmail.com        | NULL     |
|  2 | amit kumawat | kumawat            | amit@gmail.com        | NULL     |
|  6 | amit kumawat | kumawatkk          | amitkumawat@gmail.com | hhhhh    |
+----+--------------+--------------------+-----------------------+----------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]>