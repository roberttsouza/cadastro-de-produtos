<?php
/**confirmação se os dados foram para o banco */
session_start();
require_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro de produtos</title>
</head>
<body>
  <section class="secao-form">
    <div class="container-form">
      <h1 class="tittleh1">Cadastre novos produtos na lista</h1>
      <p class="tittlep">Aqui você pode cadastrar novos produtos e ver a lista com todos os produtos</p>
      <form class="content-form" action="listar.php" method="get" accept-charset="utf-8">
        
        <input class="camp" placeholder="Nome do produto" type="text" name="nomeproduto">
        <input class="camp" placeholder="Quantidade de produtos" type="number" name="quantidadeproduto"><br>
        
        <select name="categoria"  type="text" id="selecao-categ">
          <option>Selecione uma categoria</option>
          <option value="Limpeza">Limpeza</option>
          <option value="Banho">Banho</option>
          <option value="Alimentação">Alimentação</option>
          <option value="Pet">Pet</option>
          <option value="Jardinagem">Jardinagem</option>
        </select>

        <!--mensagem de codastro concluido ou erro no cadastramento do produto-->
        <p class="mensagem-erro">
            <?php
              if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
              }
            ?>
        </p>
        <input class="btn" type="submit" name="enviar">
        <a class="link-list" href="lista.php">Ver lista de produtos</a>
      </form>
      
    </div>

    
  </section>
</body>
</html>