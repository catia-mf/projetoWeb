<?php include_once 'Header.php'; 
require_once 'includes/functions.php';
require_once 'includes/bdconnect.inc.php';
?>
<p class="tituloPagina">Brincos</p>
   
<div class="meio">       
 <?php
    $listar = listarProdutos3($conn);

    if($listar){
        foreach($listar as $lista){
            ?>

        
        <div>
            <a href="Produto.php"><img class="imagem" src="images/<?=$lista['imagem'];?>" alt="joias"></a>
            <a style="text-decoration:none; color:black " href="Produto.php"><p style="font-family:'Inter', sans-serif; font-size:15px; margin-top: 5px;"><?=$lista['nome'];?></p></a>
            <p style="font-family:'Inter', sans-serif; font-size:17px;font-weight:bold;margin-top:7px;">€ <?=$lista['preco'];?> EUR</p>
        </div>

<?php
        }
    }else{
        ?>
        <p> Não existem produtos!</p>
        <?php
    }

    ?>
</div> 
<?php include_once 'Footer.php'; ?>