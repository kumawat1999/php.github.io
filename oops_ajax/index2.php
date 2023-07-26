<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>ajax 2</title>
<style>
.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
    <script>

            function callAjaxForIndex(){

                $.ajax({
                    beforeSend:function(){
                        $('.loader').show();
                    },
                    type:"POST",
                    url:"mydata.php",
                    data:{},
                    success: function(responce){
                        // console.log(responce);
                        $(".myappenddata").html(responce);
                    },

                    complate:function (){
                        $('.loader').hide();
                    }
                });
                        
            }

            $(document).ready(function(){
            callAjaxForIndex();
            });

    </script>
</head>
<body>
<div class="loader" ></div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Sr. no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="myappenddata">
            
    </tbody>
</table>
</body>
</html>