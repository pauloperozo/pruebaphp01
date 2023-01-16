<?php
///////////////////////////////////////////////////
function GradosMenor( $time ) {

    /*Validacion */
    if(! preg_match("/^(?:0[0-9]|1[0-2]):[0-5][0-9]\s?$/", $time)) return "Error Formato";

    $horas   = (int) explode(":",$time)[0];  
    $minutos = (int) explode(":",$time)[1];  

    $grados     = 360;
    $grado_hora = 30;
    $grado_min  = 5;

    $max_horas  = 12;
    $max_min    = 60;

    $HorasGrados   = $horas < $max_horas ? ( $horas * $grado_hora ) : 0;
    $MinutosGrados = $minutos < $max_min ? (( $minutos / $grado_min ) * $grado_hora) : 0;
    $diferencia    = abs($HorasGrados - $MinutosGrados);
    $resultado     = $diferencia <= ( $grados / 2 ) ? $diferencia : $grados - $diferencia;
    return $resultado;
}
///////////////////////////////////////////////////
function main() {

    $input = ["01:45","10:30","02:25","00:00","12:30","12:05","12:12","12:27"];

    foreach($input as $time ) 
    {
        $resultado = GradosMenor( $time  );
        echo '['.$time.'] '.$resultado. "\n";
    }
}
///////////////////////////////////////////////////
main();
///////////////////////////////////////////////////
?>