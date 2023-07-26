Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>..cd
'..cd' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\dell>..cd
'..cd' is not recognized as an internal or external command,
operable program or batch file.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 210
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases
    -> ;
+--------------------+
| Database           |
+--------------------+
| aksoping           |
| amitkumawat        |
| database2          |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| rajesh kumawat     |
| soping             |
| structure          |
| test               |
+--------------------+
11 rows in set (0.001 sec)

MariaDB [(none)]> use aksoping;
Database changed
MariaDB [aksoping]> show tables
    -> ;
+--------------------+
| Tables_in_aksoping |
+--------------------+
| old_student        |
| orderstable        |
| results            |
+--------------------+
3 rows in set (0.001 sec)

MariaDB [aksoping]> select* from old_student;
+----+---------------------+------------+------+--------+-------------------------+
| id | name                | percentage | age  | gender | city                    |
+----+---------------------+------------+------+--------+-------------------------+
|  1 | nitin jangid        | 66.30      |   22 | male   | lunwa 301509            |
|  2 | kailash kumar meena | 80.60      |   22 | male   | jaipur 303030           |
|  3 | kavta kumawat       | 90.63      |   20 | female | jaipur,303310           |
|  4 | rashmi sharma       | 60.50      |   19 | female | jaipur                  |
|  5 | kavita kumawat      | 80.30      |   23 | female | mandha bhim singh       |
|  6 | rekha meena         | 92.20      |   22 | female | bhadwa                  |
|  7 | nitesh choudhary    | 80.20      |   21 | male   | jaipur                  |
|  8 | rakesh meena        | 82.20      |   21 | male   | nawa                    |
|  9 | rakesh kumar        | 50.50      |   20 | male   | jaipur hatoj            |
| 10 | kamlesh kumar       | 45.20      |   22 | male   | jaipur mandha           |
| 11 | nirmala choudhary   | 99.20      |   22 | female | jaipur govindpura       |
| 12 | amit kumawat        | 98.20      |   23 | male   | bhaislana jaipur        |
| 13 | nirmala kumawat     | 60.60      |   22 | female | khatu                   |
| 14 | kavita kumawat      | 65.55      |   22 | male   | hingoniya               |
| 15 | rakesh kumar        | 54.20      |   23 | male   | nawa nagour             |
| 16 | rekha kumawat       | 63.32      |   22 | female | mandha bhim singh       |
| 17 | vishal kumawat      | 66.24      |   20 | male   | jobner                  |
| 18 | subhash kumawat     | 80.30      |   25 | male   | lunwa                   |
| 19 | kavita kumawat      | 87.32      |   22 | female | kalwar pachar           |
| 20 | jagdish kumawat     | 54.23      |   25 | male   | badiwalo ki dhani lunwa |
| 21 | seema kumawat       | 99.99      |   23 | female | mandha bhim singh       |
| 22 | seema choudhary     | 88.26      |   23 | female | jaipur                  |
| 23 | kailash kumawat     | 80.60      |   22 | male   | jaipur 303020           |
| 24 | rakesh meena        | 34.20      |   21 | male   | lunwa                   |
| 25 | rakesh kumar        | 80.30      |   22 | male   | mandha bhim singh       |
+----+---------------------+------------+------+--------+-------------------------+
25 rows in set (0.000 sec)

