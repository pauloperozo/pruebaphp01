<?php
///////////////////////////////////////////////////
function main() {

    $p1 = 30;
    $p2 = 60;
    $matrix = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    

    /*Proceso*/ 
    $resultado;
    if( $p1 < 0 || $p2 < 0 ) $resultado = -1;
    else if( ($p1 > $p2) || ($p1 > 100 && $p2 > 100) ) $resultado =  0;
    else $resultado = array_reduce($matrix,fn($acum,$item) => $acum += ($item >= $p1 && $item <= $p2) ?  $item : 0,0 );

    echo '['.$p1.','.$p2.'] '.$resultado. "\n";

}
///////////////////////////////////////////////////
main()
///////////////////////////////////////////////////
?>