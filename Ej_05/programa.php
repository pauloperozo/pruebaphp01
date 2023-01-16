<?php
///////////////////////////////////////////////////
function Cultivar($l,$n) {

    /*Validaciones (1 ≤ 𝐿 ≤ 10^6, 0 ≤ 𝑁 ≤ 𝐿^2) */
    if($l < 1 || $l > pow(10, 6))return "Error";
    if($n < 0 || $n > pow($l, 2))return "Error";

    if( $l == 0 && $n == 0) return "Error";
    if( $n == 0 )return 0;

    if( $l < 3) return (2*$n)+2;
    else return (2*$n);    
}
///////////////////////////////////////////////////
function main() {

    $input = [ [1,0],[1,1],[2,3],[3,8],[0,0] ];

    foreach( $input as $params ) 
    {
        $resultado = Cultivar($params[0],$params[1]);
        echo '['.join(",",$params).'] '.$resultado. "\n";
    }
}
///////////////////////////////////////////////////
main();
///////////////////////////////////////////////////
?>
