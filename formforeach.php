<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Form foreach</title>
</head>
<script>
    $(document).ready(function() {

        $("#submit").click(function() {
            
            $.ajax({
                type: "post",
                url: "formfoeachh.php",
                data: $("#forms").serialize(),
                success: function(respons) {
                    $("#secound").html(respons);
                }

            });


            return false;
        });
    });
</script>


<body>
    <form id="forms">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="Name" id="Name" aria-describedby="helpId" placeholder="Name">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="">last name</label>
                        <input type="text" class="form-control" name="last" id="last" aria-describedby="helpId" placeholder="last">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelpId" placeholder="Email">
                        <small id="emailHelpId" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="Password" id="Password" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">address</label>
                        <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="address">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            male <input type="radio" name="gender" id="male" value="male" checked>
                            female<input type="radio" name="gender" id="female" value="female">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">city</label>
                        <select class="form-control" name="city" id="city">
                            <option>select</option>
                            <option>jaipur</option>
                            <option>sikar</option>
                            <option>ajmer</option>
                            <option>kota</option>
                            <option>bikaner</option>
                        </select>
                    </div>
                   <button type="submit" id="submit"
                    onclick="return submit()">Submit</button>
                </div>
                
            </div>
        </div>

        <div id="secound"></div>
    </form>
</body>
</html>

