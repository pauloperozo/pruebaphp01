<?php
///////////////////////////////////////////////////
function TotalPuntuacion( $lista )
{
    $puntuacion = 0;
    foreach( $lista as $item )
    {
        if( $item == 8) $puntuacion += 5; /* igual a 8  */
        else 
        {
            if( $item % 2 == 0 ) $puntuacion += 1; /*Par */ 
            else $puntuacion += 3;  /*Impar */
        }
    }

    return $puntuacion;
}
///////////////////////////////////////////////////
function main() {

    $input = [ [1,2,3,4,5],[15,25,35],[8,8] ];

    foreach( $input as $lista  ) 
    {
        $resultado = TotalPuntuacion( $lista );
        echo '['.join(",",$lista).'] '.$resultado. "\n";
    }

}
///////////////////////////////////////////////////
main();
///////////////////////////////////////////////////
?>