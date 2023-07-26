<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>list form data</title>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'curd') or die('database not cennected...!');
    if (!$conn)
        echo "database not cennected...!";


    if (isset($_REQUEST['butn'])) {
        $name = $_REQUEST['names'];
        $lname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $city = $_REQUEST['city'];
        $image = $_FILES['image']['name'];
        $fileymp = $_FILES['image']['tmp_name'];
        $id = $_GET['id'];

        $path = "image/".$image;
        move_uploaded_file($fileymp,$path);

        $update = "UPDATE `list` SET id= $id,names ='$name', lastname='$lname', email='$email',
        city='$city' ,`image`= '$image' where id=$id"; 
       $chack = mysqli_query($conn,$update) or die(mysqli_error($conn));
       $queryfire = mysqli_query($conn, "select * from list");
       $datas = mysqli_fetch_array($queryfire);
      

       header ("location:table.php");
       
    }
    $ids = $_GET['id'];

    $data = "select * from list where id = $ids";
    $data_run = mysqli_query( $conn,$data);
    $row = mysqli_fetch_array($data_run);

    ?>
    <style>
        #btn{
        background-color:white;
        color: black;
       }
       #btn:hover{
        background-color:black;
        color: green;
       }
        .container{
            background-color:blue;
            color: antiquewhite;
        }
        #curd{
            text-align:center;
        }
    </style>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <div class="container">
        <h2 id="curd"><i><b>CURD FORM ONE CLICK IT</b></i></h2>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NAME :</label>
                    <input type="text" class="form-control" name="names" id="" value="" placeholder=" NAME ">
                </div>
                <div class="form-group">
                    <label for="">LAST NAME :</label>
                    <input type="text" class="form-control" name="lastname" id="" placeholder=" LAST NAME ">
                </div>
                <div class="form-group">
                    <label for="">EMAIL :</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="EMAIL">
                </div>
                <div class="form-group">
                    <label for="">CITY :</label>
                    <select class="form-control" name="city" id="">
                        <option value="">select</option>
                        <option>jaipur</option>
                        <option>sikar</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">FILE :</label>
                  <input type="file" class="form-control" name="image" id="" aria-describedby="helpId">
                </div>
                <input name="butn" id="btn" class="btn btn-primary" type="submit" value="button">
            </div>
        </div>
        </div>
    </form>

</body>

</html>