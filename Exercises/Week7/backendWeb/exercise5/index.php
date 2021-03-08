<?php
$kw = 110;
switch ($kw) {
    case "$kw >= 1 and $kw <= 100":
        echo "Truoc khi nop thue ".(450 * $kw);
        echo "Sau khi nop thue ".(450 * $kw * 0.1);
        break;
    case "$kw >= 101 and $kw <= 200":
        echo (600 * $kw);
        echo "Sau khi nop thue".(600 * $kw * 0.1);
    break;
    case "$kw >= 201 and $kw <= 300":
        echo (750 * $kw);
        echo "Sau khi nop thue".(750 * $kw * 0.1);
    break;
    case "$kw >= 301 and $kw <= 500":
        echo (900 * $kw);
        echo "Sau khi nop thue".(900 * $kw * 0.1);
    break;
    case "$kw >= 501 and $kw <= 1000":
        echo (1000 * $kw);
        echo "Sau khi nop thue".(1000 * $kw * 0.1);
    break;
    case "$kw >= 1000":
        echo (1200 * $kw);
        echo "Sau khi nop thue".(1200 * $kw * 0.1);
    break;
    default:
        echo "khong hop le!";
}
?>