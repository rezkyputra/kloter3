<?php
function countchar($kalimat, $ganti){ 
    $count=0;
    for($i=0; $i<strlen($kalimat);$i++){
        if($kalimat[$i] == $ganti){
            $count++;
        } 
    }
    if($count>0){
        return $count;
    }else{
        return "Not found!";
    }
}

echo countchar('rezkyputraakkif','x');