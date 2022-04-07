<?php
session_start();
require_once("conexao.php");

/**verificando se e o botão de enviar foi clicado e se todos os campos do formularios estão preenchidos */
if (isset($_GET['enviar'])){
  if(!empty($_GET['nomeproduto']) || !empty($_GET['quantidadeproduto']) || !empty($_GET['categoria'])){
    $nome=$_GET['nomeproduto'];
    $unidades=$_GET['quantidadeproduto'];
    $categoria=$_GET['categoria'];
 
  
/**inserindo na tabelo do banco de tados os produtos */
$comando="INSERT INTO produtos(nome, unidades, categoria) VALUES ('$nome', '$unidades', '$categoria')";
$enviar=mysqli_query($conn, $comando);

/**verificando se o produto foi cagrastrado corretamente */
if($enviar){
  $_SESSION['mensagem']="prodoto cadastrado com sucesso";
  header("location:index.php");
  exit;
}else{
  $_SESSION['mensagem']="erro no cadastramento";
  header("location:index.php");
  exit;
}
}
}
?>

