<?php

include "Connection.php";
class Commons extends Connection
{
    private $data;
    private $resultss_arr=[];
    public function getAllData()
    {

        $this->data=$this->connss->query("select * from oops_table2");

        while ($results = $this->data->fetch_assoc()) {
            $resultss_arr[] = $results;
        }
        return $this->$resultss_arr;
    }
   


    // insert data
    // public function insert($name,$email,$password,$mobile,$city,$gender)
    // {

    //     $this->data=$this->connss->query("select * from oops_table2");
    //     $insert=$this->conn->query("insert into oops_table2 (name,email,password,mobile)values('$name','$email','$password','$mobile',)");
    //     return $this->$insert;
      
    // }

}

$object=new Commons();
$subject = $object->getAllData();
// foreach ($subject as $subjects) {
    // print_r($subjects);
    // echo "<br>";
// }
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
    <title>oops table</title>
</head>

<body>

    <div class="containar">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <div class="row">
                    <h3>Oops New Table :</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name :</th>
                            <th>Email :</th>
                            <th>Password :</th>
                            <th>Mobile :</th>
                            <th>Edit :</th>
                            <th>Delete :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 1; ?>
                        <?php

                        foreach ($subject as $datas) :
                         ?>
                            <tr>
                                <td><?= $num ?></td>
                                <td><?= $datas['name'] ?></td>
                                <td><?= $datas['email'] ?></td>
                                <td><?= $datas['password'] ?></td>
                                <td><?= $datas['mobile'] ?></td>
                                <td>
                                    <a class="btn btn-danger" id="updet" href="oops_edit.php?id=<?= $datas['id'] ?>">Edit<i class="fa fa-trash"></i></a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="oops_delete.php?id=<?= $datas['id'] ?>" class="btn" id="delet"><i class="fa fa-trash">Delete</i></a>
                                </td>
                            </tr>
                        <?php
                            $num++;
                        endforeach 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>