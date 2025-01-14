<?php include_once 'Header.php'; 
require_once 'includes/functions.php';
require_once 'includes/bdconnect.inc.php';
?>
<p class="tituloPagina">Colares</p>
   
<div class="meio">       
 <?php
    $listar = listarProdutos1($conn);

    if($listar){
        foreach($listar as $lista){
            ?>

        
        <div>
                <img class="imagem" src="images/<?=$lista['imagem'];?>" alt="joias">
                    <p style="font-family:'Inter', sans-serif; font-size:13px;"><?=$lista['nome'];?></p>
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