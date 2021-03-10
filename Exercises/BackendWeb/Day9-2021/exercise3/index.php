<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<body>

<?php
$firstNum = 1;
$sum = 0;
$divisible = null;

while ($firstNum <= 100) {
    $sum += $firstNum;

    $firstNum++;
    if ($firstNum >= 20 and $firstNum <= 50) {
        if ($firstNum % 3 == 0) {
            $divisible .= "$firstNum ";
        }
    }
}
echo "Tong cac so nguyen: " . $sum . "<br>";
echo " so chia het cho 3 la: " . $divisible;
?>

</body>
</html>
</body>
</html>