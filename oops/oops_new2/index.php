<html lang="en">
<?php  include "Comm.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>oops new 2</title>
</head>

<body>
    <div class="contener">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <a name="" id="" class="btn btn-primary" href="add_data.php" role="button">add</a>
                <table class="table">
                    <thead>
                        <tr>
                 
                        <th>Sr.No.</th>
                            <th>NAME:</th>
                            <th>EMAIL:</th>
                            <th>MOBILE:</th>
                            <th>CITY:</th>
                            <th>VILEGE:</th>
                            <th>DATE$TIME:</th>
                            <th>Edit:</th>
                            <th>Delete:</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $object = new Commons();
                    $subject = $object->getAllData();
                    $numm=1;
                    foreach($subject as $ss):            
                    ?>
                        <tr>
                            <td><?= $numm ?></td>
                            <td><?= $ss['name'] ?></td>
                            <td><?= $ss['email'] ?></td>
                            <td><?= $ss['mobile'] ?></td>
                            <td><?= $ss['city'] ?></td>
                            <td><?= $ss['vilege'] ?></td>
                            <td><?= date ('d-m-y h:i:s',strtotime ($ss['created'])); ?></td>
                            <td><a class="btn btn-info" href="Edit.php?ids=<?= $ss['id'] ?>">Edit</td>
                            <td><a class="btn btn-danger" onclick="return confirm('are you sure...!')" href="Delete.php?ids=<?= $ss['id'] ?>">Delete</td>
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