<?php

require_once '../../database/connection.php';
require_once '../../model/produto/produto.php';

$submit = "Cadastrar";
$action = "create";

if (!empty($_GET)) {
    
    $action = "update";
    $produto = new Produto;
    $produto = $produto->getProduto(intval($_GET['id']));
    $submit = "Alterar";

}


$id = (!empty($produto)) ? $_GET['id'] : "";
$nome = (!empty($produto)) ? $produto['NOME'] : "";
$unidade = (!empty($produto)) ? $produto['UNIDADE'] : "";
$peso = (!empty($produto)) ? $produto['PESO'] : "";
$qtd = (!empty($produto)) ? $produto['QTD_ESTOQUE'] : "";
$preco = (!empty($produto)) ? $produto['PRECO'] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="tela-cadastro-produto.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
</head>
<body>

    <div class="container" >
        <div id="containerDropdown">
            <div class="dropdown"></div> 

            <h1 id="titleCadastro">Cadastro de Produto</h1>
         

            <div class="imageLogout">
                <img src="../../extra/logout-button.png" onclick="sair()" alt="logout">
            </div>         
        </div>

        <div class="containerCenter">
            <h1>Inserir informações do produto</h1>
                <form class="formulario" method="post" action="../../controller/controller_produto.php">

                    <div class= "field">
                        <input type="hidden" name="action" value="<?=$action?>">
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="text" name="nome" placeholder="Nome" value="<?=$nome?>" required>
                        <input type="text" name="unidade" placeholder="Unidade" value="<?=$unidade?>" required>
                        <input type="text" name="peso" placeholder="Peso" value="<?=$peso?>" required>
                        <input type="text" name="qtd_estoque" placeholder="Quantidade em estoque" value="<?=$qtd?>" required>
                        <input type="text" name="preco" placeholder="Preço 0.00" value="<?=$preco?>" required>
                    </div>

                    <input type="submit" value="<?=$submit?>">
                

                </form>

        </div>
     
         
        
     
        
    </div>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-cadastro-produto.js"></script>

</html>