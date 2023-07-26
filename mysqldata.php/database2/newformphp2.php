<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>php</title>
    <!-- <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                alert();
                return false;
            });
        });
    </script> -->

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'database2');
    // if(!$con)
    // echo "pleass create database...!";

    if (isset($_REQUEST['save'])) {
        $name = $_REQUEST['name'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $gender = $_REQUEST['gender'];
        $city = $_REQUEST['city'];
        $fulladd = $_REQUEST['fulladd'];
        $date = $_REQUEST['date'];
        $hobbies = implode(',',$_REQUEST['hobbies']);

        // $addcol = "alter table table1 add column hobbies varchar(100); ";
        // $update = "update table1 set fulladd='lunwa nawa nagour' ";
        $insertdata = "INSERT INTO `newformphp` (`name`,`lname`,`email`,`password`,`gender`,`city`,`fulladd`,`date`,`hobbies`)
        VALUES ('$name', '$lname', '$email', '$password', '$gender', '$city', '$fulladd', '$date', '$hobbies')";
        $query = mysqli_query($con,$insertdata);

        if ($query) {
            echo "submit data.....!";
        } else {
            echo "not submit data.....!";
        }
    }
    ?>

</head>

<body>
    <form method="post">
        <div class="contener">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="background-color: yellow;">
                    <!-- <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" name="id" id="" placeholder="">
                    </div> -->

                    <!-- name -->
                    <div class="form-group">
                        <label for="">NAME :</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="NAME">
                    </div>

                    <!-- last name -->
                    <div class="form-group">
                        <label for="">LAST NAME :</label>
                        <input type="text" class="form-control" name="lname" id="" placeholder="LAST NAME">
                    </div>


                    <!-- EMAIL -->
                    <div class="form-group">
                        <label for="">GMAIL :</label>
                        <input type="email" class="form-control" name="email" id="" placeholder="EMAIL">
                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group">
                        <label for="">PASSWORD :</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="PASSWORD">
                    </div>


                    <!-- GENDER -->
                    <div class="form-check">
                        <label class="form-check-label">GENDER :</label><br>
                        <input type="radio" name="gender" id="" value="MALE" required> MALE <BR>
                        <input type="radio" name="gender" id="" value="FEMALE" required> FEMALE <BR>
                        <input type="radio" name="gender" id="" value="OTHER" required> OTHER
                    </div>


                    <!-- CITY -->
                    <div class="form-group">
                        <label for="">CITY</label>
                        <select class="form-control" name="city" id="">
                            <option value="">SELECT :</option>
                            <option>JAIPUR</option>
                            <option>JODHPUR</option>
                            <option>BIKANER</option>
                            <option>KOTA</option>
                            <option>CHURU</option>
                            <option>DOSA</option>
                        </select>
                    </div>


                    <!-- FULL ADDRESS -->
                    <div class="form-group">
                        <label for="">FULL ADDRESS :</label>
                        <textarea class="form-control" name="fulladd" id="" placeholder="FULL ADDRESS" rows="3"></textarea>
                    </div>


                    <!-- DATE -->
                    <div class="form-group">
                        <label for="">DATE OF BIRTH :</label>
                        <input type="date" class="form-control" name="date" id="" placeholder="DATE">
                    </div>



                    <!-- HOBBIES -->
                    <div class="form-check">
                        <label class="form-check-label">HOBBIES :</label> <br>
                        <input type="checkbox" class="form-check-input" name="hobbies[]" id="" value="cricker"> cricker <br>
                        <input type="checkbox" class="form-check-input" name="hobbies[]" id="" value="hoky"> hoky <br>
                        <input type="checkbox" class="form-check-input" name="hobbies[]" id="" value="boli bol"> boli bol <br>
                        <input type="checkbox" class="form-check-input" name="hobbies[]" id="" value="songs"> songs <br>
                    </div>

                    <!-- button -->
                    <button class="btn btn-primary" type="submit" name="save">button</button>

                </div>
            </div>
        </div>

    </form>
</body>

</html>