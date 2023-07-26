<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ajax_json 5</title>
    <script>
        function getAllData() {

            $.ajax({
                beforeSend: function() {
                    // alert();
                },
                type: 'post',
                url: 'data.php',
                data: {},
                dataType: 'JSON',
                success: function(resonce) {

                    $dataapnecd = '';
                    $num = 1;
                    $.each(resonce, function(index, value) {

                        $dataapnecd += "<tr>";
                        $dataapnecd += "<td>" + $num + "</td>";
                        $dataapnecd += "<td>" + value.name + "</td>";
                        $dataapnecd += "<td>" + value.email + "</td>";
                        $dataapnecd += "<td>" + value.mobile + "</td>";
                        $dataapnecd += "<td><button class='btn btn-info editmodal' data-name='"+value.name+"' data-email='"+value.email+"' data-mobile='"+value.mobile+"' data-hideen_id='"+value.id+"'>Edit</button></td>";
                        $dataapnecd += "<td><button class='btn btn-danger deletedata' data-ids='"+value.id+"'>Delete</button></td>";
                        $dataapnecd += "</tr>";
                        $num++;
                    });
                    $('.dataapned').html($dataapnecd);


                }

            });

        }
        $(document).ready(function() {
            getAllData();
        });

        

        $(document).on('click', '.modalid', function() {
            $('#myModal').modal('show');
        });

        $(document).on('click', '.addbutton', function() {

            var data = $('#myform');
            $.ajax({
                type: 'post',
                url: 'addData.php',
                data: data.serialize(),
                dataType: 'JSON',
                success: function(resonces) {
                    if (resonces.status == true) {
                        alert(resonces.msg);
                        getAllData();
                        $('#myModal').modal('hide');
                    } else {
                        resonces.status == false;
                        alert(resonces.msg);

                    }
                }


            });

        });


        $(document).on('click', '.editmodal', function() {
            var curnt =$(this);
            var name= $(curnt).attr('data-name');
            var email= $(curnt).attr('data-email');
            var mobile = $(curnt).attr('data-mobile');
            var id = $(curnt).attr('data-hideen_id');
            
            $('#editmodal').modal('show');


            $('#nameedit').val(name);
            $('#emailedit').val(email);
            $('#mobileedit').val(mobile);
            $('#hideen_id').val(id);
            
        });

        $(document).on('click', '.editdata', function() {

            var data = $('#editform');
            $.ajax({
                type: 'post',
                url: 'editdata.php',
                data: data.serialize(),
                dataType: 'JSON',
                success: function(resonces) {
                    if (resonces.status == true) {
                        alert(resonces.msg);
                        getAllData();
                        $('#editmodal').modal('hide');
                    } else {
                        resonces.status == false;
                        alert(resonces.msg);

                    }
                }


            });

        });




        $(document).on('click', '.deletedata', function() {
            // alert();
            var data= $(this).attr('data-ids');
            var confirms =confirm('are you sure data delete..!');
            if(confirms==true){

                $.ajax({
                    type: 'post',
                    url: 'deletedata.php',
                    data: {id:data},
                    dataType: 'JSON',
                    success: function(resonces) {
                        alert(resonces.msg);
                        if (resonces.status == true) {
                            getAllData();
                        }
                    }
                });
            }

        });
    </script>

</head>

<body>
    <button type="button" style="float:right;" class="btn btn-info btn-lg modalid" data-toggle="modal" data-target="#myModal">Add</button>

    <table class="table">
        <thead>
            <tr>
                <th>Sr no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="dataapned">

        </tbody>
    </table>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
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
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
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
    <div id="editmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                    <form id="editform">
                        <input id="hideen_id" name="hideen_id" type="text">
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
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" name="mobile" id="mobileedit" placeholder="Enter mobile">
                            <small id="emailHelpId" class="form-text text-muted"></small>
                        </div>

                        <button type="button" name="button" id="button" class="btn btn-primary editdata">Edit Data</button>
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