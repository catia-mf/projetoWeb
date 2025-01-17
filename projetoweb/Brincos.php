<?php include_once 'Header.php'; 
require_once 'includes/functions.php';
require_once 'includes/bdconnect.inc.php';
?>
<p class="tituloPagina">Brincos</p>
   
<div class="meio">     
        <div>
                <img class="imagem" src="images/brincos6.png" alt="joias">
                <p style="font-family:'Inter', sans-serif; font-size:15px; margin-top: 5px;">Brincos Caroline</p>
                <p style="font-family:'Inter', sans-serif; font-size:17px; font-weight:bold; margin-top:7px;">€10,99 EUR</p>      
        </div> 

        <div>
                <a href="Produto.php"><img class="imagem" src="images/brincos5.png" alt="joias"></a>
                <a style="text-decoration:none; color:black" href="Produto.php"><p style="font-family:'Inter', sans-serif; font-size:15px; margin-top: 5px;">Brincos Pérola</p></a>
                <a style="text-decoration:none; color:black" href="Produto.php"><p style="font-family:'Inter', sans-serif; font-size:17px; font-weight:bold; margin-top:7px;">€15,99 EUR</p></a> 
        </div> 
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