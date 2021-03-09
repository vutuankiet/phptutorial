<?php
$kw = 11;
switch ($kw) {
    case ($kw >= 1 and $kw <= 100):
        echo "Truoc khi nop thue ".($tt = (450 * $kw))."<br>";
        echo "Sau khi nop thue ".($tt + (450 * $kw * 0.1));
        break;
    case ($kw >= 101 and $kw <= 200):
        echo "Truoc khi nop thue ".($tt = (600 * $kw));
        echo "Sau khi nop thue".($tt + (600 * $kw * 0.1));
        break;
    case ($kw >= 201 and $kw <= 300):
        echo "Truoc khi nop thue ".($tt = (750 * $kw));
        echo "Sau khi nop thue".($tt + (750 * $kw * 0.1));
        break;
    case ($kw >= 301 and $kw <= 500):
        echo "Truoc khi nop thue ".($tt = (900 * $kw));
        echo "Sau khi nop thue".($tt + (900 * $kw * 0.1));
        break;
    case ($kw >= 501 and $kw <= 1000):
        echo "Truoc khi nop thue ".($tt = (1000 * $kw));
        echo "Sau khi nop thue".($tt + (1000 * $kw * 0.1));
        break;
    case ($kw >= 1000):
        echo "Truoc khi nop thue ".($tt = (1200 * $kw));
        echo "Sau khi nop thue".($tt + (1200 * $kw * 0.1));
        break;
    default:
        echo "khong hop le!";
}
?>