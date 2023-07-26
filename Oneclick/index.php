<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>index table </title>
    <script>
        function getAlldata() {

            $.ajax({
                type: "POST",
                url: "Mydata.php",
                data: {},
                dataType: "JSON",
                success: function(responce) {
                    $dataapend = "";
                    $num = 1;
                    $.each(responce, function(index, value) {
                        $dataapend += "<tr>";
                        $dataapend += "<td>" + $num + "</td>";
                        $dataapend += "<td>" + value.name + "</td>";
                        $dataapend += "<td>" + value.email + "</td>";
                        $dataapend += "<td>" + value.mobile + "</td>";
                        $dataapend += "<td>" + value.city + "</td>";
                        $dataapend += "<td>" + value.vilege + "</td>";
                        $dataapend += "<td>" + value.address + "</td>";
                        $dataapend += "<td class='btn btn-info editbtn' data-name='"+value.name+"' data-email='"+value.email+"' data-mobile='"+value.mobile+"'data-city='"+value.city+"'data-vilege='"+value.vilege+"' data-address='"+value.address+"'data-ids='"+value.id+"'>Edit</td>";


                        $dataapend += "<td class='btn btn-danger' id='trash' data-delete='"+ value.id +"'>Delete</td>";
                        $dataapend += "</tr>";
                        $num++;
                    });
                    $('.my_dataapned').html($dataapend);
                }
            });

        }

        $(document).ready(function() {
            getAlldata();

        });
        // ....................................... insert valu form ...............


        $(document).on('click', '.mymdal', function() {
            $("#myModal").modal('show');
        });

        $(document).on('click', '.submitbtn', function() {

                var Myform= $('#Myform');
                // console.log(Myform);
                $.ajax({
                    type:"POST",
                    url:"add_data.php",
                    data:Myform.serialize(),
                    dataType:"JSON",
                    success: function(responce){
                        console.log(responce.msg);
                      
                         $('.formmsg').remove();
                        if(responce.errors && !responce.errors==''){

                            $.each(responce.errors,(key, value)=>{
                                // console.log(responce.errors);
                                var msg= '<label class="error formmsg error2" style="color:red;"> '+ value +'</label>';
                                
                                Myform.find('input[name="'+ key +'"], select[name="'+ key +'"], select[name="'+ key +'[]"],textarea[name="'+ key +'"]').after(msg);
                            });
                        }
                        else{
                                    
                            alert(responce.msg);
                            if(responce.status == true){
                                getAlldata();
                                $("#myModal").modal('hide');
                            }

                        
                        }
                    }
                });
        });

            $(document).on('click','#trash',function(){
                var data = $(this).attr('data-delete');
                var confirms =confirm('Aru You Sure Delete Data...!');
                if(confirms ==true){
                    $.ajax({
                        type:"POST",
                        url:'Delete.php',
                        data:{id: data},
                        dataType:'JSON',
                        success:function(responce){
                            alert(responce.msg);
                            if(responce.status== true){
                                getAlldata();
                            }
                        }
                    });
                }
            });


            $(document).on('click','.editbtn',function (){
                // alert();
             
                    var crount =$(this);
                    var name =$(crount).attr('data-name');
                    var email =$(crount).attr('data-email');
                    var mobile =$(crount).attr('data-mobile');
                    var city =$(crount).attr('data-city');
                    var vilege =$(crount).attr('data-vilege');
                    var address =$(crount).attr('data-address');
                    var id =$(crount).attr('data-ids');

                    alert(email);


                    $('#EditModal').modal('show');
                    
                    $('#nameEdit').val(name);
                    $('#emailEdit').val(email);
                    $('#mobileEdit').val(mobile);
                    $('#cityEdit').val(city);
                    $('#vilegeEdit').val(vilege);
                    $('#addressEdit').val(address);
                    $('#hidan_id').val(id);
            });

            $(document).on('click','.submitedit',function(){

            var myFormEdit= $('#EditForm');
                $.ajax({
                        beforeSend:function(){
                            // alert();
                        },
                    type:"post",
                    url:'Edit.php',
                    data:myFormEdit.serialize(),
                    dataType:'JSON',
                    success:function(responce){
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
                                getAlldata();
                                $("#EditModal").modal('hide');
                        }   
                    }
                    }
                });

            });



            
                








    </script>


</head>

<body>
    <!-- Button trigger modal -->
    <button class="btn btn-info mymdal">opan modal</button>

    <table class="table table-defolt">

        <thead>
            <tr>
                <th>sr no</th>
                <th>Name:</th>
                <th>Email</th>
                <th>MObile</th>
                <th>City</th>
                <th>Vilege</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="my_dataapned">

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
                    <form id="Myform">

                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile:</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                        </div>
                        <div class="form-group">
                            <label for="">City:</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="city">
                        </div>
                        <div class="form-group">
                            <label for="">Vilege:</label>
                            <input type="text" class="form-control" name="vilege" id="vilege" placeholder="vilege">
                        </div>
                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="address">
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary submitbtn">Add data</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








    <div id="EditModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Form</h4>
                </div>
                <div class="modal-body">
                    <form id="EditForm">
                            <input type="hidden" id="hidan_id" name="hidan_id">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name" id="nameEdit" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="email" id="emailEdit" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile:</label>
                            <input type="text" class="form-control" name="mobile" id="mobileEdit" placeholder="mobile">
                        </div>
                        <div class="form-group">
                            <label for="">City:</label>
                            <input type="text" class="form-control" name="city" id="cityEdit" placeholder="city">
                        </div>
                        <div class="form-group">
                            <label for="">Vilege:</label>
                            <input type="text" class="form-control" name="vilege" id="vilegeEdit" placeholder="vilege">
                        </div>
                        <div class="form-group">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" id="addressEdit" placeholder="address">
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary submitedit">Edit data</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>