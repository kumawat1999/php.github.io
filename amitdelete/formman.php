<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <script>
        function btn() {
            return false;
        }
    </script>
</head>

<body>
    <form action="formmancopy.php">
        <div class="container">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">lname</label>
                    <input type="text" class="form-control" name="lname" id="" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="">
                </div>
                <input name="button" id="" onclick="btn()" class="zmdi zmdi-button" type="submit" value="button">
            </div>
        </div>
    </form>
</body>

</html>