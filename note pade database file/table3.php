 Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xam
The system cannot find the path specified.

C:\>cd x
The system cannot find the path specified.

C:\>cd xampp

C:\xampp>\cd mysql
'\cd' is not recognized as an internal or external command,

operable program or batch file.

C:\xampp>cd bin
The system cannot find the path specified.

C:\xampp>cd mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 49
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> create database demo1;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| demo1              |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
+--------------------+
6 rows in set (0.001 sec)

MariaDB [(none)]> use demo1;
Database changed
MariaDB [demo1]> drop database demo1;
Query OK, 0 rows affected (0.001 sec)

MariaDB [(none)]> 




<!--/// tabale create -------------------- -->



Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>show databases;
'show' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 62
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
| structure          |
| tara               |
| test               |
+--------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]> use tara;
Database changed
MariaDB [tara]> create table raju
    -> (
    -> name varchar(330),
    -> email varchar(220),
    -> mobile varchar(20),
    -> city varchar(20)
    -> );
Query OK, 0 rows affected (0.687 sec)

MariaDB [tara]> show tables;
+----------------+
| Tables_in_tara |
+----------------+
| raju           |
| tra            |
+----------------+
2 rows in set (0.000 sec)

MariaDB [tara]> insert into raju values;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [tara]> insert into raju values
    -> ('amit','amit@gmail.com',5544555,'jaipur');
Query OK, 1 row affected (0.299 sec)

MariaDB [tara]> select* from raju;
+------+----------------+---------+--------+
| name | email          | mobile  | city   |
+------+----------------+---------+--------+
| amit | amit@gmail.com | 5544555 | jaipur |
+------+----------------+---------+--------+
1 row in set (0.000 sec)

MariaDB [tara]> desc raju;
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| name   | varchar(330) | YES  |     | NULL    |       |
| email  | varchar(220) | YES  |     | NULL    |       |
| mobile | varchar(20)  | YES  |     | NULL    |       |
| city   | varchar(20)  | YES  |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
4 rows in set (0.302 sec)

MariaDB [tara]>



<!-- tabale insert in cmd -->


Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u -root -p
Enter password:
ERROR 1045 (28000): Access denied for user '-root'@'localhost' (using password: NO)

C:\xampp\mysql\bin>mysql -u root -p;
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 10
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
| structure          |
| tara               |
| test               |
+--------------------+
8 rows in set (0.413 sec)

MariaDB [(none)]> use amitkumawat;
Database changed
MariaDB [amitkumawat]> show table rajesh;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'rajesh' at line 1
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| rajesh                |
+-----------------------+
1 row in set (0.001 sec)

MariaDB [amitkumawat]> select into rajesh;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'into rajesh' at line 1
MariaDB [amitkumawat]> select* into rajesh;
ERROR 1327 (42000): Undeclared variable: rajesh
MariaDB [amitkumawat]> select* from rajesh;
+----+--------------+-----------------------+--------+
| id | name         | email                 | city   |
+----+--------------+-----------------------+--------+
|  1 | amit kumawat | amitkumawat@gmail.com | jaipur |
+----+--------------+-----------------------+--------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> desc rajesh;
+-------+--------------+------+-----+-----------------------+----------------+
| Field | Type         | Null | Key | Default               | Extra          |
+-------+--------------+------+-----+-----------------------+----------------+
| id    | int(100)     | NO   | PRI | NULL                  | auto_increment |
| name  | varchar(220) | NO   |     | NULL                  |                |
| email | varchar(25)  | NO   |     | amitkumawat@gmail.com |                |
| city  | varchar(100) | NO   |     | NULL                  |                |
+-------+--------------+------+-----+-----------------------+----------------+
4 rows in set (0.326 sec)

