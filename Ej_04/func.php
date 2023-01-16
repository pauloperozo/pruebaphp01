<?php
///////////////////////////////////////////////////
function ImprimirMatrix( $matrix ){

    echo "\n";
    foreach( $matrix as $fila ) echo join(" ",$fila). "\n";
    echo "\n";
}
///////////////////////////////////////////////////
function CrearMatrix($filas,$columnas)
{
    $registros = [];
    for($i = 0; $i < $filas;$i++)
    {
        $values = [];
        for($j = 0; $j < $columnas;$j++) array_push($values,"##");
        array_push($registros, $values);
    }

    return $registros;
}
///////////////////////////////////////////////////
function RellenarMatrix( $matrix )
{
    $item = 0;

    for($ptr = 0; $ptr < count($matrix) ; $ptr++ )
    {
        $i = $ptr;
        for($j = 0; $j <= $ptr; $j++)
        {
            $matrix[$i][$j] = str_pad( (String)$item++,2," ");
            $i--;

                        //$matrix[i][j] = `${item++}`.padStart(2);
        }
    }

    return $matrix;
}
///////////////////////////////////////////////////
function BuscarMatrix($matrix,$i,$j) {
    return $matrix[$i][$j];
}
///////////////////////////////////////////////////
?>