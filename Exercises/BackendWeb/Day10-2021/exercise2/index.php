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
            <label for="firstName">First name:</label>
            <input class="form-control" type="text" name="firstName" placeholder="Firstname" required><br>
            <label for="lastName">Last name:</label>
            <input class="form-control" type="text" name="lastName" placeholder="Lastname" required><br>
            <input class="form-control" type="email" name="email" placeholder="email" required><br>
            <div class="col-12 d-flex">
                <label for="gender">Gender:</label>
                <div class="form-check ms-2">
                    <input type="radio" class="form-check-input" id="genderMall" name="gender" value="Mall" required>
                    <label class="form-check-label" for="genderMall">Mall</label>
                </div>
                <div class="form-check ms-2">
                    <input type="radio" class="form-check-input" id="genderFemall" name="gender" value="Femall" required>
                    <label class="form-check-label" for="genderFemall">Femall</label>
                </div>
            </div>
            <div class="col-12">
                <label for="#">State:</label>
                <div class="mb-3">
                    <select class="form-select" name="state" required aria-label="select example">
                        <option value="">Open this select menu</option>
                        <option value="johor">Johor</option>
                        <option value="massachusetts">massachusetts</option>
                        <option value="washington">Washington</option>
                    </select>
                </div>
            </div>
            <div class="col-12"><label for="#">Hobbies:</label></div>
            <div class="col-12 d-flex">
                <div class="form-check mb-3 ms-2">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="Badminton" id="checkBadminton">
                    <label class="form-check-label" for="checkBadminton">Badminton</label>
                </div>
                <div class="form-check mb-3 ms-2">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="Football" id="checkFootball">
                    <label class="form-check-label" for="checkFootball">Football</label>
                </div>
                <div class="form-check mb-3 ms-2">
                    <input type="checkbox" class="form-check-input" name="hobbies" value="Bicycle" id="checkBicycle">
                    <label class="form-check-label" for="checkBicyle">Bicycle</label>
                </div>
            </div>
            <button class="btn btn-outline-primary" type="submit" name="submit">Save record</button>
            <button class="btn btn-outline-dark" type="reset" name="reset">Reset</button>
        </form>
        <?php
        $firstName = $lastname = $email = $gender = $state = $hobbies = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = test_input($_POST["firstName"]);
            $lastName = test_input($_POST["lastName"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
            $state = test_input($_POST["state"]);
            $hobbies = test_input($_POST["hobbies"]);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }echo "dang nhap thanh cong: <br>Thong tin cua ban la: <br>";
        echo "Firstname: $firstName<br>Lastname: $lastName<br>Email: $email<br>Gender: $gender<br>State: $state<br>Hobbies: $hobbies"
        ?>
    </div>
</div>

</body>
</html>