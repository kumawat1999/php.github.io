<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>table</title>


    <script>
        function getAllData() {

            $.ajax({

                beforeSend: function() {
                    // alert();
                },
                type: 'POST',
                url: "data.php",
                data: {},
                dataType: 'JSON',
                success: function(responce) {
                    console.log(responce);
                    $apenddata = '';
                    $num = 1;
                    $.each(responce, function(index, value) {

                        $apenddata += '<tr>';
                        $apenddata += '<td>' + $num + '</td>';
                        $apenddata += '<td>' + value.name + '</td>';
                        $apenddata += '<td>' + value.email + '</td>';
                        $apenddata += '<td>' + value.password + '</td>';
                        $apenddata += '<td>' + value.city + '</td>';
                        $apenddata += '<td>' + value.address + '</td>';
                        $apenddata += '<td><button class="btn btn-danger delete" data-trun="' + value.id + '" >Delete</button></td>';
                        $apenddata += '<td><button class="btn btn-info" id="openModal" data-name="' + value.name + '" data-email="' + value.email + '" data-password="' + value.password + '" data-city="' + value.city + '" data-address="' + value.address + '" data-ids="' + value.id + '" >Update</button></td>';
                        $apenddata += '</tr>';
                        $num++;
                    });
                    $('.apenddata').html($apenddata);

                }
            });


        }

        $(document).ready(function() {
            getAllData();
        });




        $(document).on('click', '.delete', function() {
            // alert();

            var deletedata = $(this).attr('data-trun');
            var confurm = confirm("aru you sure....?");


            if (confurm == true) {
                $.ajax({
                    type: 'POST',
                    url: 'Delete.php',
                    data: {
                        id: deletedata
                    },
                    dataType: 'JSON',
                    success: function(responce) {
                        alert(responce.msg);
                        if (responce.status == true) {
                            getAllData();
                        }
                    }
                });
            }
        });


        $(document).on('click', '.addbutton', function() {
            var myfrom = $('#myform');
            $.ajax({
                type: 'POST',
                url: 'AddData.php',
                data: myfrom.serialize(),
                dataType: 'JSON',
                success: function(responce) {
                    console.log(responce);
                    $('.formmsg').remove();
                    if (responce.errors && !responce.errors == '') {
                        $.each(responce.errors, (key, value) => {
                            // console.log(responce.errors);
                            var msg = '<label class="error formmsg error2" style="color:red;"> ' + value + '</label>';

                            myfrom.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });
                    } else {
                        alert(responce.msg);
                        if (responce.status == true) {
                            getAllData();
                            $('#myModal').modal('hide');
                        }
                    }
                }
            });
        });




        $(document).on('click', '#openModal', function() {
            // alert();
            var currnt = $(this);
            var name = $(currnt).attr('data-name');
            var email = $(currnt).attr('data-email');
            var password = $(currnt).attr('data-password');
            var city = $(currnt).attr('data-city');
            var address = $(currnt).attr('data-address');
            var id = $(currnt).attr('data-ids');

            $('#EditmyModal').modal('show');

            $('#nameedit').val(name);
            $('#emailedit').val(email);
            $('#passedit').val(password);
            $('#cityedit').val(city);
            $('#addressedit').val(address);
            $('#hideen_id').val(id);
            // alert($id);
        });
        $(document).on('click', '.editbtn', function() {
            // alert();
            var editformss = $('#editForm');
            $.ajax({
                type: 'POST',
                url: 'Edit.php',
                data: editformss.serialize(),
                dataType: 'JSON',
                success: function(responce) {
                    console.log(responce);

                    $('.formmsg').remove();
                    if (responce.errors && !responce.errors == '') {

                        $.each(responce.errors, (key, value) => {
                            console.log(responce.errors);
                            var msg = '<label class="error formmsg error2" style="color:red;"> ' + value + '</label>';

                            editformss.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });
                    } else {

                        alert(responce.msg);
                        if (responce.status == true) {
                            getAllData();
                            $('#EditmyModal').modal('hide');
                        }
                    }
                }
            });
        });
    </script>
</head>

<body>
    <button type="button" style="float:right;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button>

    <table class="table">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>City</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody class="apenddata">

        </tbody>
    </table>


    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">

                    <form id="myform">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="eamil" class="form-control" name="email" id="email" placeholder="Enter email">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Enter password">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <button type="button" name="button" id="button" class="btn btn-primary addbutton">Add Data</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>








    <!-- Modal -->
    <div id="EditmyModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">

                    <form id="editForm">
                        <input type="hidden" id="hideen_id" name="hideen_id">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="nameedit" placeholder="Enter Name">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="eamil" class="form-control" name="email" id="emailedit" placeholder="Enter email">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" id="passedit" placeholder="Enter password">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city" id="cityedit" placeholder="Enter city">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" id="addressedit" placeholder="Enter address">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>
                        <button type="button" name="button" id="button" class="btn btn-primary editbtn">Edit Data</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>