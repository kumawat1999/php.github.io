<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

    <script>
        // insert data stared function ...*************************************
        function getAllData() {
            // alert();

            $.ajax({

                beforeSend: function() {
                    // alert("beforsend function started...!");
                },

                type: "POST",
                url: "data.php",
                data: {},
                dataType: 'JSON',
                success: function(Response) {
                    // console.log(Response);

                    $dataapend = "";
                    $num = 1;

                    $.each(Response, function(index, value) {

                        $dataapend += "<tr>";
                        $dataapend += "<td>" + $num + "</td>";
                        $dataapend += "<td>" + value.name + "</td>";
                        $dataapend += "<td>" + value.email + "</td>";
                        $dataapend += "<td>" + value.password + "</td>";
                        $dataapend += "<td>" + value.city + "</td>";
                        $dataapend += "<td>" + value.address + "</td>";
                        $dataapend += "<td><button class='btn btn-info truesEdit' data-hidden_id='" + value.id + "'  data-name='" + value.name + "'data-email='" + value.email + "'data-password='" + value.password + "'data-city='" + value.city + "'data-address='" + value.address + "'>Edit</button></td>";
                        $dataapend += "<td><button class='btn btn-danger' id='trash' data-user='" + value.id + "'>Delete</button></td>";
                        $dataapend += "</tr>";
                        $num++;
                    });
                    $('.mydataentry').html($dataapend);
                }
            });
        }

        $(document).ready(function() {
            getAllData();
        });

        // insert data Close function ...*************************************





        /////// add data function stated.&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
        $(document).on('click', '.adddata', function() {
            // alert("adda data");
            var myform = $('#formid');
            $.ajax({

                type: "POST",
                url: "add_data.php",
                data: myform.serialize(),
                dataType: "JSON",
                success: function(responce) {
                    console.log(responce);

                    $('.formmsg').remove();
                    if (responce.errors && !responce.errors == '') {

                        $.each(responce.errors, (key, value) => {
                            // console.log(responce.errors);
                            var msg = '<label class="error formmsg error2" style="color:red;"> ' + value + '</label>';

                            myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                        });
                    } else {
                        alert(responce.msg);
                        if (responce.status == true) {
                            getAllData();
                            $("#modalform").modal('hide');
                        }

                    }
                }
            });

        });
        /////// add data function and  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&



        /////////////// delete data function startedd ****************************










        $(document).on('click', '#trash', function() {
            // alert("delete data");
            var deletedata = $(this).attr('data-user');
            var confirms = confirm("are you sure delete data...!");
            if (confirms == true) {

                $.ajax({
                    type: "POST",
                    url: "delete_data.php",
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



        //////////////////////////    Edit functions    /////////////////////////////

        $(document).on('click', '.truesEdit', function() {

            var trash = $(this);
            var name = $(trash).attr('data-name');
            var email = $(trash).attr('data-email');
            var password = $(trash).attr('data-password');
            var city = $(trash).attr('data-city');
            var address = $(trash).attr('data-address');
            var ids = $(trash).attr('data-hidden_id');
            
            $('#myEditform').modal('show');

            $('#nameedit').val(name);
            $('#emailedit').val(email);
            $('#passedit').val(password);
            $('#cityedit').val(city);
            $('#addedit').val(address);
            $('#hidden_id').val(ids);
            alert(password);
            

        });
        $(document).on('click', '.aditdata', function() {
            var myform = $('#EditFormEdit');
            var promts = confirm(" aur You sure Edit data ");
            if (promts == true) {
                $.ajax({

                    type: "POST",
                    url: "Edit_data.php",
                    data: myform.serialize(),
                    dataType: 'JSON',
                    success: function(responce) {
                        // console.log(responce);
                        $('.formmsgs').remove();
                        if (responce.errors && !responce.errors == '') {

                            $.each(responce.errors, (key, value) => {
                                // console.log(responce.errors);
                                var msg = '<label class="error formmsgs error2" style="color:red;"> ' + value + '</label>';

                                myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);
                            });
                        } else {
                            alert(responce.msg);
                            if (responce.status == true) {
                                getAllData();
                                $('#myEditform').modal('hide');
                            }

                        }
                    }
                });
            }
        });
    </script>
</head>

<style>
    #button {

        float: right;
        margin: 20px;
        font-size: 12px;
    }
</style>


<body>
    <button type="button" class="btn btn-info btn-lg" id="button" data-toggle="modal" data-target="#modalform">Open Modal</button>
    <table class="table table-defolt">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name:</th>
                <th>Email:</th>
                <th>Password:</th>
                <th>City:</th>
                <th>Address:</th>
                <th>Edit:</th>
                <th>Delete:</th>
            </tr>
        </thead>
        <tbody class="mydataentry">

        </tbody>
    </table>

    <!-- add data functions .........&********************************* -->


    <div id="modalform" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ADD DATA FORM</h4>
                </div>
                <div class="modal-body">
                    <form id="formid" method="POST">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="Email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" maxlength="10" name="password" id="Password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <select class="form-control" name="city" id="city" value="Select">
                                <option value="">Select</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Sikar">Sikar</option>
                                <option value="Ajmer">Ajmer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" id="Address" placeholder="Address">
                        </div>

                        <button type="button" class="btn btn-primary adddata">Add data</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- add data functions end.........&********************************* -->




    <!-- ///////////////////////////   adit modal form ////////////////////// -->
    <div id="myEditform" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit DATA FORM</h4>
                </div>
                <div class="modal-body">
                    <form id="EditFormEdit">
                        <input type="text" id="hidden_id" name="hidden_id">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="nameedit" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="emailedit" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" id="passedit" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <select class="form-control" name="city" id="cityedit">
                                <option value="">Select</option>
                                <option>Jaipur</option>
                                <option>Sikar</option>
                                <option>Ajmer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" id="addedit" placeholder="Address">
                        </div>

                        <button type="button" class="btn btn-primary aditdata">Edit data</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- add data functions end.........&********************************* -->









</body>

</html>