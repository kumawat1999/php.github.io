<?php
$conn = mysqli_connect('localhost', 'root', '', 'curd') or die('database not cennected...!');
if (!$conn)
    echo "database not cennected...!";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>List in php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #kk {
            width: 115px;
            float: right;
            color: black;
            background-color: white;
        }

        #kk:hover {
            background-color: green;
            color: white;
        }

        #delet {
            width: 80px;
            color: black;
            background-color: white;
        }

        #delet:hover {
            background-color: red;
            color: white;
        }

        #updet {
            width: 80px;
            color: black;
            background-color: white;
        }

        #updet:hover {
            background-color: orange;
            color: white;
        }

        .container {
            background-color: blue;
            color: antiquewhite;
        }

        #curd {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 id="curd"><i><b>CURD FORM ONE CLICK IT</b></i></h2>
        <a class="btn btn-info" id="updet" href="form.php" role="button">Add New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>CITY</th>
                    <th>FILE</th>
                    <th>DELETE </th>
                    <th>EDIT</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $number = 1;
                $queryfire = mysqli_query($conn, "select * from list");
                while ($datas = mysqli_fetch_array($queryfire)) : ?>
                    <tr>
                        <td><?= $number ?></td>
                        <td><?= $datas['names'] ?></td>
                        <td><?= $datas['lastname'] ?></td>
                        <td><?= $datas['email'] ?></td>
                        <td><?= $datas['city'] ?></td>
                        <td>
                            <img src="image/<?= $datas['image']?>" width="100px" height="120px">
                        </td>
                        <td>
                            <a href="delete.php?id=<?= $datas['id'] ?>" class="btn btn-danger" id="delet" role="button">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-info" id="updet" href="update.php?id=<?= $datas['id'] ?>" role="button">Edit</a>
                        </td>
                    </tr>
                <?php $number++;
                endwhile ?>
            </tbody>
        </table>
    </div>

</body>

</html>