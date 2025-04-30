<?php

$nombre = "Armando";
$apellido = "Casas";
$salario = 2000000;

//EL = es un operador de asignacion, los operadores se usan para realizar operaciones sobre las variables


//Tipos de operadores

//Aritmeticos
$sueldo = 1000000;
$subsidiotransporte = 200000;
$salud = 100000;
$pension = 100000;

$ingresos = $sueldo + $subsidiotransporte;
$egresos = $salud + $pension;
$total = $ingresos - $egresos;
echo "<br/>";
//calcular el area de un rectangulo

$base = 10;
$altura = 24;
$area = $base * $altura;
echo$area;

echo "<br/>";
//division
$num1 = 30; $num2 = 10; $division = $num1 / $num2;
echo $division;
echo "<br/>";

//porcentaje
echo "<br/>";
$sumaNotas = 42;
$cantidadMaterias = 5;
$promedio = $sumaNotas / $cantidadMaterias;
echo $promedio;

//modulo
echo "<br/>";
$a = 41 % 2;
echo $a;

//potencia
echo "<br/>";
$c = 7;
$d = 3;
$potencia = $c ** $d;
echo $potencia;

//Operadores condicionales

//ternario
echo "<br/>";
$puedeingresar = (true) ? "ENTRA" : "NO ENTRA";
echo $puedeingresar;

//operador logico and or && ||

echo "<br/>";
$permiso = false;
$autenticado = true;
echo($permiso || $autenticado) ? "bienvenido admin" : "bienvenido invitado";



echo "<br/>";
$totalMateria = 49;
$pasaMateria = 50;
$validarPasa = ($totalMateria > $pasaMateria)  ? true : false;
echo ($validarPasa) ? "PASA" : "NO PASA";

echo "<br/>";
echo "<br/>";
$contador = 1;
//$contador = $contador + 1;
$contador += $contador;
echo $contador;

echo "<br/>";
$contador = 1;
//$contador = $contador - 1;
$contador -= $contador;
echo $contador;

echo "<br/>";
$contador = 1;
//$contador = $contador * 1;
$contador *= $contador;
echo $contador;

echo "<br/>";
$contador = 30;
//$contador = $contador / 2;
$contador /= 2;
echo $contador;

echo "<br/>";
$contador = 51;
//$contador = $contador % 2;
$contador %= 2;
echo $contador;

echo "<br/>";
//.= acumular strings
$nombreCompleto = "A";
$nombreCompleto .= "L";
$nombreCompleto .= "V";
echo $nombreCompleto;

//operador de incremento
echo "<br/>";
echo "<br/>";
$conta = 20;
$conta += 1;
echo $conta;

//operador de post-incremento
echo "<br/>";
echo $conta++;
echo "<br/>";
echo $conta;

//operador de pre-incremento
echo "<br/>";
echo ++$conta;
echo "<br/>";
echo $conta;

//operador de decremento
echo "<br/>";
$conta = 20;
$conta -= 1;
echo $conta;
echo "<br/>";

//operador de post-decremento
echo "<br/>";
echo $conta--;
echo "<br/>";
echo $conta;

//operador de pre-decremento
echo "<br/>";
echo --$conta;
echo "<br/>";
echo $conta;
?>