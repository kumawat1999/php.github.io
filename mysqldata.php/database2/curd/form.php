

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

        $insert = "INSERT INTO `list`(`names`,`lastname`,`email`,`city`)
        VALUES ('$name', '$lname', '$email', '$city')";
        $fire = mysqli_query($conn,$insert);
        if ($fire) {
            echo "yes...!";
        } else {
            echo "no...!";
        }
        header("location:table.php");
    }

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
    <form method="post">
        <div class="container">
        <h2 id="curd"><i><b>CURD FORM ONE CLICK IT</b></i></h2>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NAME :</label>
                    <input type="text" class="form-control" name="names" id="" placeholder="NAME">
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
                <input name="butn" id="btn" class="btn btn-primary" type="submit" value="button">
            </div>
        </div>
        </div>
    </form>

</body>

</html>