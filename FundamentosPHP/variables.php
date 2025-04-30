<?php

#definir variable
$nombre = 'xd';

$url = "https://www.udemy.com/course/master-en-php-desde-0-hasta-desarrollar-sistemas-completos/learn/lecture/37823822#questions";

echo "<h3>dirección</h3>";
echo $url;
echo "<br />";
echo 'hola 2';

#cambiando el valor de una variable
echo "<br />";
$url = "www.miswebos.com";
echo $url;


//tipo string y concatenacion de variables

echo "<br />";
$apellidos = "bueno castro";
$mensaje = "mi primer string";

print "$apellidos".":"." $mensaje";
echo "<br />";
print "$apellidos: $mensaje";

//variables tipo entero

$estatura = 17;
echo "<br />";
echo "Estatura: $estatura";
echo "<br />";

//suma de valores

$num1 =10;
$num2 =20;

$total = $num1 + $num2;
echo $total;
echo "<br />";

function sumar(){
    $var1 = 30;$var2 = 50;
    $totalsum= $var1 + $var2;
    echo "la suma es:".$totalsum;
}

// sumar();

function restar(){
    $var1 = 100;$var2 = 40;
    $totalres= $var1 +- $var2;
    echo "la resta es:".$totalres;
}

restar();

//variable local SCOPE(Alcance)

$contacto = "Jon Doe";

function MostrarContacto(){
$contacto = "Juan Carlos";
echo $contacto;

}

echo"<br />";
MostrarContacto();
echo"<br />";
echo$contacto;

echo"<br />";
echo"<br />";
echo"<br />";

//varables globales, se pueden utilizar en cualquier parte del script
//siempre y cuando tengan la palabra global al lado

global $mensaje;

$mensaje = "saludo";

function MostrarContacto3(){
    global $mensaje;
    echo $mensaje;
    
    }
    
echo"<br />";
MostrarContacto3();
echo"<br />";
echo$mensaje;
echo"<br />";
echo"<br />";
echo"<br />";

//variables estaticas, conservan su valor entre llamadas consecutivas a esa funcion usando la palabra static

function contador() {
    static $num = 1;
    echo $num;
    $num = $num + 1;

}

echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";
contador();
echo "<br />";

//variables superglobales

$saludo4 = "wenas";
echo $GLOBALS['saludo4']. "</br>";

echo "</br>";


?>