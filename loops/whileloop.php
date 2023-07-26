<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <script>
        var num = 0;
        var numm = "";
        var prompt = prompt("value");
        var output = parseInt(prompt);
        while (num < prompt) {
            num++;
            numm = numm + "*";
            document.write(numm + "<br>");
        }

        
    </script> -->
    <?php

    $star = array('abhi', 'amit', 'pardeep');
    $array = [
        'name' => 'amit kumawat','shyam kumawat','abhi kumawat','pardeep kumawat','lokesh kumawat',
    ];
    for ($i = 0; $i <= 3; $i++) {
        echo "<br>";
        echo "$array[$i]";
    }






    ?>

</body>

</html>