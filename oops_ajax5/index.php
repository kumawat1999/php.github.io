<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<head>
  <style>
    .loader {
      border: 16px solid #f3f3f3;
      /* Light grey */
      border-top: 16px solid #3498db;
      /* Blue */
      border-radius: 50%;
      width: 120px;
      height: 120px;
      margin-left: 50%;
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    label.error.formmessage.error2 {
      float: right;
    }
  </style>

  <script>
    function callAjaxForIndex() {
      $.ajax({
        beforeSend: function () {
          // alert();
          $(".loader").show();
        },
        type: "POST",//get or post
        url: "my_data.php",//my_data.php
        data: {},
        dataType: 'JSON',
        success: function (result) {
          $myappenddata = '';
          $srno = 1;
          $.each(result, (index, value) => {
            // alert(index+' '+value.name);
            $myappenddata += '<tr>';
            $myappenddata += '<td>' + $srno + '</td>';
            $myappenddata += '<td>' + value.name + '</td>';
            $myappenddata += '<td>' + value.mobile + '</td>';
            $myappenddata += '<td>' + value.email + '</td>';
            $myappenddata += '<td>' + value.password + '</td>';
            $myappenddata += '<td><button class="btn btn-success aditmyform" data-id="' + value.id + '" data-name="' + value.name + '" data-mobile="' + value.mobile + '" data-email="' + value.email + '" data-password="' + value.password + '">Edit</button></td>';
            $myappenddata += '<td><button class="btn btn-danger trash" data-ids="' + value.id + '" >Trash</button> </td>';
            $myappenddata += '</tr>';
            $srno++;
          });

          $(".myDataAppend").html($myappenddata);
          //  console.log($myappenddata);
        },
        complete: function () {
          $(".loader").hide();
        },
      });
    }
    $(document).ready(function () {
      callAjaxForIndex();
    });




    ///////////          add data form                     /////////
    $(document).on('click', '.addbtn', function () {
      $("#myModal").modal('show');
    });
    $(document).on('click', '.addbtnnow', function () {
      var myForms = $("#myForm");

      $.ajax({
        beforeSend: function () {
          $(".loader").show();
          // alert("ajax startedd");

        },
        type: "POST",//get or post
        url: "my_data_add.php",//my_data.php
        data: myForms.serialize(),
        dataType: 'JSON',
        success: function (result) {
          // alert(result);
          $('.formmessage').remove();

          if (result.errors && !result.errors == '') {
            $.each(result.errors, (key, value) => {
              var Msg = '<label class="error formmessage error2" style="color:red">' + value + '</label>';
              myForms.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(Msg);
            });
          }
          else {
            alert(result.Msg);
            if (result.Status == true) {
              callAjaxForIndex();
              $("#myModal").modal('hide');
            }
          }
          
        },
        complete: function () {
          $(".loader").hide();
        }
      });
    });

    /////////////////////              delete data form                //////////////////////
    $(document).on('click', '.trash', function () {
      var ids = $(this).attr('data-ids');
      var confirms = confirm("Are You Sure To Trash..!");
      if (confirms == true) {
        $.ajax({
          beforeSend: function () {
            $(".loader").show();
          },
          type: "POST",//get or post
          url: "my_data_delete.php",//my_data_delete.php
          data: { id: ids },
          dataType: 'JSON',
          success: function (result) {
            alert(result.Msg);
            if (result.Status == true) {
              callAjaxForIndex();
            }
          },
          complete: function () {
            $(".loader").hide();
          }
        });
      }
    });

     /////////              edit form data                           ///////////
     $(document).on('click', '.aditmyform', function () {

      var currnt=$(this);
      var name=$(currnt).attr('data-name');
      var mobile=$(currnt).attr('data-mobile');
      var email=$(currnt).attr('data-email');
      var password=$(currnt).attr('data-password');
      var id=$(currnt).attr('data-id');
      $("#myModaledit").modal('show');


      // alert(id);

      $('#nameedit').val(name);
      $('#mobileedit').val(mobile);
      $('#emailedit').val(email);
      $('#passwordedit').val(password);
      $('#hiddan_id').val(id);


    }); 

    $(document).on('click', '.adituser', function () {
      var myFormEdit = $("#myFormEdit");
      // alert("modal open");
      $.ajax({
        beforeSend: function () {
          $(".loader").show();
        },
        type: "POST",//get or post
        url: "my_edit_data.php",//my_data.php
        data: myFormEdit.serialize(),
        dataType: 'JSON',
        success: function (result) {
          // console.log(result);
          $('.formmessa').remove();

          if (result.errors && !result.errors == '') {
            $.each(result.errors, (key, value) => {
              var Msg = '<label class="error formmessa error2" style="color:red">' + value + '</label>';
              myFormEdit.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(Msg);
            });
          }
          else {
            alert(result.Msg);
            if (result.Status == true) {
              callAjaxForIndex();
              $("#myModaledit").modal('hide');
            }
          }
          
        },
        complete: function () {
          $(".loader").hide();
        }
      });
    });




  </script>
</head>

<body>


  <div class="container">
    <div class="row">

      <h3>User's List</h3>
      <button style="float:right;margin-bottom:10px;" class="btn btn-info addbtn">Add User</button>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Salary</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

        <tbody class="myDataAppend">

        </tbody>


      </table>

    </div>
  </div>
  <div class="loader" style="display:none;"></div>



  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User </h4>
        </div>
        <div class="modal-body">

          <form id="myForm" >
            <div class="form-group">
              <label for="email">Name :</label>
              <input type="text" maxlength="30" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="pwd">Mobile :</label>
              <input type="text" name="mobile" class="form-control" id="mobile">
            </div>
            <div class="form-group">
              <label for="pwd">E-mail :</label>
              <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password :</label>
              <input type="text" name="password" class="form-control" id="password">
            </div>

            <button type="button" class="btn btn-info addbtnnow">Add</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>


  </div>











  
  <div id="myModaledit" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit User</h4>
        </div>
        <div class="modal-body">
          <form id="myFormEdit">
            <input type="hidden" id="hiddan_id" name="hiddan_id">
            <div class="form-group">
              <label for="email">Name:</label>
              <input type="text" maxlength="30" name="name" class="form-control" id="nameedit">
            </div>
            <div class="form-group">
              <label for="pwd">Mobile:</label>
              <input type="text" name="mobile" class="form-control" id="mobileedit">
            </div>
            <div class="form-group">
              <label for="pwd">Email:</label>
              <input type="text" name="email" class="form-control" id="emailedit">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="text" name="password" class="form-control" id="passwordedit">
            </div>

            <button type="button" class="btn btn-info adituser">edit</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>

    
  </div>


  </div>



</body>

</html>