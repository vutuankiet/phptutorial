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
<?php
$text = $checkbox = $textarea = $radio = $select = "";
$textErr = $checkboxErr = $textareaErr = $radioErr = $selectErr = "";
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["text"])) {
        $textErr = "*Text is required";
    } else {
        $text = check_input($_POST["text"]);
    }
    $textarea = $_POST["textarea"];
    if (empty($_POST["radio"])) {
        $radioErr = "*Radio is required";
    } else {
        $radio = check_input($_POST["radio"]);
    }
    $select=$_POST["select"];
    if (empty($_POST["checkbox"])) {
        $checkbox = "";
    } else {
        foreach ($_POST["checkbox"] as $checkb) {
            $checkbox .= "$checkb,";
        }
    }
}
?>
<body>
<div class="container bg-light">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label" for="text">Text</label><span class="text-danger"><?php echo $textErr; ?></span>
            <input class="form-control" type="text" name="text" id="text" value="<?php echo $text; ?>">
        </div>
        <div class="form-group">
            <p>Checkbox</p>
            <input type="checkbox" name="checkbox[]" id="checkbox1" value="checkbox1">
            <label for="checkbox1" class="control-label">checkbox1</label><br>
            <input type="checkbox" name="checkbox[]" id="checkbox2" value="checkbox2">
            <label for="checkbox2" class="control-label">checkbox2</label><br>
            <input type="checkbox" name="checkbox[]" id="checkbox3" value="checkbox3">
            <label for="checkbox3" class="control-label">checkbox3</label><br>
        </div>
        <div class="form-group">
            <label>Textarea</label><br>
            <textarea class="w-100" name="textarea" placeholder="text"></textarea>
        </div>
        <div class="form-group">
            <label for="#" class="control-label mr-2">Radio button</label><br>
            <input type="radio" name="radio" id="yep" value="yep" <?php if (isset($radio) && $radio == "yep") echo "checked"; ?> required> yep
            <input type="radio" name="radio" id="nope" value="nope" <?php if (isset($radio) && $radio == "nope") echo "checked"; ?> required> nope
            <input type="radio" name="radio" id="none" value="none" <?php if (isset($radio) && $radio == "none") echo "checked"; ?> required> none<span class="text-danger"><?php echo $radioErr; ?></span>
        </div>
        <div class="form-group">
            <label for="select" class="control-label">Select</label>
            <select name="select" id="select" class="form-control" required>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>
        <label>Upload files</label><br>
        <input class="form-control" type="file" name="fileToUpload[]" multiple="true" required>
        <button class="col-12 my-3" type="submit" name="submit">Submit</button>
    </form>
</div>
<?php
// Tạo tập lệnh PHP tải tệp lên
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "<div class='container text-dark'><h1>Check form: </h1>";
        echo "<img width='500px' height='300px' src='$target_file' alt=''><br>";
        echo "<p>Tên file: " . $target_file . "</p>";
        echo "<p>Định dạng file: " . $check["mime"] . "</p>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Kiểm tra xem tệp đã tồn tại chưa
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Giới hạn kích thước tệp
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Giới hạn loại tệp
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4") {
    echo "Sorry, only JPG, JPEG, PNG, MP3, MP4 & GIF file are allowwed.";
    $uploadOk = 0;
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    }
}
if (!empty($_POST["text"]) && !empty($_POST["radio"])) {
    echo "<p>Text: $text<br>";
    echo "Textarea: $textarea <br>";
    echo "Radio: $radio <br>";
    echo "Select: $select <br>";
    echo "Checkbox: $checkbox </p></div>";
}
?>
</body>
</html>