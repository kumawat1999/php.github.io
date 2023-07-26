<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>for loop</title>
</head>

<body>
    <script>
        var tables = "";
        tables += " <table class='table table-bordered' cellpadding='0' cellspacing='0' border='2px solid'>";

        for (var i = 1; i <= 20; i++) {
            tables += "<tr>"
            for (var k = 2; k <= 20; k++) {
                tables += "<td>" + (i * k) + "</td>";

            }
            tables += "</tr>";
        }
        tables += "</table>";
        document.write(tables);
        document.write("<br>");


        var tables = "";
        var num =0;
        var nums =20;

        tables += " <table class='table table-bordered' cellpadding='0' cellspacing='0' border='2px solid'>";

        while ( num < nums){
            num++;
            document.write(num);
            document.write("<br>");

        }

    </script>

</body>

</html>