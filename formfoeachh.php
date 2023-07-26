<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Form foreach</title>
</head>
<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$Name = $_POST['Name'];
$last = $_POST['last'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$city = $_POST['city'];


?>

<body>
    <form>
        <div class="container" >
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value=<?php echo $Name ?>readonly>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="">last name</label>
                        <input type="text" class="form-control" value=<?php echo $last ?>readonly>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value=<?php echo $Email ?>readonly>
                        <small id="emailHelpId" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" value=<?php echo $Password ?>readonly>
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" class="form-control" value=<?php echo $address ?>readonly>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-check" >
                        <label class="form-check-label">gender </label>
                        male <input type="radio" <?php ?>  >
                        female<input type="radio" checked >
                    </div>
                    <div class="form-group">
                        <label for="">city</label>
                        <select class="form-control" value=<?php echo $city ?>readonly>
                            <option>select</option>
                            <option>jaipur</option>
                            <option>sikar</option>
                            <option>ajmer</option>
                            <option>kota</option>
                            <option>bikaner</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>