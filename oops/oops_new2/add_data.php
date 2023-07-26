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
    <title>insert data</title>
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
                $city = $('#city').val();
                $vilege = $('#vilege').val();
                // $male = $('#male');
                // $female = $('#female');
                // $other = $('#other');
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
               
                
                //password validation
                if ($password == '') {
                    $('#passwordrr').html('Pleass Enter password..!');
                    $faleg = 0;
                } else {
                    $('#passwordrr').html('');
                }

                 // mobile validation
                 if ($mobile == '') {
                    $('#mobilerr').html('Pleass Enter Mobile..!');
                    $faleg = 0;
                } else {
                    $('#mobilerr').html('');
                }
                //city
                if ($city == '') {
                    $('#cityrr').html('Pleass Enter city..!');
                    $faleg = 0;
                } else {
                    $('#cityrr').html('');
                }
                //vilege
                if ($vilege == '') {
                    $('#vilegerr').html('Pleass Enter vilege..!');
                    $faleg = 0;
                } else {
                    $('#vilegerr').html('');
                }
                //gender
                // if ($male.checked == true || $female.checked == true || $other.checked == true) {
                //     $('#genderrr').html('');
                // } else {
                //     $('#genderrr').html('plsess enter gender');
                //     $faleg = 0;
                // }
                if ($faleg == 0) {
                    return false;
                }

            });

        });
    </script>
</head>

<body>
    <div class="contener">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form method="post" action="add_action.php">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="name" onkeypress="return ValidateAlpha(event)" autofocus placeholder="Your Full Name">
                        <small id="namerr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" autofocus onkeypress="return validemail(event)" placeholder="Your Email Id">
                        <small id="emailrr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="password" maxlength="10" autofocus placeholder="Your Email Id">
                        <small id="passwordrr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <input type="text" class="form-control" name="mobile" maxlength="10" onkeypress="return password_kye(event)" id="mobile" placeholder="Your Mobile Number">
                        <small id="mobilerr" style="color:red;"></small>
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Your City ">
                        <small id="cityrr" style="color:red;"></small>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <label class="form-check-label">Gender</label><br>
                        Male <input type="radio" name="gender" id="gender"><br>
                        Female <input type="radio" name="gender" id="gender"><br>
                        Other <input type="radio" name="gender" id="gender">
                        <small id="genderrr" style="color:red;"></small>
                    </div> -->
                    <div class="form-group">
                        <label for="">Vilege</label>
                        <input type="text" class="form-control" name="vilege" id="vilege" placeholder="Your Vilege">
                        <small id="vilegerr" style="color:red;"></small>
                    </div>
                    <button type="submit" id="button" name="button">Add</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>