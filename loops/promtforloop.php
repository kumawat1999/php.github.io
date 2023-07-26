<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <script>
        var promt= prompt(" Enter N umber");
        var promtvalu = parseInt(promt);
        var tables = "";
        tables += "<table border='1'>"

        for (var i = 1;  i<= promt; i++) {
            tables += "<tr>"
            for (var k = 1; k <= promt; k++) {
                tables += "<td>" + (i * k) + "</td>";

            }
            tables += "</tr>";
        }
        tables +="</table>";
        document.write(tables);
        document.write("<br>");
    </script>
</body>

</html>