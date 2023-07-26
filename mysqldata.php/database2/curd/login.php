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


    if (isset($_REQUEST['loginbtn'])) {
        $user_id = $_REQUEST['user_id'];
        $password = $_REQUEST['password'];

        $insert = "INSERT INTO `login`(`user_id`,`password`)
        VALUES ('$user_id', '$password')";
        $fire = mysqli_query($conn,$insert);
        if ($fire) {
            echo "yes...!";
        } else {
            echo "no...!";
        }
        header("location:form.php");
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
                    <label for="">USER_NAME</label>
                    <input type="text" class="form-control" name="user_id" id="" placeholder="USER ID">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input type="text" class="form-control" name="password" id="" placeholder="PASSWORD">
                </div>
                <input name="loginbtn" id="btn" class="btn btn-primary" type="submit" value="login">
            </div>
        </div>
    </form>
</body>
</html>