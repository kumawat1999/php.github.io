<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>

<body>
  <script>
    function callAjaxForIndex() {
      $.ajax({
        beforeSend: function() {
          // alert();
        },
        
        type: "POST",
        url: "Mydata.php",
        data: {},
        dataType: 'JSON',
        success: function(result) {
          // console.log(result);
          $myappenddata = '';
          $srno = 1;
          $.each(result, function(index, value) {
            console.log(index + '' + value.name);

            $myappenddata += '<tr>';
            $myappenddata += '<td>' + $srno + '</td>';
            $myappenddata += '<td>' + value.name + '</td>';
            $myappenddata += '<td>' + value.email + '</td>';
            $myappenddata += '<td>' + value.password + '</td>';
            $myappenddata += '<td>' + value.mobile + '</td>';
            $myappenddata += '<td>' + value.salary + '</td>';
            $myappenddata += '<td><button class="btn btn-success">Edit </button>&nbsp; <button class="btn btn-danger trash" data-user="' + value.id + '">Delete</button></td>';
            $myappenddata += '</tr>';
            $srno++;
          });
          $(".myDataAppend").html($myappenddata);
        },
      });

    }
    $(document).ready(function() {

      callAjaxForIndex();
    });


    // delete data querys 

    $(document).on('click', '.trash', function() {
      var user = $(this).attr('data-user');
      var confirms = confirm("are you sure to trash...!")
      if (confirms == true) {

            $.ajax({

              beforeSend: function() {
          // alert("ftvgybhunjuhnygt");
        },
              type: "POST",
              url: "delete.php",
              data: {id:ids}, 
              dataType:'JSON',
              success: function(result) {

                alert(result);

                if(result.status== true){
                  callAjaxForIndex();
                }
              },
            });

      }

    });
  </script>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.no :</th>
        <th>Name :</th>
        <th>E-mail :</th>
        <th>Mobile :</th>
        <th>Password :</th>
        <th>salary :</th>

      </tr>
    </thead>
    <tbody class="myDataAppend">

    </tbody>
  </table>

</body>

</html>