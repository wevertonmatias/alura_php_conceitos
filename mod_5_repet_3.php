<?php


for($i = 0; $i <= 15; $i++){

    if($i == 8){
        continue;
    }
    if($i == 13){
        break;
    }
    echo "#{$i}" . PHP_EOL;
}