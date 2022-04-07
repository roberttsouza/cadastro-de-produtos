<?php
require_once("conexao.php");

/**agrupa a tabela em grupo e soma os valores da coluna unidades e foi dado o apelido (AS) de quantidade */
$comando = "SELECT nome,categoria, SUM(unidades) AS quantidade FROM produtos GROUP BY produtos.nome;";
$enviar = mysqli_query($conn, $comando);

$result = mysqli_fetch_all($enviar, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  
<section class="secao-table">
  <div class="container-table">
    <div class="content-table">

        <table>
          <tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th>Quantidade</th>
          </tr>


        <?php
        foreach($result as $produto){
          $categoria=$produto['categoria'];
          $nome=$produto['nome'];
          $quantidade=$produto['quantidade'];
        ?>
        <tr>
            <td><?=$categoria?></td>
            <td><?=$nome?></td>
            <td><?=$quantidade?></td>
          </tr>
          <?php
          }
          ?>
          
        </table>
        <a class="link-voltar" href="index.php">← Valtar para a pagina inicial</a>
    </div>
  </div>
</section>



</body>
</html>
