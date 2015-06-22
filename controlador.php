<?php
var_dump($_POST["algoritmo"]);
$output = array(); //contendrá cada linea salida desde la aplicación en Python

/*Utilizando exec y enviando le el comando para ejecutar la aplicación
*solo hará que se ejecute mas no se mostrará nada...
*/
//exec("python /var/www/holamundo.py");

/*Usando exec, pero agregando le como parametro además del comando para  ejecutar la aplicación un arreglo; tendriamos la salida de nuestra aplicación en dicho arreglo; así que recorriendo e imprimiendo cada subindice del arreglo se mostraria la salida de nuestra aplicación en python utilizando php
*/
$alg = $_POST["algoritmo"];
$mail = "@Biblia";
$uno = "1";
$dos = "1";
$tres = "1";
$cuatro = "1";
$comando = "python /mpi/VARIOS/plataforma.py ".$alg." ".$mail." ".$uno." ".$dos." ".$tres." ".$cuatro;
switch($_POST["algoritmo"]){
	case "-pp":
		$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python ";
		exec($comando);
		break;
	case "-pf":
		$uploaddir = '/var/www/html/webParalela/FASTA/';
		$uploadfile = $uploaddir . basename($_FILES['documento']['name']);

		echo '<pre>';
		if (move_uploaded_file($_FILES['documento']['tmp_name'], $uploadfile)) {
		    echo "El archivo es válido y fue cargado exitosamente.\n";
		} else {
		    echo "¡Posible ataque de carga de archivos!\n";
		}
		echo 'Aquí hay más información de depurado:';
		print_r($_FILES);

		print "</pre>";
		//$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python ";
		//exec($comando);
		break;
	case "-pbi":
		$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python /mpi/FASTA/paralelo.py ";
		exec($comando);
		break;
	case "-pbe":
		$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python";
		exec($comando);
		break;

}
echo $output[0];
?>