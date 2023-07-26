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
    <title>edit form</title>
    <script>
        function ValidateAlpha(evt) {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

                return true;
        }

        function password_kye(t) {
            var n = (t = t || window.event).which ? t.which : t.keyCode;

            return !(n > 31 && (n < 48 || n > 57))
        }
        $(document).ready(function() {

            $('#button').click(function() {

                function validemail(email) {
                    var re = /\S+@\S+\.\S+/;
                    return re.test(email);
                }


                $name = $('#name').val();
                $email = $('#email').val();
                $password = $('#password').val();
                $mobile = $('#mobile').val();
                $mobile = $('#mobile').val();
                $faleg = 1;
                // name validation
                if ($name == '') {
                    $('#namerr').html('Pleass Enter Name..!');
                    $faleg = 0;
                } else {
                    $('#namerr').html('');
                }

                // email validation
                if ($email == '') {
                    $('#emailrr').html('Pleass Enter Email..!');
                    $faleg = 0;
                } else if (validemail($email.trim()) == false) {
                    $('#emailrr').html('Pleass Enter Valid Email...!');
                    $faleg = 0;
                } else {
                    $('#emailrr').html('');
                }
                // mobile validation
                if ($mobile == '') {
                    $('#mobilerr').html('Pleass Enter Mobile..!');
                    $faleg = 0;
                } else {
                    $('#mobilerr').html('');
                }
                
                //password validation
                if ($password == '') {
                    $('#passwordrr').html('Pleass Enter password..!');
                    $faleg = 0;
                } else {
                    $('#passwordrr').html('');
                }
                if ($faleg == 0) {
                    return false;
                }
               

            });

        });
    </script>
</head>

<body>
    <?php
    $id = $_REQUEST['ids'];
    include "Common.php";
    $objectData = new Common();

    $qurys = "select * from oops_table where id=$id";
    $editdatas = $objectData->edit_data($qurys);

    $name = $editdatas->name;
    $email = $editdatas->email;
    $password = $editdatas->password;
    $mobile = $editdatas->mobile;
    // $dateTime=$editdatas->dateTime;
    // echo ($name);

    ?>

    <div class="contener">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <form method="post" action="edit_action.php?id=<?= $id ?>">
                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>" onkeypress="return ValidateAlpha(event)">
                        <small id="namerr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" onkeypress="return validemail(event)" >
                        <small id="emailrr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Mobile:</label>
                        <input type="text" class="form-control" maxlength="10" name="mobile" id="mobile" value="<?= $password ?>" onkeypress="return password_kye(event)">
                        <small id="mobilerr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" maxlength="10" name="password" id="password" value="<?= $mobile ?>">
                        <small id="passwordrr" style="color:red;"></small>
                    </div>

                    <button type="submit" name="submit" id="button" class="btn btn-primary" btn-lg btn-block>Edit Data</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>