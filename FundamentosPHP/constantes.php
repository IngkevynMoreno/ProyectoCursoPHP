<?PHP 

//Constantes

/*
1) No se necesita usar el $
2) Solo se definen con el metodo define
3) Se asignan una unica vez
4) El alcance o SCOPE es global, se puede acceder desde cualquier lugar a las constantes
*/

//definir una constante y su valor

define('CUOTA', 2000);
$valorcuota = CUOTA;

echo "el valor de la cuota: $valorcuota";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "el valor de la cuota es ". CUOTA. "<br/>";
?>