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
    .bg-red {
        background-color: red;
    }
    .bg-black {
        background-color: white;
    }
</style>
<body>
<table>
    <?php
    $number = 1;
    $s = $number++;
//    function isPrimeNumber($n) {
//        // so nguyen n < 2 khong phai la so nguyen to
//        if ($n < 2) {
//            return false;
//        }
        // check so nguyen to khi n >= 2
//        $squareRoot = sqrt ( $n );
//        for($snt = 2; $snt <= $squareRoot; $snt ++) {
//            if ($n % $snt == 0) {
//                return false;
//            }
//        }
//        return true;
//    }

//    echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
//    for($snt = 0; $snt < 100; $snt ++) {
//        if (isPrimeNumber ( $snt )) {
////            echo ($i . " ");
//        }
//    }
//    if (($number % 1 == 0) && ($number % $number == 0)) {
//        echo "<p class='bg-black'>".($number .= $number)."</p>";
//    }
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {

            $count = 0;
            for ($k = 2; $k <= sqrt($i * 10 + $j); $k++) {
                if (($i * 10 + $j) % $k == 0) {
                    $count++;
                }
            }
            if ($i * 10 + $j < 2) {
                echo "<td>" . ($i * 10 + $j) . "</td>";
            } elseif ($count == 0) {
                echo "<td class='bg-red'>" . ($i * 10 + $j) . "</td>";
            } else {
                echo "<td>" . ($i * 10 + $j) . "</td>";
            }
    }
            echo "</tr>";

    }
    ?>
</table>
</body>
</html>