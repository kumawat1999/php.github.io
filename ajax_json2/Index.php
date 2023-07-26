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
        function getAllData() {

            $.ajax({
                beforeSend: function() {
                    // alert("beforsend function started..!");
                    
                },
                type: "POST",
                url: "mydata.php",
                data: {},
                dataType: 'JSON',
                success: function(responce) {

                    $appenddeta = "";
                    $num = 1;
                    
                    $.each(responce, function(index, value) {

                        $appenddeta += "<tr>";
                        $appenddeta += "<td>" + $num + "</td>";
                        $appenddeta += "<td>" + value.name + "</td>";
                        $appenddeta += "<td>" + value.email + "</td>";
                        $appenddeta += "<td>" + value.password + "</td>";
                        $appenddeta += '<td><button class="btn btn-success edittrash" data-name="' + value.name + '" data-email="' + value.email + '" data-password="' + value.password + '" data-ids="' + value.id + '">Update</button></td>';
                        $appenddeta += '<td><button class="btn btn-danger trash" data-user="' + value.id + '">Delete</button></td>';
                        $appenddeta += "</tr>";
                        $num++;
                    });
                    $('.mydatatable').html($appenddeta);
                }

                
            });
        }
        $(document).ready(function() {
            getAllData();
        });
        $(document).on('click', '.trash', function() {
            // alert();
                var user = $(this).attr('data-user');
                var confirms = confirm("are yor sure delete data..!");
                if (confirms == true) {
                    $.ajax({
                        type: 'POST',
                        url: 'Delete.php',
                        data: {id: user},
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



            $(document).on('click','.addbutton',function(){
                var myForm=$("#myForm");
                // alert("uytgfghjytfg");
                $.ajax({
                    // beforeSend:function(){
                    //     $(".loder").show();
                    // },
                    type:"POST",
                    url:"add_data.php",
                    data:myForm.serialize(),
                    dataType:"JSON",
                    success:function(responce){
                        $('.formmsg').remove();
                        if(responce.errors && !responce.errors==''){

                            $.each(responce.errors,(key, value)=>{
                                // console.log(responce.errors);
                                var msg= '<label class="error formmsg error2" style="color:red;"> '+ value +'</label>';
                                
                                myForm.find('input[name="'+ key +'"], select[name="'+ key +'"], select[name="'+ key +'[]"],textarea[name="'+ key +'"]').after(msg);
                            });
                        }
                        else{
                            alert(responce.msg);
                            if(responce.stetus==true){
                                getAllData();
                                $("#myModal").modal('hide');
                            }

                        }
                    },
                });
            });

            $(document).on('click','.edittrash',function(){
                
                
                var currnt=$(this);
                var name=$(currnt).attr('data-name');
                var emails=$(currnt).attr('data-email');
                var passwords=$(currnt).attr('data-password');
                var id=$(currnt).attr('data-ids');
                
                $('#myFormShow').modal('show');

                $('#nameEdit').val(name);
                $('#emailEdit').val(emails);
                $('#passwordEdit').val(passwords);
                $('#hidan_id').val(id);
                // alert(passwords);
            });
            

            $(document).on('click','.editfunction',function(){
                var myFormEdit=$("#myFormEdit");
                // alert("uytgfghjytfg");
                $.ajax({
                    // beforeSend:function(){
                    //     $(".loder").show();
                    // },
                    type:"POST",
                    url:"edit_my_data.php",
                    data:myFormEdit.serialize(),
                    dataType:"JSON",
                    success:function(responce){
                        // console.log(responce);
                        $('.formmsgs').remove();
                        if(responce.errors && !responce.errors==''){

                            $.each(responce.errors,(key, value)=>{
                                // console.log(responce.errors);
                                var msg= '<label class="error formmsgs error2" style="color:red;"> '+ value +'</label>';
                                
                                myFormEdit.find('input[name="'+ key +'"], select[name="'+ key +'"], select[name="'+ key +'[]"],textarea[name="'+ key +'"]').after(msg);
                            });
                        }
                        else{

                            alert(responce.msg);
                            if(responce.status ==true){
                                getAllData();
                                $("#myFormShow").modal('hide');
                        }

                        }
                    },
                });
            });

    </script>
    <style>
        #button {
            /* float: right; */
            padding: 4px;
            margin-top: 20px;
            margin-left:90%;
        }
    </style>
</head>

<body>
    <button type="button" class="btn btn-info btn-lg" id="button" data-toggle="modal" data-target="#myModal">Open Modal</button>
    <table class="table">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Name:</th>
                <th>Email:</th>
                <th>Password:</th>
                <th>Delete:</th>
                <th>Adit:</th>
        </thead>
        <tbody class="mydatatable">
        </tbody>
    </table>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Form</h4>
                </div>
                <div class="modal-body">
                <form id="myForm" method="POST">
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
                    <input type="text" class="form-control" name="password" id="Password" placeholder="Password">
                    </div>
                    <button type="button"  class="btn btn-primary addbutton">Add data</button>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>




    <div id="myFormShow" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                <div class="modal-body">

                <form id="myFormEdit" method="POST">
                <input type="hidden" name="hidan_id" id="hidan_id">
                    <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="nameEdit" >
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="emailEdit">
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" id="passwordEdit">
                    </div>
                    <button type="button"  class="btn btn-primary editfunction">Edit data</button>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>