MariaDB [amitkumawat]> select * from  rajesh;
+----+--------------+-----------------------+--------+
| id | name         | email                 | city   |
+----+--------------+-----------------------+--------+
|  1 | amit kumawat | amitkumawat@gmail.com | jaipur |
|  2 | amit kumawat | amitkumawat@gmail.com | jaipur |
+----+--------------+-----------------------+--------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> create table rajesh('','kailash','kailash@gmail.com','jodhpur');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''','kailash','kailash@gmail.com','jodhpur')' at line 1
MariaDB [amitkumawat]> select* into rajesh;
ERROR 1327 (42000): Undeclared variable: rajesh
MariaDB [amitkumawat]> select* from rajesh;
+----+--------------+-----------------------+--------+
| id | name         | email                 | city   |
+----+--------------+-----------------------+--------+
|  1 | amit kumawat | amitkumawat@gmail.com | jaipur |
|  2 | amit kumawat | amitkumawat@gmail.com | jaipur |
+----+--------------+-----------------------+--------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> select* from rajesh;
+----+---------------+-----------------------+---------+
| id | name          | email                 | city    |
+----+---------------+-----------------------+---------+
|  1 | amit kumawat  | amitkumawat@gmail.com | jaipur  |
|  2 | amit kumawat  | amitkumawat@gmail.com | jaipur  |
|  3 | rahul kumawat | amitkumawat@gmail.com | bikaner |
+----+---------------+-----------------------+---------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]> insert into rajesh ('id','name','email','city')values
    -> ('','syamlal','syamlal@gmail.com','bihar');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''id','name','email','city')values
('','syamlal','syamlal@gmail.com','bihar')' at line 1
MariaDB [amitkumawat]> select* from rajesh;
+----+----------------+--------------------------+---------+
| id | name           | email                    | city    |
+----+----------------+--------------------------+---------+
|  1 | amit kumawat   | amitkumawat@gmail.com    | jaipur  |
|  2 | kailsh kumawat | kailashkumawat@gmail.com | nepal   |
|  3 | rahul kumawat  | amitkumawat@gmail.com    | bikaner |
+----+----------------+--------------------------+---------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]> alter table rajesh add addres varchar(100);
Query OK, 0 rows affected (0.528 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [amitkumawat]> select * from rajesh;
+----+----------------+--------------------------+---------+--------+
| id | name           | email                    | city    | addres |
+----+----------------+--------------------------+---------+--------+
|  1 | amit kumawat   | amitkumawat@gmail.com    | jaipur  | NULL   |
|  2 | kailsh kumawat | kailashkumawat@gmail.com | nepal   | NULL   |
|  3 | rahul kumawat  | amitkumawat@gmail.com    | bikaner | NULL   |
+----+----------------+--------------------------+---------+--------+
3 rows in set (0.000 sec)

MariaDB [amitkumawat]> upadate rajesh set addres = 'jaipur' where id =1;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'upadate rajesh set addres = 'jaipur' where id =1' at line 1
MariaDB [amitkumawat]> update rajesh set addres = 'jaipur' where id =1;
Query OK, 1 row affected (0.426 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [amitkumawat]> select * from rajesh;
+----+----------------+--------------------------+---------+--------+
| id | name           | email                    | city    | addres |
+----+----------------+--------------------------+---------+--------+
|  1 | amit kumawat   | amitkumawat@gmail.com    | jaipur  | jaipur |
|  2 | kailsh kumawat | kailashkumawat@gmail.com | nepal   | NULL   |
|  3 | rahul kumawat  | amitkumawat@gmail.com    | bikaner | NULL   |
+----+----------------+--------------------------+---------+--------+
3 rows in set (0.001 sec)

MariaDB [amitkumawat]> insert into rajesh (name,email,city,addres)values('syamlal','symaklaj@gmail.com','bikanesfh',lunwa);
ERROR 1054 (42S22): Unknown column 'lunwa' in 'field list'
MariaDB [amitkumawat]> insert into rajesh (name,email,city,addres)values('syamlal','symaklaj@gmail.com','bikanesfh','lunwa');
Query OK, 1 row affected (0.304 sec)

MariaDB [amitkumawat]> select * from rajesh;
+----+----------------+--------------------------+-----------+--------+
| id | name           | email                    | city      | addres |
+----+----------------+--------------------------+-----------+--------+
|  1 | amit kumawat   | amitkumawat@gmail.com    | jaipur    | jaipur |
|  2 | kailsh kumawat | kailashkumawat@gmail.com | nepal     | NULL   |
|  3 | rahul kumawat  | amitkumawat@gmail.com    | bikaner   | NULL   |
|  4 | syamlal        | symaklaj@gmail.com       | bikanesfh | lunwa  |
+----+----------------+--------------------------+-----------+--------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]>


<!--table 2 -->

Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 30
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
| rajesh                |
+-----------------------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> insert into kailash;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> create table kailsh;
ERROR 1113 (42000): A table must have at least 1 column
MariaDB [amitkumawat]> create table shyamlal (id,'name','email','password','city');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''name','email','password','city')' at line 1
MariaDB [amitkumawat]> create table shyamlal(
    -> id int(100),
    -> name varchar (100),
    -> email varchar (100),
    -> password varchar(100)
    -> );
Query OK, 0 rows affected (0.638 sec)

MariaDB [amitkumawat]> desc shyamlal;
+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| id       | int(100)     | YES  |     | NULL    |       |
| name     | varchar(100) | YES  |     | NULL    |       |
| email    | varchar(100) | YES  |     | NULL    |       |
| password | varchar(100) | YES  |     | NULL    |       |
+----------+--------------+------+-----+---------+-------+
4 rows in set (0.060 sec)

MariaDB [amitkumawat]> insert into shyamlal values (
    -> 1,
    -> 'amit kumawat',
    -> 'amit@gmail.com',
    -> '6556565'
    -> );
Query OK, 1 row affected (0.462 sec)

MariaDB [amitkumawat]> select* from shyamlal;
+------+--------------+----------------+----------+
| id   | name         | email          | password |
+------+--------------+----------------+----------+
|    1 | amit kumawat | amit@gmail.com | 6556565  |
+------+--------------+----------------+----------+
1 row in set (0.001 sec)

MariaDB [amitkumawat]> insert into shyamlal values (
    ->
    -> 'kailash kumawat',
    -> 'kailash@gmail.com',
    -> 'klsjkhfdkjhs'
    -> );
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [amitkumawat]> select * from shyamlal;
+------+--------------+----------------+----------+
| id   | name         | email          | password |
+------+--------------+----------------+----------+
|    1 | amit kumawat | amit@gmail.com | 6556565  |
+------+--------------+----------------+----------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> insert into shyamlal values (
    -> '2',
    -> 'kailash kumawat',
    -> 'kailsh@gmail.com',
    -> 'password'
    -> );
Query OK, 1 row affected (0.522 sec)

MariaDB [amitkumawat]> desc shyamlal;
+----------+--------------+------+-----+---------+-------+
| Field    | Type         | Null | Key | Default | Extra |
+----------+--------------+------+-----+---------+-------+
| id       | int(100)     | YES  |     | NULL    |       |
| name     | varchar(100) | YES  |     | NULL    |       |
| email    | varchar(100) | YES  |     | NULL    |       |
| password | varchar(100) | YES  |     | NULL    |       |
+----------+--------------+------+-----+---------+-------+
4 rows in set (0.349 sec)

MariaDB [amitkumawat]> select* from shyamlal;
+------+-----------------+------------------+----------+
| id   | name            | email            | password |
+------+-----------------+------------------+----------+
|    1 | amit kumawat    | amit@gmail.com   | 6556565  |
|    2 | kailash kumawat | kailsh@gmail.com | password |
+------+-----------------+------------------+----------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]>



<!--table10-->

Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 192
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
| table10               |
| table23               |
| table8                |
+-----------------------+
6 rows in set (0.000 sec)

MariaDB [amitkumawat]> desc table10;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(220)     | NO   | PRI | NULL    | auto_increment |
| name     | varchar(100) | YES  |     | NULL    |                |
| email    | varchar(100) | YES  |     | NULL    |                |
| password | varchar(100) | YES  |     | NULL    |                |
| city     | varchar(100) | YES  |     | NULL    |                |
| gender   | varchar(100) | YES  |     | NULL    |                |
| vilege   | varchar(100) | YES  |     | NULL    |                |
| address  | varchar(100) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
8 rows in set (0.335 sec)

MariaDB [amitkumawat]> select * from table10;
+----+----------------+------------------+----------+---------+--------+-------------------+-----------------+
| id | name           | email            | password | city    | gender | vilege            | address         |
+----+----------------+------------------+----------+---------+--------+-------------------+-----------------+
|  1 | amit kumawat   | amit@gmail.com   | 123456   | jaipur  | male   | lunwa             | goravpura lunwa |
|  2 | rajesh kumawat | rajesh@gmail.com | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  3 | rajesh kumawat | rajesh@gmail.com | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  4 | rajesh kumawat | rajesh@gmail.com | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
+----+----------------+------------------+----------+---------+--------+-------------------+-----------------+
4 rows in set (0.000 sec)

MariaDB [amitkumawat]> insert table table10 values (
    -> 5,
    -> 'subhash kumawat',
    -> 'subhash@gmail.com',
    -> '5454888',
    -> 'jobner',
    -> 'male'.
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table table10 values (
5,
'subhash kumawat',
'subhash@gmail.com',
'5454888',
...' at line 1
MariaDB [amitkumawat]> insert table table10 values (
    -> 5,
    -> 'subhash kumawat',
    -> 'subhash@gmail.com',
    -> '5454888',
    -> 'jobner',
    -> 'male',
    -> 'jobner dhani',
    -> 'jobner'
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table table10 values (
5,
'subhash kumawat',
'subhash@gmail.com',
'5454888',
...' at line 1
MariaDB [amitkumawat]> insert into table10 values (
    -> 5,
    -> 'subhash kumawat',
    -> 'subhash@gmail.com',
    -> '5454888',
    -> 'jobner',
    -> 'male',
    -> 'jobner dhani',
    -> 'jobner'
    -> );
Query OK, 1 row affected (0.531 sec)

MariaDB [amitkumawat]> select * from table10;
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
| id | name            | email             | password | city    | gender | vilege            | address         |
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
|  1 | amit kumawat    | amit@gmail.com    | 123456   | jaipur  | male   | lunwa             | goravpura lunwa |
|  2 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  3 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  4 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  5 | subhash kumawat | subhash@gmail.com | 5454888  | jobner  | male   | jobner dhani      | jobner          |
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
5 rows in set (0.000 sec)

MariaDB [amitkumawat]> create into table10 values (
    -> '6',
    -> 'subhash kumawat',
    -> 'subhash@gmai.com',
    -> '4535463',
    -> 'rrrrr',
    -> 'male',
    -> 'bhaslana',
    -> 'bhaslana'
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'into table10 values (
'6',
'subhash kumawat',
'subhash@gmai.com',
'4535463',
...' at line 1
MariaDB [amitkumawat]> insert into table10 values(
    -> 6,
    -> 'subhash kumawat',
    -> 'subhash@gmai.com',
    -> '4535463',
    -> 'rrrrr',
    -> 'male',
    -> 'bhaslana',
    -> 'bhaslana'
    -> );
Query OK, 1 row affected (1.927 sec)

MariaDB [amitkumawat]> select * from table10;
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
| id | name            | email             | password | city    | gender | vilege            | address         |
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
|  1 | amit kumawat    | amit@gmail.com    | 123456   | jaipur  | male   | lunwa             | goravpura lunwa |
|  2 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  3 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  4 | rajesh kumawat  | rajesh@gmail.com  | 123456   | jodhpur | male   | mandha bhim singh | mandha          |
|  5 | subhash kumawat | subhash@gmail.com | 5454888  | jobner  | male   | jobner dhani      | jobner          |
|  6 | subhash kumawat | subhash@gmai.com  | 4535463  | rrrrr   | male   | bhaslana          | bhaslana        |
+----+-----------------+-------------------+----------+---------+--------+-------------------+-----------------+
6 rows in set (0.001 sec)

MariaDB [amitkumawat]> update table10 set city ='bikane' where 6 ;
Query OK, 6 rows affected (0.457 sec)
Rows matched: 6  Changed: 6  Warnings: 0

MariaDB [amitkumawat]> select * from table10;
+----+-----------------+-------------------+----------+--------+--------+-------------------+-----------------+
| id | name            | email             | password | city   | gender | vilege            | address         |
+----+-----------------+-------------------+----------+--------+--------+-------------------+-----------------+
|  1 | amit kumawat    | amit@gmail.com    | 123456   | bikane | male   | lunwa             | goravpura lunwa |
|  2 | rajesh kumawat  | rajesh@gmail.com  | 123456   | bikane | male   | mandha bhim singh | mandha          |
|  3 | lokesh kumawat  | lokesh@gmail.com  | 123456   | bikane | male   | mandha bhim singh | mandha          |
|  4 | rajesh kumawat  | rajesh@gmail.com  | 123456   | bikane | male   | mandha bhim singh | mandha          |
|  5 | subhash kumawat | subhash@gmail.com | 5454888  | bikane | male   | jobner dhani      | jobner          |
|  6 | subhash kumawat | subhash@gmai.com  | 4535463  | bikane | male   | bhaslana          | bhaslana        |
+----+-----------------+-------------------+----------+--------+--------+-------------------+-----------------+
6 rows in set (0.000 sec)

MariaDB [amitkumawat]> DELETE FROM table10 WHERE 5;
Query OK, 6 rows affected (0.094 sec)

MariaDB [amitkumawat]> select * from table10;
Empty set (0.000 sec)

MariaDB [amitkumawat]>





<!-- auto increment table in cdms -->


Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>..cd
'..cd' is not recognized as an internal or external command,
operable program or batch file.

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
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
8 rows in set (0.330 sec)

MariaDB [(none)]> use amitkumawat;
Database changed
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| newtable              |
| persons               |
| rajesh                |
| shyamlal              |
| table03               |
| table10               |
| table14               |
| table23               |
| table8                |
+-----------------------+
9 rows in set (0.001 sec)

MariaDB [amitkumawat]> desc tabal14;
ERROR 1146 (42S02): Table 'amitkumawat.tabal14' doesn't exist
MariaDB [amitkumawat]> use table14;
ERROR 1049 (42000): Unknown database 'table14'
MariaDB [amitkumawat]> use table14;
ERROR 1049 (42000): Unknown database 'table14'
MariaDB [amitkumawat]> select * from table14;
+------+--------------+---------+----------------+
| id   | name         | lname   | email          |
+------+--------------+---------+----------------+
|    1 | amit kumawat | kumawat | amit@gmail.com |
+------+--------------+---------+----------------+
1 row in set (0.458 sec)

MariaDB [amitkumawat]> desc table14;
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| id    | int(100)     | YES  |     | NULL    |       |
| name  | varchar(100) | YES  |     | NULL    |       |
| lname | varchar(100) | YES  |     | NULL    |       |
| email | varchar(100) | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+
4 rows in set (0.011 sec)

MariaDB [amitkumawat]> create table table14 values (
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [amitkumawat]> create table table11(
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar(200) NOT NULL,
    -> lname varchar(200),
    -> email varchar(200),
    -> age int,
    -> PRIMARY KEY (id,email)
    -> );
Query OK, 0 rows affected (0.828 sec)

MariaDB [amitkumawat]> select * from table11;
Empty set (0.001 sec)

MariaDB [amitkumawat]> insert into table11 values (
    -> id,
    -> 'amit',
    -> 'kumawat',
    -> 'amit@gmail.com',
    -> '23'
    -> );
Query OK, 1 row affected (0.452 sec)

MariaDB [amitkumawat]> select * from table11;
+----+------+---------+----------------+------+
| id | name | lname   | email          | age  |
+----+------+---------+----------------+------+
|  1 | amit | kumawat | amit@gmail.com |   23 |
+----+------+---------+----------------+------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> desc table11;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(11)      | NO   | PRI | NULL    | auto_increment |
| name  | varchar(200) | NO   |     | NULL    |                |
| lname | varchar(200) | YES  |     | NULL    |                |
| email | varchar(200) | NO   | PRI | NULL    |                |
| age   | int(11)      | YES  |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+
5 rows in set (0.272 sec)

MariaDB [amitkumawat]>





<!-- upadate -->




C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

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
MariaDB [amitkumawat]> show tables;
+-----------------------+
| Tables_in_amitkumawat |
+-----------------------+
| newtable              |
| persons               |
| rajesh                |
| shyamlal              |
| table03               |
| table10               |
| table11               |
| table14               |
| table23               |
| table8                |
+-----------------------+
10 rows in set (0.001 sec)

MariaDB [amitkumawat]> desc table11;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(11)      | NO   | PRI | NULL    | auto_increment |
| name  | varchar(200) | NO   |     | NULL    |                |
| lname | varchar(200) | YES  |     | NULL    |                |
| email | varchar(200) | NO   | PRI | NULL    |                |
| age   | int(11)      | YES  |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+
5 rows in set (0.436 sec)

MariaDB [amitkumawat]> select * from table11;
+----+------+---------+----------------+------+
| id | name | lname   | email          | age  |
+----+------+---------+----------------+------+
|  1 | amit | kumawat | amit@gmail.com |   23 |
+----+------+---------+----------------+------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> create table table02 (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar (100) NOT NULL,
    -> email varchar (100),
    -> password varchar (100),
    -> city varchar (100)
    -> );
ERROR 1075 (42000): Incorrect table definition; there can be only one auto column and it must be defined as a key
MariaDB [amitkumawat]> create table table02 (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar (100) NOT NULL,
    -> email varchar (100),
    -> password varchar (100),
    -> city varchar (100)
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 6
MariaDB [amitkumawat]> create table table02 (
    -> id int NOT NULL AUTO_INCREMENT,
    -> name varchar (100) NOT NULL,
    -> email varchar (100),
    -> password varchar (100),
    ->
    -> city varchar (100),
    ->  PRIMARY KEY (id)
    -> );
Query OK, 0 rows affected (0.891 sec)

MariaDB [amitkumawat]> desc table02;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(100) | NO   |     | NULL    |                |
| email    | varchar(100) | YES  |     | NULL    |                |
| password | varchar(100) | YES  |     | NULL    |                |
| city     | varchar(100) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
5 rows in set (0.065 sec)

MariaDB [amitkumawat]> insert into table02(
    -> id,
    -> 'amit kumawat',
    -> 'amit@gmail.com',
    -> '16546',
    -> 'jaipur'
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''amit kumawat',
'amit@gmail.com',
'16546',
'jaipur'
)' at line 3
MariaDB [amitkumawat]> insert into table02 values (
    -> id,
    -> 'amit kumawat',
    -> 'amit@gmail.com',
    -> '16546',
    -> 'jaipur'
    -> );
Query OK, 1 row affected (0.408 sec)

MariaDB [amitkumawat]> select * from table02;
+----+--------------+----------------+----------+--------+
| id | name         | email          | password | city   |
+----+--------------+----------------+----------+--------+
|  1 | amit kumawat | amit@gmail.com | 16546    | jaipur |
+----+--------------+----------------+----------+--------+
1 row in set (0.000 sec)

MariaDB [amitkumawat]> criate into table02 (
    -> id,
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'criate into table02 (
id,' at line 1
MariaDB [amitkumawat]> insert into table02 values(
    -> id,
    -> 'kailash kumawat',
    -> 'kailash@gmail.com',
    -> '87668777',
    -> 'jodhpur'
    -> );
Query OK, 1 row affected (0.423 sec)

MariaDB [amitkumawat]> select * from table02;
+----+-----------------+-------------------+----------+---------+
| id | name            | email             | password | city    |
+----+-----------------+-------------------+----------+---------+
|  1 | amit kumawat    | amit@gmail.com    | 16546    | jaipur  |
|  2 | kailash kumawat | kailash@gmail.com | 87668777 | jodhpur |
+----+-----------------+-------------------+----------+---------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]> update table02 set password = '564564564' where id=1;
Query OK, 1 row affected (0.405 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [amitkumawat]> select * from table02;
+----+-----------------+-------------------+-----------+---------+
| id | name            | email             | password  | city    |
+----+-----------------+-------------------+-----------+---------+
|  1 | amit kumawat    | amit@gmail.com    | 564564564 | jaipur  |
|  2 | kailash kumawat | kailash@gmail.com | 87668777  | jodhpur |
+----+-----------------+-------------------+-----------+---------+
2 rows in set (0.000 sec)

MariaDB [amitkumawat]>

