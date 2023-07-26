<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
    function getDataAll(){
        $.ajax({
            type:"post",
            url:"mydata.php",
            data:{},
            dataType:"JSON",
            success:function(resposnse){
                $appenddata="";
                $srno=1;
                $.each(resposnse,function(index,value){
                    $appenddata+='<tr>';
                    $appenddata+='<td>'+$srno+'</td>';
                    $appenddata+='<td>'+value.name+'</td>';
                    $appenddata+='<td>'+value.email+'</td>';
                    $appenddata+='<td>'+value.password+'</td>';
                    $appenddata+='<td>'+value.mobile+'</td>';
                    $appenddata+='<td>'+value.salary+'</td>';
                    $appenddata+='<td><button class="btn btn-success editmodal" data-hideen_id="'+value.id+'" data-name="'+value.name+'" data-email="'+value.email+'" data-password="'+value.password+'" data-mobile="'+value.mobile+'" data-salary="'+value.salary+'">Update</button></td>';
                    $appenddata+='<td><button class="btn btn-danger trash" data-user="'+value.id+'">Delete</button></td>';
                    $appenddata+='</tr>';
                    $srno++;

                });
                $(".dataappend").html($appenddata)
            }
        });
    }
    $(document).ready(function(){
      getDataAll();
    });



    $(document).on('click','.trash',function(){
        var user=$(this).attr('data-user');

        var conifrems=confirm("are you sure for delete..!");
        if(conifrems==true){
            $.ajax({
            type:"post",
            url:"mydata_delete.php",
            data:{id:user},
            dataType:"JSON",
            success:function(resposnse){
                alert(resposnse.message);
                if(resposnse.status==true){
                  getDataAll();
                }
            }
          });
        }
    });



    $(document).on('click','.formadd',function(){
      
      //  alert();
      var myform=$('#myformid');

            $.ajax({
            type:"post",
            url:"add_data.php",
            data:myform.serialize(),
            dataType:"JSON",
            success:function(resposnse){
               $('.formmsg').remove();
                if(resposnse.errors && !resposnse.errors==''){
                  $.each(resposnse.errors,(key, value)=>{
                      // console.log(responce.errors);
                      var msg= '<label class="error formmsg error2" style="color:red;"> '+ value +'</label>';
                      
                      myform.find('input[name="'+ key +'"], select[name="'+ key +'"], select[name="'+ key +'[]"],textarea[name="'+ key +'"]').after(msg);
                  });
                  }
                else{
                  alert(resposnse.msg);
                    if(resposnse.status==true){
                      getDataAll();
                        $("#myModal").modal('hide');
                    }
                }
                
            }
          });
    });



    $(document).on('click','.editmodal',function(){
        var curnt = $(this);
      var name=(curnt).attr('data-name');
      var email=(curnt).attr('data-email');
      var password=(curnt).attr('data-password');
      var mobile=(curnt).attr('data-mobile');
      var salary=(curnt).attr('data-salary');
      var hideen_id=(curnt).attr('data-hideen_id');

      $('#myModalEdit').modal('show');

      $('#nameedit').val(name);
      $('#emailedit').val(email);
      $('#passedit').val(password);
      $('#mobileedit').val(mobile);
      $('#salaryedit').val(salary);
      $('#hideen_id').val(hideen_id);
      // alert(hideen_id);
    });
      $(document).on('click','.submitEdit',function(){
      //  alert();
      var EditForm=$('#updateform');
            $.ajax({
            type:"post",
            url:"editmyform.php",
            data:EditForm.serialize(),
            dataType:"JSON",
            success:function(resposnse){
               $('.formmsg').remove();
                if(resposnse.errors && !resposnse.errors==''){
                  $.each(resposnse.errors,(key, value)=>{
                      // console.log(responce.errors);
                      var msg= '<label class="error formmsg error2" style="color:red;"> '+ value +'</label>';
                      
                      EditForm.find('input[name="'+ key +'"], select[name="'+ key +'"], select[name="'+ key +'[]"],textarea[name="'+ key +'"]').after(msg);
                  });
                  }
                else{
                  alert(resposnse.msg);
                    if(resposnse.status==true){
                      getDataAll();
                        $("#myModalEdit").modal('hide');
                    }
                }
                
            }
          });
    });

</script>
<body>

<div class="container">  
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add data</button>

  <table class="table">
    <thead>
      <tr>
      <th>SrNo</th>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>mobile</th>
        <th>salary</th>
        <th>Action</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody class="dataappend">
     
    </tbody>
  </table>
</div>






<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form id="myformid">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="name"  placeholder="name">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
          </div>
          <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="mobile">
          </div>
          <div class="form-group">
            <label for="">salary</label>
            <input type="text" class="form-control" name="salary" id="salary"  placeholder="salary">
          </div>
          <button type="button"  class="btn btn-primary formadd" btn-lg btn-block">add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






<div id="myModalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form id="updateform">
        <input type="text" id="hideen_id" name="hideen_id">
          
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="nameedit"  placeholder="name">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="emailedit"  placeholder="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="passedit"  placeholder="Password">
          </div>
          <div class="form-group">
            <label for="">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobileedit"  placeholder="mobile">
          </div>
          <div class="form-group">
            <label for="">salary</label>
            <input type="text" class="form-control" name="salary" id="salaryedit"  placeholder="salary">
          </div>
          <button type="button"  class="btn btn-primary submitEdit" >Edit</button>
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
