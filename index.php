<?php

    $str = "tong van dung lam web dep";
    $tim = "d";
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if (substr($str,$i,1) == $tim){
            $count = $count + 1;
        }
    }
    echo "co " .$count. " ky tu " .$tim. " trong chuoi " .$str. ".";