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
    <?php
    include "Curd.php";
    $objs = new Curd();

    $qrys = "select * from curd_table3 ";
    $userdata = $objs->getDataMultiple($qrys);

    ?>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id's</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>TimeStamp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $srno = 1;
                foreach ($userdata as $userdatas) : ?>
                    <tr>
                        <td><?= $srno ?></td>
                        <td><?= $userdatas['name'] ?></td>
                        <td><?= $userdatas['email'] ?></td>
                        <td><?= $userdatas['mobile'] ?></td>
                        <td><?= $userdatas['passsword'] ?></td>
                        <td><?= date("d-m-Y H:i:s", strtotime($userdatas['created'])) ?></td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?= $userdatas['id'] ?>">Edit</a>
                        </td>
                    </tr>
                <?php
                    $srno++;
                endforeach ?>
            </tbody>
        </table>
    </div>




</body>

</html>