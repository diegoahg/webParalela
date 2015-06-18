<?php
var_dump($_POST);
$output = array(); //contendrá cada linea salida desde la aplicación en Python

/*Utilizando exec y enviando le el comando para ejecutar la aplicación
*solo hará que se ejecute mas no se mostrará nada...
*/
//exec("python /var/www/holamundo.py");

/*Usando exec, pero agregando le como parametro además del comando para  ejecutar la aplicación un arreglo; tendriamos la salida de nuestra aplicación en dicho arreglo; así que recorriendo e imprimiendo cada subindice del arreglo se mostraria la salida de nuestra aplicación en python utilizando php
*/
$alg = "-pf";
$mail = "@Fasta";
$uno = "1";
$dos = "1";
$tres = "1";
$cuatro = "1";
/*$comando = "python /mpi/VARIOS/plataforma.py ".$alg." ".$mail." ".$uno." ".$dos." ".$tres." ".$cuatro;
exec($comando, $output);
echo $output[0];*/
?>