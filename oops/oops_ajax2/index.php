<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>my table</title>

    <script>

            function callAjaxForIndex(){

                $.ajax({
                   

                    type:"POST",
                    url:"Mydata.php",
                    data:{},
                    dataType:'JSON',
                    success: function(responce){
                        // console.log(responce);
                        // $(".mytabledata").html(responce);

                        $mytabaleprint="";
                        $num=1;
                        
                        $.each(responce,(index, value)=>{
                            // console.log(index+' '+value);
                            
                        $mytabaleprint+="<tr>";
                        $mytabaleprint+="<td>"+$num+"</td>";
                        $mytabaleprint+="<td>"+value.name+"</td>";
                        $mytabaleprint+="<td>"+value.email+"</td>";
                        $mytabaleprint+="<td>"+value.password+"</td>";
                        $mytabaleprint+="<td>"+value.mobile+"</td>";
                        $mytabaleprint+="<td>"+value.selery+"</td>";
                        $mytabaleprint+="<td>"+<a class="btn btn-primary" href="delete.php" role="button">button</a>+"</td>";
                        $mytabaleprint+="<td>"+<a class="btn btn-info" href="edit.php" role="button">button</a>+"</td>";

                        $mytabaleprint+="</tr>";
                        $num++;


                        });
                            $(".mytabledata").html($mytabaleprint);
                    },


                    
                });
                        
            }

            $(document).ready(function(){
            callAjaxForIndex();
            });

    </script>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>sr no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Salery</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="mytabledata">
           
        </tbody>
    </table>
</body>
</html>