<?php
include "Common.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>oops curd Copy</title>
</head>

<body>
    <div class="contener">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name:</th>
                            <th>Email:</th>
                            <th>Password:</th>
                            <th>Mobile:</th>
                            <th>City:</th>
                            <th>Gender:</th>
                            <th>Activ:</th>
                            <th>Adit:</th>
                            <th>Delete:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $objectdata = new Commons();
                        $alldata = $objectdata->getAllData();
                        $numm = 1;
                        foreach ($alldata as $alldatass) :
                        ?>

                            <tr>
                                <td><?= $numm ?></td>
                                <td><?= $alldatass['name'] ?></td>
                                <td><?= $alldatass['email'] ?></td>
                                <td><?= $alldatass['password'] ?></td>
                                <td><?= $alldatass['mobile'] ?></td>
                                <td><?= date('D-m-Y H:i:s', strtotime($alldatass['created'])); ?></td>
                                <td><?= $alldatass['city'] ?></td>
                                <td><?= $alldatass['gender'] ?></td>
                                <td><a name="" id="" class="btn btn-primary" href="#" role="button">Edit</a></td>
                                <td> <a name="" id="" class="btn btn-primary" href="#" role="button">Delete</a> </td>
                            </tr>
                        <?php $numm++;
                        endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>