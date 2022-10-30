<?php

// var_dump(boolval(6 %2));
for($i = 1; $i <= 100; $i++){
    if(boolval($i % 2)){
        echo "#{$i}" . PHP_EOL;
    }
}