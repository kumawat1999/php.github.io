<!DOCTYPE html>
<html lang="en">

<?php
include "Common.php";
?>
`
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>table</title>
</head>

<body>
    <div class="contener">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <td><a class="btn btn-info" href="insert_data.php" role="button">Add Data</a></td>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>mobile</th>
                            <th>dateTime</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $objectData = new Common();
                        $user_data = $objectData->getAllData();
                        // print_r($user_data);
                        $indexx = 1;
                        foreach ($user_data as $user_datas) { ?>

                            <tr>
                                <td><?= $indexx ?></td>
                                <td><?= $user_datas['name'] ?></td>
                                <td><?= $user_datas['email'] ?></td>
                                <td><?= $user_datas['password'] ?></td>
                                <td><?= $user_datas['mobile'] ?></td>
                                <td><?php echo date("d-M-Y H:i:s", strtotime($user_datas['time'])); ?></td>
                                <td><a class="btn btn-info" href="oops_edit.php?ids=<?= $user_datas['id'] ?>" role="button">Edit</a></td>
                                <td><a  class="btn btn-danger" onclick="return confirm('are you sure...!')" href="oops_delete.php?id=<?= $user_datas['id'] ?>" role="button">Delete</a></td>
                            </tr>
                        <?php
                            $indexx++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>