<?php
//////////////////////////////////////////////////////
function TotalSuma( $p1,$p2 ) {

    $matrix = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    
    /*Validaciones  */
    if( $p1 < 0 || $p2 < 0 ) return -1;
    if( $p1 > $p2) return 0; 
    if( $p1 > 100 && $p2 > 100) return 0;
    
    $acum = 0; 
    foreach( $matrix as $item  ) {
        if( $item >= $p1 && $item <= $p2 ) $acum += $item;
    }
    
    return $acum;
}


///////////////////////////////////////////////////
function main() {

    $input = [30,60];
    $resultado = TotalSuma( $input[0],$input[1] );
    echo '['.join(",",$input).'] '.$resultado. "\n";

}
///////////////////////////////////////////////////
main()
///////////////////////////////////////////////////
?>