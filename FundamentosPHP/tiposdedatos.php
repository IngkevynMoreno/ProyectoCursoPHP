<?php

/*

-Integers o enteros son numeros
-No contienen decimales
-Pueden contener numeros octales(base 8), hexadecimales(base 16), y binarios(base 2)
*/

echo "<br/>";
echo ".................ENTEROS.............";
echo "<br/>";

$puntaje = 120;
echo $puntaje;

//hexadecimal
echo "<br/>";
$numHexa = 0x6FFF6;
$numHexa2 = 0x8DEFE2;
echo "<br/>";
echo $numHexa;
echo "<br/>";
echo $numHexa2;

//convertir string a entero
echo "<br/>";
$puntaje = 20;
$total = "120" + $puntaje;
echo $total;

//numeros negativos
echo "<br/>";
$puntajeTotal = 8 - 12;
echo $puntajeTotal;

//Obtener tamaño de un entero(Determinado por el sistema)
echo "<br/>";
echo PHP_INT_SIZE;

//Obtener el numero minimo con el que se puede trabajar(Determinado por el sistema)
echo "<br/>";
echo PHP_INT_MIN;

//Obtener el numero maximo con el que se puede trabajar(Determinado por el sistema)
echo "<br/>";
echo PHP_INT_MAX;
echo "<br/>";
echo "<br/>";
echo ".................DECIMALES.............";
echo "<br/>";

$pagoTotal = 120.43;
echo $pagoTotal;

echo "<br/>";
$saldoPendiente = -23.56;
echo $saldoPendiente;   

//redondear decimales
echo "<br/>";
$puntaje = 41.49;
echo round($puntaje);

//comparar decimales con precision 0.1
echo "<br/>";
$precio = 1.87;
$estimado = 1.98;
echo (abs($precio - $estimado) < 0.1) ? "PAGA" : "NO PAGA";



?>