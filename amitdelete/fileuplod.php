<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="upload.php" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
      <label for="pwd">file</label>
      <input type="file" id="file" name="file" accept="image/jpeg,image/png">
    </div>
    <!-- <div class="form-group">
      <label for=""></label>
      <select class="form-control" name="" id="">
        <option></option>
        <option></option>
        <option></option>
      </select>
    </div> -->
   
    <input type="submit" value="submit" name="upload">
  </form>
</div>

</body>
</html>
