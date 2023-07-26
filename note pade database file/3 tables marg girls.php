Microsoft Windows [Version 10.0.19045.2486]
(c) Microsoft Corporation. All rights reserved.

C:\Users\dell>cd..

C:\Users>cd..

C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 1093
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
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
10 rows in set (0.001 sec)

MariaDB [(none)]> use soping
Database changed
MariaDB [soping]> show tables
    -> ;
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
15 rows in set (0.000 sec)

MariaDB [soping]> select* from items;
+----+---------+-------+------------+
| id | names   | price | created_id |
+----+---------+-------+------------+
|  1 | pan     |    10 | 2023-01-02 |
|  2 | shart   |   500 | 2023-01-01 |
|  3 | bol     |   500 | 2023-01-18 |
|  4 | notbook |   512 | 2023-01-06 |
|  5 | bag     |   800 | 2023-01-14 |
+----+---------+-------+------------+
5 rows in set (0.000 sec)

MariaDB [soping]> select* from orders;
+----+--------+-------------+-----------+----------+------------+
| id | amount | costumer_id | wender_id | items_id | created_id |
+----+--------+-------------+-----------+----------+------------+
|  1 | 1000   | ak          | 125       | 8787     | 2023-01-11 |
|  2 | 125    | 55          | 44        | 54       | 2023-01-10 |
|  3 | 5400   | 54jhhj      | hjjjjh    | hhhhhh   | 2022-12-12 |
|  4 | 452    | jjjj        | hhhhh     | 5545     | 2023-01-17 |
|  5 | 300    | jjjj        | kkk       | yyyy     | 2023-01-08 |
|  6 | 444    | klik        | 545454    | iuhgvf   | 2023-01-23 |
|  7 | 700    | llll        | ghthfg    | yyyyy    | 2023-01-15 |
|  8 | 900    | ooooo       | hjhg      | hgggh    | 2023-01-16 |
|  9 | 1000   | hhhh        | ggvg      | ytytt    | 2023-01-13 |
| 10 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
| 11 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
| 12 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
| 13 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
| 14 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
| 15 | NULL   | NULL        | NULL      | NULL     | 0000-00-00 |
+----+--------+-------------+-----------+----------+------------+
15 rows in set (0.000 sec)

MariaDB [soping]> select* from wender;
+-----+------------------+--------------------+------------+
| ids | name             | email              | mobile     |
+-----+------------------+--------------------+------------+
|   1 | anita kumawat    | anita@gmail.com    | 1122334455 |
|   2 | ankita kumawat   | ankita@gmail.com   | 7788995544 |
|   3 | ashita kumawat   | ashita@gmail.com   | 5566985475 |
|   4 | nirmala kumawat  | nirmala@gmail.com  | 9988775544 |
|   5 | rashmi kumawat   | kumawat@gmail.com  | 4455878965 |
|   6 | seema kumawat    | kumawatt@gmail.com | 4455669988 |
|   7 | suman kumawat    | suman@gmail.com    | 5544788625 |
|   8 | rakhi kumawat    | rakhi@gmail.com    | 5566998455 |
|   9 | sunita kumawat   | sunita@gmail.com   | 1122554488 |
|  10 | simaran kumawat  | kuma@gmail.com     | 6655998545 |
|  11 | sakhshi kumawat  | sakhshi@gmail.com  | 4411225458 |
|  12 | komal kumawat    | komal@gmail.com    | 4451256526 |
+-----+------------------+--------------------+------------+
12 rows in set (0.000 sec)

MariaDB [soping]> SELECT orders.id,orders.amount,orders.items_id,orders.created_id,orders.costumer_id,wender.ids,wender.name,wender.email,wender.mobile FROM orders INNER JOIN wender on wender.ids=orders.id WHERE wender.name='anita kumawat';
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
| id | amount | items_id | created_id | costumer_id | ids | name          | email           | mobile     |
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
|  1 | 1000   | 8787     | 2023-01-11 | ak          |   1 | anita kumawat | anita@gmail.com | 1122334455 |
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
1 row in set (0.001 sec)

MariaDB [soping]> Ctrl-C -- exit!
Bye

C:\xampp\mysql\bin>rollback;
'rollback' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 1262
Server version: 10.4.27-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases
    -> ;
+--------------------+
| Database           |
+--------------------+
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
10 rows in set (0.001 sec)

MariaDB [(none)]> use soping
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
4 rows in set (0.000 sec)

