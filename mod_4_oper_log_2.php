<?php

$idade = 16;
$acompanhada = true;

echo "Você tem {$idade} anos." . PHP_EOL;


if($idade >= 18){
    echo "Pode entrar" . PHP_EOL;
}else if( $idade >= 16 && $acompanhada){
    echo "Você pode entrar e está acompanhada.". PHP_EOL;
}else{
    echo "Você não pode entrar." . PHP_EOL;
}