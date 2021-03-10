<?php
    $show = null;
    $s = null;
    for($i = 1;$i < 50;$i++) {
        $show .= "$i-";
        if($i == 49){

        $show .= $i + 1;
        }


}
    echo $show;
?>