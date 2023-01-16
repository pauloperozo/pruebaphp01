<?php
///////////////////////////////////////////////////
function main() {

    $input = [ [1,2,3,4,5],[15,25,35],[8,8] ];

    foreach( $input as $lista  ) 
    {
        $resultado = array_reduce($lista,fn($puntacion,$item) => $puntacion +=  $item == 8  ? 5 : ($item % 2  == 0 ? 1 : 3) ,0);
        echo '['.join(",",$lista).'] '.$resultado. "\n";
    }

}
///////////////////////////////////////////////////
main();
///////////////////////////////////////////////////
?>