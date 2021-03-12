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
        background-color: black;
    }
</style>
<body>
<table>
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 8; $j++) {
            if ($i % 2 == 1 && $j % 2 == 1) {
                echo "<td class='bg-black'></td>";
            } elseif ($i % 2 == 0 && $j % 2 == 0) {
                echo "<td class='bg-black'></td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>