MariaDB [aksoping]> select* from orderstable;
+----+-------------+--------------+-------+------------+--------------+
| id | nameid      | percentageid | ageid | genderid   | cityid       |
+----+-------------+--------------+-------+------------+--------------+
|  1 | ak7777      | pr333        |    23 | male987654 | jaipur32545  |
|  2 | sj876       | sndf8765     |    54 | jhgfvb     | kjhg         |
|  3 | lksjf       | skdfjsd      |   544 | jkknh      | jkhkhj       |
|  4 | jkhdfsdf    | ghghghg      |   874 | df         | snfjsdnfkj   |
|  5 | wkjehfjhd   | gggejfk      |   987 | nkfjsdf    | kjfs         |
|  6 | ksjdnfjfs   | kdfksjdfksj  |   878 | kljkhgh    | kjhgjkhg     |
|  7 | fsdkjfhsdhf | lkdfjksknjf  |   666 | lmsdkjfs   | smfdkjsndkjn |
|  8 | df,mnskjf   | .,mdfkjsdhuf |   987 | sdnfsdbf   | d,ffnkfdjfn  |
|  9 | sdjfnshdf   | kdkfjfksdf   |   899 | ndfjdfnkj  | ffdngkdjn    |
| 10 | sdkjfnsu    | dfnfdsuyf    |  9887 | nf         | jnjhsdfs     |
| 11 | fskdfhk     | jdkfhsdh     |    87 | mjgf       | jkg          |
| 12 | dfjfdkfjh   | lkjgd        |   787 | kjdfnjjg   | jj           |
| 13 | kjfksk      | kjfkj        |   556 | kjhg       | jhg          |
| 14 | kjhug       | kjhg         |   545 | kjiuhyg    | kjhg         |
| 15 | jhgjh       | jhgvjhg      |  5454 | uytgf      | kjhuygtf     |
| 16 | kjuhygf     | kjhgf        | 65564 | kjhgf      | kjhg         |
| 17 | jkuytf      | jiuytgf      |  8878 | oijhgb     | ijhgbkjhg    |
| 18 | kjhugf      | kjuhyg       |  5445 | kjhgf      | kjhug        |
| 19 | iuytgf      | kijhg        |    54 | iuytg      | iuytf        |
| 20 | uytgf       | kjuhygfc     |  3521 | juygtf     | ytrfd        |
| 21 | kjhg        | kujlkjgd     |  5454 | kjdfnjjg   | jj           |
| 22 | kjhug       | kjhg         |   545 | kiuytghjuy | kjhg         |
| 23 | kjjuhygjh   | gggejfk      |   987 | nkfjsdf    | kjfs         |
| 24 | lkjhgf      | jhgvjhg      |  5454 | uytgf      | kjhuygtf     |
| 25 | kjfksk      | kjfkj        |   556 | kjhgiuytg  | jhg          |
+----+-------------+--------------+-------+------------+--------------+
25 rows in set (0.000 sec)

MariaDB [aksoping]> select* from results;
+----+-------------------+------------+------+--------+-------------------------+
| id | name              | percentage | age  | gender | city                    |
+----+-------------------+------------+------+--------+-------------------------+
|  1 | amit kumawat      | 75.50      |   23 | male   | lunwa 301509            |
|  2 | kailash kumawat   | 80.60      |   22 | male   | jaipur 303302           |
|  3 | kavta kumawat     | 90.63      |   20 | female | jaipur,303310           |
|  4 | rashmi sharma     | 60.50      |   19 | female | jaipur                  |
|  5 | kavita kumawat    | 54.52      |   23 | female | mandha bhim singh       |
|  6 | rekha meena       | 92.20      |   22 | female | bhadwa                  |
|  7 | nitesh choudhary  | 80.20      |   21 | male   | jaipur                  |
|  8 | rakesh meena      | 82.20      |   21 | male   | nawa                    |
|  9 | jitendra kumar    | 66.00      |   20 | male   | jaipur chota mohlla     |
| 10 | kamlesh kumar     | 45.20      |   22 | male   | jaipur mandha           |
| 11 | nirmala choudhary | 99.20      |   22 | female | jaipur govindpura       |
| 12 | amit kumawat      | 98.20      |   23 | male   | bhaislana jaipur        |
| 13 | nirmala kumawat   | 60.60      |   22 | female | khatu                   |
| 14 | kavita kumawat    | 65.55      |   22 | male   | hingoniya               |
| 15 | rakesh kumar      | 54.20      |   23 | male   | nawa nagour             |
| 16 | rekha kumawat     | 63.32      |   22 | female | mandha bhim singh       |
| 17 | vishal kumawat    | 66.24      |   20 | male   | jobner                  |
| 18 | subhash kumawat   | 80.30      |   25 | male   | lunwa                   |
| 19 | kavita kumawat    | 87.32      |   22 | female | kalwar pachar           |
| 20 | jagdish kumawat   | 54.23      |   25 | male   | badiwalo ki dhani lunwa |
| 21 | seema kumawat     | 99.99      |   23 | female | lunwa                   |
| 22 | seema choudhary   | 88.26      |   23 | female | jaipur                  |
| 23 | kailash kumawat   | 80.60      |   22 | male   | jaipur 303020           |
| 24 | rakesh meena      | 34.20      |   21 | male   | lunwa                   |
| 25 | rakesh kumar      | 80.30      |   22 | male   | mandha bhim singh       |
+----+-------------------+------------+------+--------+-------------------------+
25 rows in set (0.000 sec)

