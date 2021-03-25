<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <link rel="stylysheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <h4>Product</h4>
        <div class="row m-auto p-0">
            <?php
            $data = [
                [
                    'name' => 'FinePix Pro2 3D Camera',
                    'price' => 1500,
                    'image' => './image/camera.jpg',
                    'code' => '3DcAM01'
                ],
                [
                    'name' => 'EXP Portable Hard Drive',
                    'price' => 800,
                    'image' => './image/camera.jpg',
                    'code' => 'USB02'
                ],
                [
                    'name' => 'Luxury Ultra thin Wrist Watch',
                    'price' => 300,
                    'image' => './image/camera.jpg',
                    'code' => 'wristWear03'
                ],
                [
                    'name' => 'XP 1155 Intel Core Laptop',
                    'price' => 800,
                    'image' => './image/camera.jpg',
                    'code' => 'LPN45'
                ]
            ];
            foreach ($data as $key => $value) {
                echo "<div class='col-12 col-sm-6 col-md-6 col-lg-3 card-deck mx-auto'>";
                echo "<div class='card my-2'>";
                echo "<img src='" . $value['image'] . "'>";
                echo "<div class='card-body'>";
                echo "<p><small class='text-left'>" . $value['name'] . "</small></p>";
                echo "<p class='text-left d-flex'>" . $value['price'];
                echo "<input class='w-20' type='number' name='number' value='1'></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>