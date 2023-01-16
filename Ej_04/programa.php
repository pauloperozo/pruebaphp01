<?php
///////////////////////////////////////////////////
include('func.php'); /* Funciones */
///////////////////////////////////////////////////
function main() {

    $input = [[8,8,3,2]];

    foreach( $input as $params) 
    {
        $matrix = CrearMatrix( $params[0],$params[1] );
        $matrix = RellenarMatrix( $matrix );
        ImprimirMatrix($matrix);
        echo 'Busqueda:'. "\n";
        $resultado = BuscarMatrix($matrix,$params[2],$params[3]);
        echo '['.join(",",$params).'] '.$resultado. "\n";
    
    }

}
///////////////////////////////////////////////////
main();
///////////////////////////////////////////////////
?>