MariaDB [aksoping]> update results set age=age + 20 where id=2;
Query OK, 1 row affected (0.452 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [aksoping]> select * from results;
+----+-------------------+------------+------+--------+-------------------------+
| id | name              | percentage | age  | gender | city                    |
+----+-------------------+------------+------+--------+-------------------------+
|  1 | amit kumawat      | 75.50      |   23 | male   | lunwa 301509            |
|  2 | kailash kumawat   | 80.60      |   42 | male   | jaipur 303302           |
|  3 | kavta kumawat     | 90.63      |   20 | female | jaipur,303310           |
|  4 | rashmi sharma     | 60.50      |   19 | female | jaipur                  |
|  5 | kavita kumawat    | 54.52      |   23 | female | mandha bhim singh       |
|  6 | rekha meena       | 92.20      |   22 | female | bhadwa                  |
|  7 | nitesh choudhary  | 80.20      |   21 | male   | jaipur                  |
|  8 | rakesh meena      | 82.20      |   21 | male   | nawa                    |
|  9 | jitendra kumar    | 66.00      |   20 | male   | jaipur chota mohlla     |
| 10 | kamlesh kumar     | 45.20      |   22 | male   | jaipur mandha           |
| 11 | nirmala choudhary | 99.20      |   22 | female | jaipur govindpura       |
| 12 | amit kumawat      | 98.20      |   23 | male   | bhaislana jaipur        |
| 13 | nirmala kumawat   | 60.60      |   22 | female | khatu                   |
| 14 | kavita kumawat    | 65.55      |   22 | male   | hingoniya               |
| 15 | rakesh kumar      | 54.20      |   23 | male   | nawa nagour             |
| 16 | rekha kumawat     | 63.32      |   22 | female | mandha bhim singh       |
| 17 | vishal kumawat    | 66.24      |   20 | male   | jobner                  |
| 18 | subhash kumawat   | 80.30      |   25 | male   | lunwa                   |
| 19 | kavita kumawat    | 87.32      |   22 | female | kalwar pachar           |
| 20 | jagdish kumawat   | 54.23      |   25 | male   | badiwalo ki dhani lunwa |
| 21 | seema kumawat     | 99.99      |   23 | female | lunwa                   |
| 22 | seema choudhary   | 88.26      |   23 | female | jaipur                  |
| 23 | kailash kumawat   | 80.60      |   22 | male   | jaipur 303020           |
| 24 | rakesh meena      | 34.20      |   21 | male   | lunwa                   |
| 25 | rakesh kumar      | 80.30      |   22 | male   | mandha bhim singh       |
+----+-------------------+------------+------+--------+-------------------------+
25 rows in set (0.000 sec)

MariaDB [aksoping]> update results set age=age - 20 where id=2;
Query OK, 1 row affected (0.313 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [aksoping]> select* from results;
+----+-------------------+------------+------+--------+-------------------------+
| id | name              | percentage | age  | gender | city                    |
+----+-------------------+------------+------+--------+-------------------------+
|  1 | amit kumawat      | 75.50      |   23 | male   | lunwa 301509            |
|  2 | kailash kumawat   | 80.60      |   22 | male   | jaipur 303302           |
|  3 | kavta kumawat     | 90.63      |   20 | female | jaipur,303310           |
|  4 | rashmi sharma     | 60.50      |   19 | female | jaipur                  |
|  5 | kavita kumawat    | 54.52      |   23 | female | mandha bhim singh       |
|  6 | rekha meena       | 92.20      |   22 | female | bhadwa                  |
|  7 | nitesh choudhary  | 80.20      |   21 | male   | jaipur                  |
|  8 | rakesh meena      | 82.20      |   21 | male   | nawa                    |
|  9 | jitendra kumar    | 66.00      |   20 | male   | jaipur chota mohlla     |
| 10 | kamlesh kumar     | 45.20      |   22 | male   | jaipur mandha           |
| 11 | nirmala choudhary | 99.20      |   22 | female | jaipur govindpura       |
| 12 | amit kumawat      | 98.20      |   23 | male   | bhaislana jaipur        |
| 13 | nirmala kumawat   | 60.60      |   22 | female | khatu                   |
| 14 | kavita kumawat    | 65.55      |   22 | male   | hingoniya               |
| 15 | rakesh kumar      | 54.20      |   23 | male   | nawa nagour             |
| 16 | rekha kumawat     | 63.32      |   22 | female | mandha bhim singh       |
| 17 | vishal kumawat    | 66.24      |   20 | male   | jobner                  |
| 18 | subhash kumawat   | 80.30      |   25 | male   | lunwa                   |
| 19 | kavita kumawat    | 87.32      |   22 | female | kalwar pachar           |
| 20 | jagdish kumawat   | 54.23      |   25 | male   | badiwalo ki dhani lunwa |
| 21 | seema kumawat     | 99.99      |   23 | female | lunwa                   |
| 22 | seema choudhary   | 88.26      |   23 | female | jaipur                  |
| 23 | kailash kumawat   | 80.60      |   22 | male   | jaipur 303020           |
| 24 | rakesh meena      | 34.20      |   21 | male   | lunwa                   |
| 25 | rakesh kumar      | 80.30      |   22 | male   | mandha bhim singh       |
+----+-------------------+------------+------+--------+-------------------------+
25 rows in set (0.000 sec)

MariaDB [aksoping]> use soping;
Database changed
MariaDB [soping]> show tables;
+------------------+
| Tables_in_soping |
+------------------+
| costumer         |
| items            |
| orders           |
| wender           |
+------------------+
4 rows in set (0.001 sec)

MariaDB [soping]> select* from costumer;
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 10 | sonu kumawat    | sonu@gmal.com     | 9785964646 |
| 11 | rakesh kumawat  | rakesh@gmail.com  | 8855446699 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 14 | viky kumawat    | viky@gmail.com    | 7788554488 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
15 rows in set (0.046 sec)

MariaDB [soping]> select* from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 0000-00-00 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.307 sec)

MariaDB [soping]> update orders set created_id='2020-02-20' where id=10;
Query OK, 1 row affected (0.098 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [soping]> select* from table;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'table' at line 1
MariaDB [soping]> select* from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where amount < 800;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
11 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where amount >500;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
+----+--------+-------------+-----------+----------+------------+
6 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where amount =>500;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '>500' at line 1
MariaDB [soping]> select* from orders where amount >= 500;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
+----+--------+-------------+-----------+----------+------------+
6 rows in set (0.000 sec)

MariaDB [soping]> update orders amount=amount || 'ak' where id=6;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '=amount || 'ak' where id=6' at line 1
MariaDB [soping]> select* from orders where amount=(900,999,750,1000) and wender_id >20 and wender_id >10 and created_id '2023-01-11';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''2023-01-11'' at line 1
MariaDB [soping]> select* from orders where amount=('900','999','750','1000');
ERROR 4078 (HY000): Illegal parameter data types varchar and row for operation '='
MariaDB [soping]> select* from costumer;
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 10 | sonu kumawat    | sonu@gmal.com     | 9785964646 |
| 11 | rakesh kumawat  | rakesh@gmail.com  | 8855446699 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 14 | viky kumawat    | viky@gmail.com    | 7788554488 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select* from costumer where name=('amit kumawat','shyam lal','sonu kumawat') and email='aman@gmail.com';
ERROR 4078 (HY000): Illegal parameter data types varchar and row for operation '='
MariaDB [soping]> select* from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where amount=1000 and and date='2023-01-10';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and date='2023-01-10'' at line 1
MariaDB [soping]> select* from orders where amount='1000';
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
+----+--------+-------------+-----------+----------+------------+
1 row in set (0.000 sec)

MariaDB [soping]> select* from orders where amount='1000' and items_id=('33','43','68';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1
MariaDB [soping]> select* from orders where amount='1000' and items_id='33' and wender_id='35';
Empty set (0.000 sec)

MariaDB [soping]> select* from orders where amount='1000' and items_id='33' ;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
+----+--------+-------------+-----------+----------+------------+
1 row in set (0.000 sec)

MariaDB [soping]> select* from orders where amount='1000' and items_id='36';
Empty set (0.000 sec)

MariaDB [soping]> select* from orders where not amount='1000';
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
14 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where amount='1000' and amount='233';
Empty set (0.000 sec)

MariaDB [soping]> select* from orders where amount='1000' or amount='233';
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
+----+--------+-------------+-----------+----------+------------+
4 rows in set (0.000 sec)

MariaDB [soping]> select distinct * from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select* from orders where distinct amount;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'distinct amount' at line 1
MariaDB [soping]> select orders.amount from orders;
+--------+
| amount |
+--------+
| 1000   |
| 599    |
| 233    |
| 452    |
| 300    |
| 399    |
| 233    |
| 900    |
| 999    |
| 750    |
| 239    |
| 233    |
| 99     |
| 10000  |
| 455    |
+--------+
15 rows in set (0.000 sec)

MariaDB [soping]> SELECT DISTINCT orders.amount FROM orders;
+--------+
| amount |
+--------+
| 1000   |
| 599    |
| 233    |
| 452    |
| 300    |
| 399    |
| 900    |
| 999    |
| 750    |
| 239    |
| 99     |
| 10000  |
| 455    |
+--------+
13 rows in set (0.001 sec)

MariaDB [soping]> SELECT DISTINCT orders.amount,orders.id FROM orders;
+--------+----+
| amount | id |
+--------+----+
| 1000   |  1 |
| 599    |  2 |
| 233    |  3 |
| 452    |  4 |
| 300    |  5 |
| 399    |  6 |
| 233    |  7 |
| 900    |  8 |
| 999    |  9 |
| 750    | 10 |
| 239    | 11 |
| 233    | 12 |
| 99     | 13 |
| 10000  | 14 |
| 455    | 15 |
+--------+----+
15 rows in set (0.000 sec)

MariaDB [soping]> select all * from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.001 sec)

MariaDB [soping]> select * from orders where amount ('750','233','900','300');
ERROR 1305 (42000): FUNCTION soping.amount does not exist
MariaDB [soping]> select * from orders where amount in ('750','233','900','300');
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
+----+--------+-------------+-----------+----------+------------+
6 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where amount not in ('750','233','900','300');
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
9 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where amount between 100 and 1000;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
13 rows in set (0.001 sec)

MariaDB [soping]> select * from orders where amount between 234 and 700;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
6 rows in set (0.000 sec)

MariaDB [soping]> select * from orders order by amount;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.001 sec)

MariaDB [soping]> select * from orders order by asc;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'asc' at line 1
MariaDB [soping]> select * from orders order by amount asc;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select * from orders order by amount desc;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select top 5 * from orders;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '5 * from orders' at line 1
MariaDB [soping]> select top 3 * orders;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '3 * orders' at line 1
MariaDB [soping]> select * from orders limit 3;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
+----+--------+-------------+-----------+----------+------------+
3 rows in set (0.001 sec)

MariaDB [soping]> select top 8 * from orders;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '8 * from orders' at line 1
MariaDB [soping]> select * from orders fetch first 3 rows only;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'fetch first 3 rows only' at line 1
MariaDB [soping]> select * from orders fetch amount 50 percent rows only
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'fetch amount 50 percent rows only' at line 1
MariaDB [soping]> select * from orders where amount='233' limit 3;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
+----+--------+-------------+-----------+----------+------------+
3 rows in set (0.001 sec)

MariaDB [soping]> select * from orders where amount='233' limit 2;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
+----+--------+-------------+-----------+----------+------------+
2 rows in set (0.000 sec)

MariaDB [soping]> select min(amount) from orders;
+-------------+
| min(amount) |
+-------------+
| 1000        |
+-------------+
1 row in set (0.000 sec)

MariaDB [soping]> select max(amount) from orders;
+-------------+
| max(amount) |
+-------------+
| 999         |
+-------------+
1 row in set (0.000 sec)

MariaDB [soping]> select count(amount) form orders;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'orders' at line 1
MariaDB [soping]> select count(amount) from orders;
+---------------+
| count(amount) |
+---------------+
|            15 |
+---------------+
1 row in set (0.000 sec)

MariaDB [soping]> select avg(amount) from orders;
+--------------------+
| avg(amount)        |
+--------------------+
| 1126.0666666666666 |
+--------------------+
1 row in set (0.000 sec)

MariaDB [soping]> select sum(amount) from orders;
+-------------+
| sum(amount) |
+-------------+
|       16891 |
+-------------+
1 row in set (0.329 sec)

MariaDB [soping]> select * from costumer;
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 10 | sonu kumawat    | sonu@gmal.com     | 9785964646 |
| 11 | rakesh kumawat  | rakesh@gmail.com  | 8855446699 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 14 | viky kumawat    | viky@gmail.com    | 7788554488 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where name in ('sonu','dheeraj kumawat','lokesh kumawat');
ERROR 1054 (42S22): Unknown column 'name' in 'where clause'
MariaDB [soping]> select * from orders where name in ('sonu', 'dheeraj kumawat','lokesh kumawat');
ERROR 1054 (42S22): Unknown column 'name' in 'where clause'
MariaDB [soping]> select * from costumer where name in ('sonu kumawat', 'rakesh kumawat', 'viky kumawat');
+----+----------------+------------------+------------+
| id | name           | email            | mobile     |
+----+----------------+------------------+------------+
| 10 | sonu kumawat   | sonu@gmal.com    | 9785964646 |
| 11 | rakesh kumawat | rakesh@gmail.com | 8855446699 |
| 14 | viky kumawat   | viky@gmail.com   | 7788554488 |
+----+----------------+------------------+------------+
3 rows in set (0.000 sec)

MariaDB [soping]> select * from costumer where name not in ('sonu kumawat', 'rakesh kumawat', 'viky kumawat');
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
12 rows in set (0.000 sec)

MariaDB [soping]> select * from costumer where name in ( select name from orders);
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 10 | sonu kumawat    | sonu@gmal.com     | 9785964646 |
| 11 | rakesh kumawat  | rakesh@gmail.com  | 8855446699 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 14 | viky kumawat    | viky@gmail.com    | 7788554488 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
15 rows in set (0.001 sec)

MariaDB [soping]> select * from orders where name in (select name from costumer);
ERROR 1054 (42S22): Unknown column 'name' in 'IN/ALL/ANY subquery'
MariaDB [soping]> select * from orders where amount between 100 and 500;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
8 rows in set (0.001 sec)

MariaDB [soping]> select * from orders where amount not between 100 and 500;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
+----+--------+-------------+-----------+----------+------------+
7 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where amount between 110 and 500 and wender_id not in (39,40,32);
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
7 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where amount between 110 and 500 and wender_id not in (39,40,22);
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
8 rows in set (0.000 sec)

MariaDB [soping]> select * from orders where amount between 110 and 500 and wender_id not in (27,22,32);
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
6 rows in set (0.000 sec)

MariaDB [soping]> select amount as amounts from orders;
+---------+
| amounts |
+---------+
| 1000    |
| 599     |
| 233     |
| 452     |
| 300     |
| 399     |
| 233     |
| 900     |
| 999     |
| 750     |
| 239     |
| 233     |
| 99      |
| 10000   |
| 455     |
+---------+
15 rows in set (0.001 sec)

MariaDB [soping]> select * from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | 11          | 22        | 33       | 2023-01-11 |
|  2 | 599    | 12          | 22        | 32       | 2023-01-10 |
|  3 | 233    | 13          | 23        | 33       | 2022-12-12 |
|  4 | 452    | 14          | 24        | 34       | 2023-01-17 |
|  5 | 300    | 15          | 23        | 35       | 2023-01-08 |
|  6 | 399    | 16          | 26        | 36       | 2023-01-23 |
|  7 | 233    | 17          | 27        | 37       | 2023-01-15 |
|  8 | 900    | 18          | 23        | 38       | 2023-01-16 |
|  9 | 999    | 19          | 29        | 39       | 2023-01-13 |
| 10 | 750    | 20          | 30        | 40       | 2020-02-20 |
| 11 | 239    | 21          | 23        | 41       | 2022-10-04 |
| 12 | 233    | 22          | 32        | 42       | 2022-04-05 |
| 13 | 99     | 23          | 33        | 43       | 2021-12-13 |
| 14 | 10000  | 24          | 34        | 44       | 2022-11-06 |
| 15 | 455    | 25          | 35        | 45       | 2022-10-06 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select orders.id,orders.amount from orders
    -> left join orders on costumer.id=orders.id
    -> order by costumer.name;
ERROR 1066 (42000): Not unique table/alias: 'orders'
MariaDB [soping]> select orders.id,orders.amount from orders left join orders on costumer.id=orders.id ;
ERROR 1066 (42000): Not unique table/alias: 'orders'
MariaDB [soping]> select orders.id,orders.amount from orders;
+----+--------+
| id | amount |
+----+--------+
|  1 | 1000   |
|  2 | 599    |
|  3 | 233    |
|  4 | 452    |
|  5 | 300    |
|  6 | 399    |
|  7 | 233    |
|  8 | 900    |
|  9 | 999    |
| 10 | 750    |
| 11 | 239    |
| 12 | 233    |
| 13 | 99     |
| 14 | 10000  |
| 15 | 455    |
+----+--------+
15 rows in set (0.001 sec)

MariaDB [soping]> select orders.id,orders.amount from orders left join
    -> costumer on orders.id=costumer.id;
+----+--------+
| id | amount |
+----+--------+
|  1 | 1000   |
|  2 | 599    |
|  3 | 233    |
|  4 | 452    |
|  5 | 300    |
|  6 | 399    |
|  7 | 233    |
|  8 | 900    |
|  9 | 999    |
| 10 | 750    |
| 11 | 239    |
| 12 | 233    |
| 13 | 99     |
| 14 | 10000  |
| 15 | 455    |
+----+--------+
15 rows in set (0.000 sec)

MariaDB [soping]> select orders.id,orders.amount from orders left join
    -> costumer on orders.id=costumer.id;
+----+--------+
| id | amount |
+----+--------+
|  1 | 1000   |
|  2 | 599    |
|  3 | 233    |
|  4 | 452    |
|  5 | 300    |
|  6 | 399    |
|  7 | 233    |
|  8 | 900    |
|  9 | 999    |
| 10 | 750    |
| 11 | 239    |
| 12 | 233    |
| 13 | 99     |
| 14 | 10000  |
| 15 | 455    |
+----+--------+
15 rows in set (0.001 sec)

MariaDB [soping]> select orders.id,orders.amount from orders left join
    -> costumer on orders.id=costumer.id
    -> left join wender.id=orders.id;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.id' at line 3
MariaDB [soping]> select * from costumer ;
+----+-----------------+-------------------+------------+
| id | name            | email             | mobile     |
+----+-----------------+-------------------+------------+
|  1 | amit kumawat    | amit@gmail.com    | 97854646   |
|  2 | shyam lal       | syam@gmail.com    | 8546857458 |
|  3 | subhash kumawat | subhash@gmail.com | 9965845725 |
|  4 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
|  5 | viksah kumawat  | vikash@gmail.com  | 8855475865 |
|  6 | sunil choudhary | suni@gmail.com    | 5544758546 |
|  7 | ankit kumawat   | ankit@mail.com    | 7788994455 |
|  8 | dheeraj kumawat | dheeraj@gmail.com | 4455887799 |
|  9 | aman kumawat    | aman@gmail.com    | 1124589798 |
| 10 | sonu kumawat    | sonu@gmal.com     | 9785964646 |
| 11 | rakesh kumawat  | rakesh@gmail.com  | 8855446699 |
| 12 | jiendra kumawat | kumawat@gmail.com | 8877445599 |
| 13 | lokesh kumawat  | lokesh@gmail.com  | 8855478595 |
| 14 | viky kumawat    | viky@gmail.com    | 7788554488 |
| 15 | dinesh kumawat  | kmwt@gmail.com    | 8877455996 |
+----+-----------------+-------------------+------------+
15 rows in set (0.001 sec)

MariaDB [soping]> select costumer.name,costumer.email from costumer
    -> union
    -> select orders.id,orders.amount from orders;
+-----------------+-------------------+
| name            | email             |
+-----------------+-------------------+
| amit kumawat    | amit@gmail.com    |
| shyam lal       | syam@gmail.com    |
| subhash kumawat | subhash@gmail.com |
| vishal kumawat  | vishal@gmail.com  |
| viksah kumawat  | vikash@gmail.com  |
| sunil choudhary | suni@gmail.com    |
| ankit kumawat   | ankit@mail.com    |
| dheeraj kumawat | dheeraj@gmail.com |
| aman kumawat    | aman@gmail.com    |
| sonu kumawat    | sonu@gmal.com     |
| rakesh kumawat  | rakesh@gmail.com  |
| jiendra kumawat | kumawat@gmail.com |
| lokesh kumawat  | lokesh@gmail.com  |
| viky kumawat    | viky@gmail.com    |
| dinesh kumawat  | kmwt@gmail.com    |
| 1               | 1000              |
| 2               | 599               |
| 3               | 233               |
| 4               | 452               |
| 5               | 300               |
| 6               | 399               |
| 7               | 233               |
| 8               | 900               |
| 9               | 999               |
| 10              | 750               |
| 11              | 239               |
| 12              | 233               |
| 13              | 99                |
| 14              | 10000             |
| 15              | 455               |
+-----------------+-------------------+
30 rows in set (0.001 sec)

MariaDB [soping]> select costumer.name,costumer.email from costumer
    -> union all
    -> select orders.id,orders.amount from orders;
+-----------------+-------------------+
| name            | email             |
+-----------------+-------------------+
| amit kumawat    | amit@gmail.com    |
| shyam lal       | syam@gmail.com    |
| subhash kumawat | subhash@gmail.com |
| vishal kumawat  | vishal@gmail.com  |
| viksah kumawat  | vikash@gmail.com  |
| sunil choudhary | suni@gmail.com    |
| ankit kumawat   | ankit@mail.com    |
| dheeraj kumawat | dheeraj@gmail.com |
| aman kumawat    | aman@gmail.com    |
| sonu kumawat    | sonu@gmal.com     |
| rakesh kumawat  | rakesh@gmail.com  |
| jiendra kumawat | kumawat@gmail.com |
| lokesh kumawat  | lokesh@gmail.com  |
| viky kumawat    | viky@gmail.com    |
| dinesh kumawat  | kmwt@gmail.com    |
| 1               | 1000              |
| 2               | 599               |
| 3               | 233               |
| 4               | 452               |
| 5               | 300               |
| 6               | 399               |
| 7               | 233               |
| 8               | 900               |
| 9               | 999               |
| 10              | 750               |
| 11              | 239               |
| 12              | 233               |
| 13              | 99                |
| 14              | 10000             |
| 15              | 455               |
+-----------------+-------------------+
30 rows in set (0.001 sec)

MariaDB [soping]> select count(costumer), name
    -> from costumer
    -> group by name;
ERROR 1054 (42S22): Unknown column 'costumer' in 'field list'
MariaDB [soping]> select count(costumer.id), name
    -> from costumer
    -> group by name;
+--------------------+-----------------+
| count(costumer.id) | name            |
+--------------------+-----------------+
|                  1 | aman kumawat    |
|                  1 | amit kumawat    |
|                  1 | ankit kumawat   |
|                  1 | dheeraj kumawat |
|                  1 | dinesh kumawat  |
|                  1 | jiendra kumawat |
|                  1 | lokesh kumawat  |
|                  1 | rakesh kumawat  |
|                  1 | shyam lal       |
|                  1 | sonu kumawat    |
|                  1 | subhash kumawat |
|                  1 | sunil choudhary |
|                  1 | viksah kumawat  |
|                  1 | viky kumawat    |
|                  1 | vishal kumawat  |
+--------------------+-----------------+
15 rows in set (0.001 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                1 | 1000   |
|                1 | 10000  |
|                3 | 233    |
|                1 | 239    |
|                1 | 300    |
|                1 | 399    |
|                1 | 452    |
|                1 | 455    |
|                1 | 599    |
|                1 | 750    |
|                1 | 900    |
|                1 | 99     |
|                1 | 999    |
+------------------+--------+
13 rows in set (0.001 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                1 | 1000   |
|                1 | 10000  |
|                3 | 233    |
|                1 | 239    |
|                1 | 300    |
|                1 | 399    |
|                1 | 452    |
|                1 | 455    |
|                1 | 599    |
|                1 | 750    |
|                1 | 900    |
|                1 | 99     |
|                1 | 999    |
+------------------+--------+
13 rows in set (0.001 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> order by count(orders.id) desc;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                3 | 233    |
|                1 | 455    |
|                1 | 239    |
|                1 | 900    |
|                1 | 452    |
|                1 | 1000   |
|                1 | 10000  |
|                1 | 750    |
|                1 | 399    |
|                1 | 99     |
|                1 | 999    |
|                1 | 300    |
|                1 | 599    |
+------------------+--------+
13 rows in set (0.000 sec)

MariaDB [soping]>
MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> order by count(orders.id) desc;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                3 | 233    |
|                2 | 999    |
|                2 | 599    |
|                1 | 455    |
|                1 | 239    |
|                1 | 900    |
|                1 | 452    |
|                1 | 1000   |
|                1 | 10000  |
|                1 | 750    |
|                1 | 399    |
|                1 | 99     |
|                1 | 300    |
+------------------+--------+
13 rows in set (0.000 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> order by count(orders.id) asc;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                1 | 455    |
|                1 | 239    |
|                1 | 900    |
|                1 | 452    |
|                1 | 1000   |
|                1 | 10000  |
|                1 | 750    |
|                1 | 399    |
|                1 | 99     |
|                1 | 300    |
|                2 | 999    |
|                2 | 599    |
|                3 | 233    |
+------------------+--------+
13 rows in set (0.001 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> order by count(orders.id) asc
    -> having count
    -> (orders.id) >3;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'having count
(orders.id) >3' at line 5
MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> having count(orders.id) >3;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                4 | 999    |
+------------------+--------+
1 row in set (0.278 sec)

MariaDB [soping]> select count(orders.id), amount
    -> from orders
    -> group by amount
    -> having count(orders.id) >2;
+------------------+--------+
| count(orders.id) | amount |
+------------------+--------+
|                3 | 233    |
|                3 | 750    |
|                4 | 999    |
+------------------+--------+
3 rows in set (0.001 sec)

MariaDB [soping]> select orders.amount from orders
    -> where exists (select costumer.name from costumer where costumer.id=orders.id and amount < 500);
+--------+
| amount |
+--------+
| 233    |
| 452    |
| 300    |
| 399    |
| 233    |
| 239    |
| 233    |
| 99     |
| 455    |
+--------+
9 rows in set (0.001 sec)

MariaDB [soping]> select costumer.name from costumer
    -> where costumer.id = any (select costumer.id from orders.amount where = 200;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= 200' at line 2
MariaDB [soping]> where costumer.id = any (select costumer.id from orders.amount where = 200);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where costumer.id = any (select costumer.id from orders.amount where = 200)' at line 1
MariaDB [soping]> where costumer.id = any (select costumer.id from orders.amount where amount = 200);
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where costumer.id = any (select costumer.id from orders.amount where amount =...' at line 1
MariaDB [soping]>