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
    function dddd() {
        $.ajax({
            beforeSend: function() {
                // alert("lodaer start..!");
            },
            type: "POST",
            url: "ajax_array_validation_action2.php",
            data: $('#myform').serialize(),
            dataType: "JSON",
            success: function(respons) {
                if (respons.status == true) {

                } else {
                    var types = respons.type;
                    if (types == 'name') {
                        $("#nameerr").html(respons.massage);
                        $("#name").focus();
                    } else {
                        $("#nameerr").html("");
                    }

                    if (types == 'email') {
                        $("#emailerr").html(respons.massage);
                    } else {
                        $("#emailerr").html("");
                    }

                    if (types == 'Mobile') {
                        $("#Mobilerr").html(respons.massage);
                    } else {
                        $("#Mobilerr").html("");
                    }


                    if (types == 'password') {
                        $("#passerrr").html(respons.massage);
                    } else {
                        $("#passerrr").html("");
                    }


                    if (types == 'Gender') {
                        $("#Gender_err").html(respons.massage);
                    } else {
                        $("#Gender_err").html("");
                    }


                    if (types == 'Checkbox') {
                        $("#Checkbox_err").html(respons.massage);
                    } 
                     else {
                        $("#Checkbox_err").html("");
                    }
                }
            },
            error: function(errors) {
                console.log(errors.responsText);
            },

            complete: function() {
                // alert("lodaer end..!");
            },
        });
        return false;
    }
</script>

<body>
    <!-- <div class="loader"></div> -->
    <form id="myform">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <label for="">name</label>
                <input type="text" class="form-control" name="name" id="name" autofocus placeholder="enter name">
                <small id="nameerr" class="form-text text-muted " style="color:red;"></small>


                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="" autofocus placeholder="email">
                    <small id="emailerr" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label for="">Mobile</label>
                    <input type="email" class="form-control" name="Mobile" id="" autofocus placeholder="Mobile">
                    <small id="Mobilerr" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password" autofocus id="" placeholder="password">
                    <small id="passerrr" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-group">
                    <label class="form-check-label">Gender</label><br>
                    <input type="radio" autofocus name="Gender[]" id=""> Mail<br>
                    <input type="radio" autofocus name="Gender[]" id=""> Femal<br>
                    <input type="radio" autofocus name="Gender[]" id=""> Other<br>
                    <small id="Gender_err" class="form-text text-muted" style="color:red;"></small>
                </div>

                <div class="form-check">
                    <label class="form-check-label">Checkbox</label><br>
                    <input type="checkbox" autofocus name="Checkbox[]" value="cricket"> cricket &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox[]" value="futbol"> futbol &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox[]" value="boli bol"> boli bol &nbsp;&nbsp;
                    <input type="checkbox" autofocus name="Checkbox[]" value="hoky"> hoky <br>
                    <small id="Checkbox_err" class="form-text text-muted" style="color:red;"></small>
                </div>
                <button type="submit" onclick="return dddd()">submit</button>
            </div>
        </div>
    </form>
</body>

</html>