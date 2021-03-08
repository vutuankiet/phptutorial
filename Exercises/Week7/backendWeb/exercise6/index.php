<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise6</title>
</head>
<body>
<form action="." method="post">
    <label for="#">Nhap so a: </label>
    <input name="checkNumber" type="number" placeholder="nhap so" required><br>
    <button type="submit">Kiem tra 2 So</button>
</form>
<?php
$showTime = $_POST["checkNumber"];
switch ($showTime) {
    case "$showTime == 0":
        echo "Ngay thu hai!";
    case "$showTime == 1":
        echo "Ngay thu ba!";
    case "$showTime == 2":
        echo "Ngay thu tu!";
    case "$showTime == 3":
        echo "Ngay thu nam!";
    case "$showTime == 4":
        echo "Ngay thu sau!";
    case "$showTime == 5":
        echo "Ngay thu bay!";
    case "$showTime == 6":
        echo "Ngay chu nhat!";
    default:
        echo "Khong hop le!";
}
?>
</body>
</html>