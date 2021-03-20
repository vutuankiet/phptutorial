<?php
// Tạo tập lệnh PHP tải tệp lên
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "file is an image - " . $check["mime"] . ".";
        echo "<img width='300px' height='300px' src='$target_file'><br>";
        echo "<p>Tên file: </p>".$target_file;
        echo "<p>Định dạng file: </p>".$check["mime"];
        $uploadOk = 1;
    }else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Kiểm tra xem tệp đã tồn tại chưa
if(file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Giới hạn kích thước tệp
if($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file í too large.";
    $uploadOk = 0;
}
// Giới hạn loại tệp
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" && $imageFileType != "mp4") {
    echo "Sorry, only JPG, JPEG, PNG, MP3, MP4 & GIF file are allowwed.";
    $uploadOk = 0;
}
if($uploadOk == 0) {
    echo "Sorry,your file was not uploaded.";
}else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
        echo "The file ". htmlspecialchars( basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
    }
}
?>