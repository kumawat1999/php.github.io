<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td{
            border: 1px solid #dddddd;
            color: blue;
            background-color:lightgoldenrodyellow;
        }
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            background-color:gray;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
<?php
// echo "<pre>";
// print_r($_REQUEST);

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
$lname = isset($_REQUEST['lname']) ? $_REQUEST['lname'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";


?>

<?php
$array = [
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],

    [
        'name' => 'rakesh kumawat',
        'lname' => ' kumawat',
        'email' => 'rakesh@gmail.com',
        'password' => 'askjdfkjs'
    ],

    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ],
    [
        'name' => 'amit kumawat',
        'lname' => ' kumawat',
        'email' => 'amit@gmail.com',
        'password' => 'askjdfkjs'
    ]
];

?>
<div class="container">
    <table class="table" border="1px" id="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array  as $arrayyy) { ?>
                <tr>
                    <td><?= $arrayyy['name'] ?></td>
                    <td><?= $arrayyy['lname'] ?></td>
                    <td><?= $arrayyy['email'] ?></td>
                    <td><?= $arrayyy['password'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array  as $arrayyy) { ?>
                <tr>
                    <td><?= $arrayyy['name'] ?></td>
                    <td><?= $arrayyy['lname'] ?></td>
                    <td><?= $arrayyy['email'] ?></td>
                    <td><?= $arrayyy['password'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


</body>

</html>
