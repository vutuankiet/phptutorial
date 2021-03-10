<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
            integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
            integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-12 col-sm-8 col-md-5 col-lg-4 m-auto border border-dark rounded-3">
        <h2 class="col-12 text-center text-light bg-primary p-3">Login</h2>
        <form class="p-5" action="." method="POST">
            <input class="form-control" type="text" name="userName" placeholder="Username" required><br>
            <input class="form-control" type="password" name="password" placeholder="Password" required><br>
            <button class="btn btn-outline-primary col-12" type="submit" name="submit">Login</button>
        </form>
        <?php
        $UserName = $_POST['userName'];
        $Password = $_POST['password'];
        if ($UserName == "admin" && $Password == "admin") {
            echo "<p class='col-12 m-auto px-5 pb-5'><span class='text-success'>Dang nhap thanh cong!</span>" . "<br>";
            echo "Username la: " . $UserName . "<br>";
            echo "Password la: " . $Password."</p>";
        }else {
            echo "<p class='col-12 m-auto px-5 pb-5 text-danger'>Thông tin đăng nhập không chính xác. Xin hãy kiểm tra lại!</p>";
        }
        ?>
    </div>
</div>

</body>
</html>