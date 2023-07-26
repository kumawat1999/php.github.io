Microsoft Windows [Version 6.3.9600]
(c) 2013 Microsoft Corporation. All rights reserved.

C:\Users\Admin>cd..

C:\Users>cd..

C:\>D:

D:\>cd xampp

D:\xampp>cd mysql

D:\xampp\mysql>cd bin

D:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 157
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| demo2              |
| demo_1             |
| demo_by_table      |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| ram                |
| subhashkumawat     |
| table2             |
| table3             |
| tablerow           |
| test               |
+--------------------+
13 rows in set (0.001 sec)

MariaDB [(none)]> use tablerow;
Database changed
MariaDB [tablerow]> show tables;
+--------------------+
| Tables_in_tablerow |
+--------------------+
| subhash1           |
| subuhash2          |
+--------------------+
2 rows in set (0.001 sec)

MariaDB [tablerow]> create table subhash123;
ERROR 1113 (42000): A table must have at least 1 column
MariaDB [tablerow]> create table subhash123(
    -> id int not null auto_increment,
    -> name varchar (200),
    -> email varchar(100),
    -> password varchar(20),
    -> mobile varchar(20),
    -> primary key (id)
    -> );
Query OK, 0 rows affected (0.382 sec)

MariaDB [tablerow]> desc subhash123;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(200) | YES  |     | NULL    |                |
| email    | varchar(100) | YES  |     | NULL    |                |
| password | varchar(20)  | YES  |     | NULL    |                |
| mobile   | varchar(20)  | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
5 rows in set (0.067 sec)

MariaDB [tablerow]> insert into subhash123 values(
    -> id,
    -> 'subhash kumawat',
    -> 'subhash@gmail.com',
    -> '4563',
    -> '76876879'
    -> );
Query OK, 1 row affected (0.298 sec)

MariaDB [tablerow]> select* from subhash123;
+----+-----------------+-------------------+----------+----------+
| id | name            | email             | password | mobile   |
+----+-----------------+-------------------+----------+----------+
|  1 | subhash kumawat | subhash@gmail.com | 4563     | 76876879 |
+----+-----------------+-------------------+----------+----------+
1 row in set (0.001 sec)

MariaDB [tablerow]> insert into subhash123 values(
    -> 'rajesh','rajeshdbfh@hdsbf.cjm','565467','789879879'),(
    -> 'amit','amitkumawat@gmail.com','87879879','456456'),(
    -> 'pp','pp@dsf.cdf','345325','56565757'),(
    -> 'shyamlal','shyam@gmail.com','7868756','897987');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [tablerow]> insert into subhash123(id,name,email,password,mobile) values(
    -> 'rajesh','rajeshdbfh@hdsbf.cjm','565467','789879879'),(
    -> 'amit','amitkumawat@gmail.com','87879879','456456'),(
    -> 'pp','pp@dsf.cdf','345325','56565757'),(
    -> 'shyamlal','shyam@gmail.com','7868756','897987');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [tablerow]> insert into subhash123(name,email,password,mobile) values(
    -> 'rajesh','rajeshdbfh@hdsbf.cjm','565467','789879879'),(
    -> 'amit','amitkumawat@gmail.com','87879879','456456'),(
    -> 'pp','pp@dsf.cdf','345325','56565757'),(
    -> 'shyamlal','shyam@gmail.com','7868756','897987');
Query OK, 4 rows affected (0.111 sec)
Records: 4  Duplicates: 0  Warnings: 0

MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+-----------+
| id | name            | email                 | password | mobile    |
+----+-----------------+-----------------------+----------+-----------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     | 76876879  |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   | 789879879 |
|  3 | amit            | amitkumawat@gmail.com | 87879879 | 456456    |
|  4 | pp              | pp@dsf.cdf            | 345325   | 56565757  |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  | 897987    |
+----+-----------------+-----------------------+----------+-----------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> alter table subhash123 drop mobile varchar(20);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'varchar(20)' at line 1
MariaDB [tablerow]> alter table subhash123 drop mobile;
Query OK, 0 rows affected (0.401 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+
| id | name            | email                 | password |
+----+-----------------+-----------------------+----------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   |
|  3 | amit            | amitkumawat@gmail.com | 87879879 |
|  4 | pp              | pp@dsf.cdf            | 345325   |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  |
+----+-----------------+-----------------------+----------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> alter table subhash123 add mobile varchar(20);
Query OK, 0 rows affected (0.142 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+--------+
| id | name            | email                 | password | mobile |
+----+-----------------+-----------------------+----------+--------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     | NULL   |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   | NULL   |
|  3 | amit            | amitkumawat@gmail.com | 87879879 | NULL   |
|  4 | pp              | pp@dsf.cdf            | 345325   | NULL   |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  | NULL   |
+----+-----------------+-----------------------+----------+--------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> update subhash123 set mobile ='43212','78979879','6754646546','5645643','4324234324' where id ='1','2','3','4','5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near ''78979879','6754646546','5645643','4324234324' where id ='1','2','3','4','5'' at line 1
MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id ='1','2';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near ''2'' at line 1
MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id ='1';
Query OK, 1 row affected (0.051 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id ='1','2';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near ''2'' at line 1
MariaDB [tablerow]> update subhash123 set mobile ='43212','78979879','6754646546','5645643','4324234324' where id ='1','2','3','4','5';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near ''78979879','6754646546','5645643','4324234324' where id ='1','2','3','4','5'' at line 1
MariaDB [tablerow]> \\\
ERROR: Unknown command '\\'.
    -> update subhash123 set mobile ='4354546' where id ='1' || '2';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near '\\
update subhash123 set mobile ='4354546' where id ='1' || '2'' at line 1
MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+---------+
| id | name            | email                 | password | mobile  |
+----+-----------------+-----------------------+----------+---------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     | 4354546 |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   | NULL    |
|  3 | amit            | amitkumawat@gmail.com | 87879879 | NULL    |
|  4 | pp              | pp@dsf.cdf            | 345325   | NULL    |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  | NULL    |
+----+-----------------+-----------------------+----------+---------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id ='1'& '2';
Query OK, 0 rows affected (0.001 sec)
Rows matched: 0  Changed: 0  Warnings: 0

MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+---------+
| id | name            | email                 | password | mobile  |
+----+-----------------+-----------------------+----------+---------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     | 4354546 |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   | NULL    |
|  3 | amit            | amitkumawat@gmail.com | 87879879 | NULL    |
|  4 | pp              | pp@dsf.cdf            | 345325   | NULL    |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  | NULL    |
+----+-----------------+-----------------------+----------+---------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> update subhash123 set mobile ='4354546';
Query OK, 4 rows affected (0.076 sec)
Rows matched: 5  Changed: 4  Warnings: 0

MariaDB [tablerow]> select * from subhash123;
+----+-----------------+-----------------------+----------+---------+
| id | name            | email                 | password | mobile  |
+----+-----------------+-----------------------+----------+---------+
|  1 | subhash kumawat | subhash@gmail.com     | 4563     | 4354546 |
|  2 | rajesh          | rajeshdbfh@hdsbf.cjm  | 565467   | 4354546 |
|  3 | amit            | amitkumawat@gmail.com | 87879879 | 4354546 |
|  4 | pp              | pp@dsf.cdf            | 345325   | 4354546 |
|  5 | shyamlal        | shyam@gmail.com       | 7868756  | 4354546 |
+----+-----------------+-----------------------+----------+---------+
5 rows in set (0.001 sec)

MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id =1 ,mobile='343253342' where id =2;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'mobile='343253342' where id =2' at line 1
MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id =1 &&  mobile='343253342' where id =2;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'where id =2' at line 1
MariaDB [tablerow]> update subhash123 set mobile ='4354546' where id =1 & mobile='343253342' where id =2;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'where id =2' at line 1
MariaDB [tablerow]>alter table subhash123 set name='randas' where id;



<!-- search databases -->
MariaDB [demo2]> insert into subhash06 values('subhash','subhash@gmail.com','234345');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [demo2]> select * from subhash06;
Empty set (0.001 sec)

MariaDB [demo2]> insert into subhash06 values(id,'subhash','subhash@gmail.com','234345');
Query OK, 1 row affected (0.091 sec)

MariaDB [demo2]> select * from subhash06;
+----+---------+-------------------+----------+
| id | name    | email             | password |
+----+---------+-------------------+----------+
|  1 | subhash | subhash@gmail.com | 234345   |
+----+---------+-------------------+----------+
1 row in set (0.001 sec)

MariaDB [demo2]> insert into subhash06 values('ratanji','ratanji@gmail.com','234345');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [demo2]> select * from subhash06;
+----+---------+-------------------+----------+
| id | name    | email             | password |
+----+---------+-------------------+----------+
|  1 | subhash | subhash@gmail.com | 234345   |
+----+---------+-------------------+----------+
1 row in set (0.001 sec)

MariaDB [demo2]> insert into subhash06 values(
    -> id,
    -> 'ratan ji',
    -> 'ratanji@gamil.com',
    -> '87788787'),(id,
    -> 'amit',
    -> 'amitkk@gmail.com',
    -> '4534523424'),(id,
    -> 'shyamlal',
    -> 'shyaM@gamil.com',
    -> '342234234');
Query OK, 3 rows affected (0.083 sec)
Records: 3  Duplicates: 0  Warnings: 0

MariaDB [demo2]> select * from subhash06;
+----+----------+-------------------+------------+
| id | name     | email             | password   |
+----+----------+-------------------+------------+
|  1 | subhash  | subhash@gmail.com | 234345     |
|  2 | ratan ji | ratanji@gamil.com | 87788787   |
|  3 | amit     | amitkk@gmail.com  | 4534523424 |
|  4 | shyamlal | shyaM@gamil.com   | 342234234  |
+----+----------+-------------------+------------+
4 rows in set (0.001 sec)

MariaDB [demo2]> insert into subhash06 values('ratanji','ratanji@gmail.com','234345');
ERROR 1136 (21S01): Column count doesn't match value count at row 1
MariaDB [demo2]> insert into subhash06 values('','ratanji','ratanji@gmail.com','234345');
Query OK, 1 row affected, 1 warning (0.046 sec)

MariaDB [demo2]> select * from subhash06;
+----+----------+-------------------+------------+
| id | name     | email             | password   |
+----+----------+-------------------+------------+
|  1 | subhash  | subhash@gmail.com | 234345     |
|  2 | ratan ji | ratanji@gamil.com | 87788787   |
|  3 | amit     | amitkk@gmail.com  | 4534523424 |
|  4 | shyamlal | shyaM@gamil.com   | 342234234  |
|  5 | ratanji  | ratanji@gmail.com | 234345     |
+----+----------+-------------------+------------+
5 rows in set (0.001 sec)

MariaDB [demo2]> update subhash06 set name ='kailash' where id='5';
Query OK, 1 row affected (0.078 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [demo2]> select * from subhash06;
+----+----------+-------------------+------------+
| id | name     | email             | password   |
+----+----------+-------------------+------------+
|  1 | subhash  | subhash@gmail.com | 234345     |
|  2 | ratan ji | ratanji@gamil.com | 87788787   |
|  3 | amit     | amitkk@gmail.com  | 4534523424 |
|  4 | shyamlal | shyaM@gamil.com   | 342234234  |
|  5 | kailash  | ratanji@gmail.com | 234345     |
+----+----------+-------------------+------------+
5 rows in set (0.001 sec)

MariaDB [demo2]> update subhash06 set email ='kailash' where id ='5';
Query OK, 1 row affected (0.081 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [demo2]> update subhash06 set email ='kailash@gmail.com' where id ='5';
Query OK, 1 row affected (0.276 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [demo2]> select * from subhash06;
+----+----------+-------------------+------------+
| id | name     | email             | password   |
+----+----------+-------------------+------------+
|  1 | subhash  | subhash@gmail.com | 234345     |
|  2 | ratan ji | ratanji@gamil.com | 87788787   |
|  3 | amit     | amitkk@gmail.com  | 4534523424 |
|  4 | shyamlal | shyaM@gamil.com   | 342234234  |
|  5 | kailash  | kailash@gmail.com | 234345     |
+----+----------+-------------------+------------+
5 rows in set (0.001 sec)

MariaDB [demo2]> select * from subhash06 name='subhash' and(email='amitkk@gmail.com' or password='234345');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near '='subhash' and(email='amitkk@gmail.com' or password='234345')' at line 1
MariaDB [demo2]> select * from subhash06 where name='subhash' and(email='amitkk@gmail.com' or password='234345');
+----+---------+-------------------+----------+
| id | name    | email             | password |
+----+---------+-------------------+----------+
|  1 | subhash | subhash@gmail.com | 234345   |
+----+---------+-------------------+----------+
1 row in set (0.001 sec)

MariaDB [demo2]> insert into subhash06 values(
    -> id int,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '987654321'),(id int
    -> 'subhash',
    -> 'subhash@gmail.com',
    -> '12345'),(id int
    -> 'subhash',
    -> 'subhash@gamil.com',
    -> '666666'),
    -> (id int
    -> 'subhash',
    -> 'subhash@gmail.com',
    -> '99999'),
    -> (id int
    -> 'subhash',
    -> 'kailash@gmail.com',
    -> '777777');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'int,
'subhash',
'subhashkumawat@gamil.com',
'987654321'),(id int
'subhash',
'...' at line 2
MariaDB [demo2]> insert into subhash06 values(
    -> id int,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '987654321'),(id int
    -> 'subhash',
    -> 'subhash@gmail.com',
    -> '12345'),(id int
    -> 'subhash',
    -> 'subhash@gamil.com',
    -> '666666'),
    -> (id int
    -> 'subhash',
    -> 'subhash@gmail.com',
    -> '99999'),
    -> (id int
    -> 'subhash',
    -> 'kailash@gmail.com',
    -> '777777');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use
near 'int,
'subhash',
'subhashkumawat@gamil.com',
'987654321'),(id int
'subhash',
'...' at line 2
MariaDB [demo2]> insert into subhash06 values(
    -> id ,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '987654321'),(id,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '987654321'),(id,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '666666'),
    -> (id,
    -> 'subhash',
    -> 'subhashkumawat@gamil.com',
    -> '99999'),
    -> (id ,
    -> 'subhash',
    -> 'kailash@gmail.com',
    -> '777777');
Query OK, 5 rows affected (0.278 sec)
Records: 5  Duplicates: 0  Warnings: 0

MariaDB [demo2]> select * from subhash06;
+----+----------+--------------------------+------------+
| id | name     | email                    | password   |
+----+----------+--------------------------+------------+
|  1 | subhash  | subhash@gmail.com        | 234345     |
|  2 | ratan ji | ratanji@gamil.com        | 87788787   |
|  3 | amit     | amitkk@gmail.com         | 4534523424 |
|  4 | shyamlal | shyaM@gamil.com          | 342234234  |
|  5 | kailash  | kailash@gmail.com        | 234345     |
|  6 | subhash  | subhashkumawat@gamil.com | 987654321  |
|  7 | subhash  | subhashkumawat@gamil.com | 987654321  |
|  8 | subhash  | subhashkumawat@gamil.com | 666666     |
|  9 | subhash  | subhashkumawat@gamil.com | 99999      |
| 10 | subhash  | kailash@gmail.com        | 777777     |
+----+----------+--------------------------+------------+
10 rows in set (0.001 sec)

MariaDB [demo2]> select *from subhash06 where name='subhash' and(email='subhashkumawat@gmail.com' or password='99999');
+----+---------+--------------------------+----------+
| id | name    | email                    | password |
+----+---------+--------------------------+----------+
|  9 | subhash | subhashkumawat@gamil.com | 99999    |
+----+---------+--------------------------+----------+
1 row in set (0.001 sec)

MariaDB [demo2]> select *from subhash06 where name='subhash' and(email='subhashkumawat@gmail.com');
Empty set (0.001 sec)

MariaDB [demo2]> select *from subhash06 where name='subhash' and(email='subhashkumawat@gmail.com' or email='subhash@gmail.com');
+----+---------+-------------------+----------+
| id | name    | email             | password |
+----+---------+-------------------+----------+
|  1 | subhash | subhash@gmail.com | 234345   |
+----+---------+-------------------+----------+
1 row in set (0.001 sec)

MariaDB [demo2]> select *from subhash06 where name='subhash' and(email='subhashkumawat@gamil.com' or email='subhash@gmail.com');
+----+---------+--------------------------+-----------+
| id | name    | email                    | password  |
+----+---------+--------------------------+-----------+
|  1 | subhash | subhash@gmail.com        | 234345    |
|  6 | subhash | subhashkumawat@gamil.com | 987654321 |
|  7 | subhash | subhashkumawat@gamil.com | 987654321 |
|  8 | subhash | subhashkumawat@gamil.com | 666666    |
|  9 | subhash | subhashkumawat@gamil.com | 99999     |
+----+---------+--------------------------+-----------+
5 rows in set (0.001 sec)

MariaDB [demo2]> Bye
Ctrl-C -- exit!

D:\xampp\mysql\bin>