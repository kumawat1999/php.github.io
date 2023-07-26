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

                    beforeSend:function(){
                        // alert()
                    },
                type: "post",
                url: "Data.php",
                data: {},
                dataType: 'JSON',
                success: function(responce) {
                    $dataapend = '';
                    $num = 1;
                    $.each(responce, function(index, value) {

                        $dataapend += '<tr>';
                        $dataapend += '<td>' + $num + '</td>';
                        $dataapend += '<td>' + $value.name + '</td>';
                        $dataapend += '<td>' + $value.email + '</td>';
                        $dataapend += '<td>' + $value.mobile + '</td>';
                        $dataapend += '<td><button class="btn btn-success editbtn">Edit</button></td>';
                        $dataapend += '<td><button class="btn btn-danger"></button>Delete</td>';
                        $dataapend += '</tr>';
                        $num++;
                    });
                    $('.dataapend').html($dataapend);
                }
            });

        }

        $(document).ready(function() {
            getAllData();
        });
    </script>




</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>sr no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="dataapend">

        </tbody>
    </table>
</body>

</html>