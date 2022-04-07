<!--CONEXÃO COM O BANCO DE DADOS-->
<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "lista";
$conn = mysqli_connect($hostname,$user,$password,$database);

if (!$conn) {
	print"falha na conexão com o servidor";
}
?>