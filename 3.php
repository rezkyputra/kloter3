<?php
function countchar($kalimat, $ganti){ 
    $count=0;
    for($i=0; $i<strlen($kalimat);$i++){
        if($kalimat[$i] == $ganti){
            $count++;
        } 
    }
    return $count;
}

echo countchar('rezkyputraakkif','k');