<?php
    $arr=[2,3,4,5,6,7,8];
    echo "so lon nhat trong mang: ".max($arr)."<br>";
    echo "so nho nhat trong mang: ",min($arr)."<br>";
    echo "trung binh cong cac phan tu trong mang: ".(array_sum($arr)/count($arr));
?>