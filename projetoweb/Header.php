<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

    <title>Feather Jewellery</title>
    
</head>
<body>

<div class="cab">
    <div class="logo">
                <li><a href="Inicio.php"><img class="logo" src="images/logo.jpg" alt="FEATHER JEWLLERY"></a></li>
    </div>
</div>

<nav>

        <ul class="principal"> <!--inicio de lista nao ordenada-->
            <li><a href="Inicio.php" data-page="Inicio.php">Início</a></li> <!--tag do primeiro item da lista-->
            <li><a href="Novidades.php" data-page="Novidades.php">Novidades</a></li>
            <li><a href="Personalizacoes.php" data-page="Personalizacoes.php">Personalizações</a></li>
            <li><a href="Colares.php" data-page="Colares.php">Colares</a></li>
            <li><a href="Aneis.php" data-page="Aneis.php">Anéis</a></li>
            <li><a href="Pulseiras.php" data-page="Pulseiras.php">Pulseiras</a></li>
            <li><a href="Brincos.php" data-page="Brincos.php">Brincos</a></li>
            <li><a href="Canecas.php" data-page="Canecas.php">Canecas</a></li>
            <li><a href="Roupa.php" data-page="Roupa.php">Roupa</a></li>
            <li style="margin-right: 65px;"><a href="Sobre.php" data-page="Sobre.php">Sobre Nós</a></li>
            <li><a href="barraPesquisa.php" data-page="Procura.php"><img src="images/Procura.png" alt="Pesquisar"></a></li>
            <li><a href="Carrinho.php" data-page="Carrinho.php"><img src="images/Carrinho.png" alt="Carrinho"></a></li>
        </div>

    <?php
        if(isset($_SESSION["Name"])){
                echo '<li><a href="includes/Logout.inc.php"><img src="images/logout.png"alt="logout"></a></li>';
            }else{
            echo ' <li><a href="CriarConta.php"><img src="images/IniciarSessao.png" alt="Criar Conta"></a></li>';
            }
    ?>
    


    <div class="clear"></div>

        </ul>     
   
</nav>
    