MariaDB [soping]> SELECT orders.id,orders.amount,orders.items_id,orders.created_id,orders.costumer_id,wender.ids,wender.name,wender.email,wender.mobile FROM orders INNER JOIN wender on wender.ids=orders.id WHERE wender.name='anita kumawat';
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
| id | amount | items_id | created_id | costumer_id | ids | name          | email           | mobile     |
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
|  1 | 1000   | 8787     | 2023-01-11 | ak          |   1 | anita kumawat | anita@gmail.com | 1122334455 |
+----+--------+----------+------------+-------------+-----+---------------+-----------------+------------+
1 row in set (0.000 sec)

MariaDB [soping]> SELECT orders.id,orders.amount,orders.items_id,orders.created_id,orders.costumer_id,wender.* FROM orders INNER JOIN wender on wender.ids=orders.id WHERE wender.name='seema kumawat';
+----+--------+----------+------------+-------------+-----+---------------+--------------------+------------+
| id | amount | items_id | created_id | costumer_id | ids | name          | email              | mobile     |
+----+--------+----------+------------+-------------+-----+---------------+--------------------+------------+
|  6 | 444    | iuhgvf   | 2023-01-23 | klik        |   6 | seema kumawat | kumawatt@gmail.com | 4455669988 |
+----+--------+----------+------------+-------------+-----+---------------+--------------------+------------+
1 row in set (0.000 sec)

MariaDB [soping]> SELECT orders.id,orders.amount,orders.items_id,orders.created_id,orders.costumer_id,wender.name,wender.email,wender.mobile FROM orders
    -> INNER JOIN wender on wender.ids=orders.id
    -> INNER JOIN items On items.idss=orders.id
    -> WHERE 1=1;
+----+--------+----------+------------+-------------+-----------------+-------------------+------------+
| id | amount | items_id | created_id | costumer_id | name            | email             | mobile     |
+----+--------+----------+------------+-------------+-----------------+-------------------+------------+
|  1 | 1000   | 8787     | 2023-01-11 | ak          | anita kumawat   | anita@gmail.com   | 1122334455 |
|  2 | 125    | 54       | 2023-01-10 | 55          | ankita kumawat  | ankita@gmail.com  | 7788995544 |
|  3 | 5400   | hhhhhh   | 2022-12-12 | 54jhhj      | ashita kumawat  | ashita@gmail.com  | 5566985475 |
|  4 | 452    | 5545     | 2023-01-17 | jjjj        | nirmala kumawat | nirmala@gmail.com | 9988775544 |
|  5 | 300    | yyyy     | 2023-01-08 | jjjj        | rashmi kumawat  | kumawat@gmail.com | 4455878965 |
+----+--------+----------+------------+-------------+-----------------+-------------------+------------+
5 rows in set (0.001 sec)

MariaDB [soping]> SELECT orders.amount,orders.costumer_id,wender.name,wender.email,wender.mobile,items.names,items.price,items.created_id,costumer.name,costumer.email,costumer.mobile
    -> FROM orders
    -> INNER JOIN wender on wender.ids=orders.id
    -> INNER JOIN items On items.idss=orders.id
    -> INNER JOIN costumer on costumer.id=orders.id
    -> WHERE wender.name='anita kumawat' or wender.email='nirmala@gmail.com' or wender.mobile='4451256526'
    -> or items.names='pan' or items.price='500' or costumer.name='lokesh kumawat'
    -> ;
+--------+-------------+-----------------+-------------------+------------+---------+-------+------------+-----------------+-------------------+------------+
| amount | costumer_id | name            | email             | mobile     | names   | price | created_id | name            | email             | mobile     |
+--------+-------------+-----------------+-------------------+------------+---------+-------+------------+-----------------+-------------------+------------+
| 1000   | ak          | anita kumawat   | anita@gmail.com   | 1122334455 | pan     |    10 | 2023-01-02 | amit kumawat    | amit@gmail.com    | 97854646   |
| 125    | 55          | ankita kumawat  | ankita@gmail.com  | 7788995544 | shart   |   500 | 2023-01-01 | shyam lal       | syam@gmail.com    | 8546857458 |
| 5400   | 54jhhj      | ashita kumawat  | ashita@gmail.com  | 5566985475 | bol     |   500 | 2023-01-18 | subhash kumawat | subhash@gmail.com | 9965845725 |
| 452    | jjjj        | nirmala kumawat | nirmala@gmail.com | 9988775544 | notbook |   512 | 2023-01-06 | vishal kumawat  | vishal@gmail.com  | 8877542158 |
+--------+-------------+-----------------+-------------------+------------+---------+-------+------------+-----------------+-------------------+------------+
4 rows in set (0.001 sec)

MariaDB [soping]>