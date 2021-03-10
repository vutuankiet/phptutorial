<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, td, tr {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        width: 20px;
        height: 20px;
        background-color: white;
    }

    .bg-black {
        background-color: white;
    }
</style>
<body>
<table>
    <?php
    $number = 1;
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
                for ($number = 1;$number <= 100;$number++) {
                    
                }
                echo "<td class='bg-black'></td>";
            }

        echo "</tr>";
    }
    ?>
</table>
</body>
</html>