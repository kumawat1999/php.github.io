<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    };

    function ValidateAlpha(evt) {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
            return false;
        return true;
    };


    function dddd() {
        $.ajax({
            beforeSend: function() {
                // <div class="loader"></div>

            },
            type: "POST",
            url: "ajax_validation_action.php",
            data: $('#myform').serialize(),
            success: function(index) {
                if (index.trim() == 'name_error') {
                    $("#nameerr").html("Pleases Enter Name....!");
                } else {
                    $("#nameerr").html("");
                }

                // email_error
                if (index.trim() == 'email_error') {
                    $("#emailerr").html("Please Enter Email....!");
                } else if (index.trim() == 'invalidemail') {
                    $("#emailerr").html("Please Enter valid email Email....!");
                } else {
                    $("#emailerr").html("");
                }

                // Mobile_error
                if (index.trim() == 'Mobile_error') {
                    $("#mobile_err").html("Pleass Enter Mobile...!");
                }
                   else if (index.trim()=='Mobile_or') {
                        $("#mobile_err").html("Pleass Enter 10 digits Number ...!");
                    }
                else {
                    $("#mobile_err").html('');
                }

                // password_error
                if (index.trim() == 'password_error') {
                    $("#passerrr").html("Pleass Enter Password...!");
                } else {
                    $("#passerrr").html("");
                }

                // Gender_error
                if (index.trim() == 'Gender_error') {
                    $("#Gender_err").html("Pleass Select Gender...!");
                } else {
                    $("#Gender_err").html("");
                }

                // Checkbox_error
                if (index.trim() == 'Checkbox_error') {
                    $("#Checkbox_err").html("Pleass Select Checkbox...!");
                } else {
                    $("#Checkbox_err").html("");
                }

                // city
                if (index.trim() == 'city_error') {
                    $("#city_err").html("Pleass Select city...!");
                } else {
                    $("#city_err").html("");
                }

            },


            complete: function() {
                // ajaxLoader(".loader","hide");
            },
        });
        return false;
    }
</script>

<body>
    <form id="myform">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <label for="">name</label>
                <input type="text" class="form-control" onkeypress="return ValidateAlpha(event);" name="name" id="" autofocus placeholder="enter name">
                <small id="nameerr" class="form-text text-muted " style="color:red;"></small>


                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="" autofocus placeholder="email">
                    <small id="emailerr" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="text" class="form-control" maxlength="10" name="Mobile" id="" onkeypress="return isNumberKey(event)" autofocus placeholder="Mobile">
                    <small id="mobile_err" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password" autofocus id="" placeholder="password">
                    <small id="passerrr" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label class="form-check-label">Gender</label><br>
                    <input type="radio" autofocus name="Gender" value="Mail"> Mail<br>
                    <input type="radio" autofocus name="Gender" value="Femal"> Femal<br>
                    <input type="radio" autofocus name="Gender" value="Other"> Other<br>
                    <small id="Gender_err" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-check">
                    <label class="form-check-label">Checkbox</label><br>
                    <input type="checkbox" autofocus name="Checkbox" value="cricket"> cricket &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox" value="futbol"> futbol &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox" value="boli bol"> boli bol &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox" value="hoky"> hoky <br>
                    <small id="Checkbox_err" class="form-text text-muted" style="color:red;"></small>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="">
                        <option value="">SELECT</option>
                        <option value="JAIPUR">JAIPUR</option>
                        <option value="BIKANER">BIKANER</option>
                    </select><br>
                    <small id="city_err" class="form-text text-muted" style="color:red;"></small>
                </div>
                <button type="button" onclick="return dddd()">submit</button>
            </div>
        </div>
        <div class="col-sm-2">
            <!-- <img src="../image/kk.jpg" alt="" width="200" height="200"> -->
        </div>
        </div>

    </form>
</body>

</html>