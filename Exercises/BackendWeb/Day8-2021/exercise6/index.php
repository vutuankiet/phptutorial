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
    case "0":
        echo "Ngay thu hai!";
        break;
    case "1":
        echo "Ngay thu ba!";
        break;
    case "2":
        echo "Ngay thu tu!";
        break;
    case "3":
        echo "Ngay thu nam!";
        break;
    case "4":
        echo "Ngay thu sau!";
        break;
    case "5":
        echo "Ngay thu bay!";
        break;
    case "6":
        echo "Ngay chu nhat!";
        break;
    default:
        echo "Khong hop le!";
}
?>
</body>
</html>