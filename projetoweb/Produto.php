<?php include_once 'Header.php'; ?>
<div class="produtoSelect">
    <div class="imageProduto">
        <img id="mainImage" src="images/brincoselect.png" alt="brincos" width="100%" height="100%">
    </div>
    <div class="blocoProduto">
        <p class="tituloProduto">FEATHER JEWELLERY</p>
        <p class="brincosProduto">Brincos Laço </p>
        <p class="descricaoProduto">Totalmente em aço inoxidável e anti-alérgicos.</p>
        <p class="precoProduto">€10,90 EUR</p>
        <p class="corProduto">Cor</p>
        <div class="coresProduto">
            <div class="colorProduto" data-image="images/brincoselect.png">
                <img src="images/dourado.png" alt="dourado" width="30px" height="30px">
            </div>
            <div class="colorProduto" data-image="images/brincoselect1.png">
                <img src="images/prateado.png" alt="prateado" width="30px" height="30px">
            </div>
        </div>
        <div class="quantidadeProduto">
            <button id="decrease" class="quantity-btn">-</button>
            <p id="quantity">1</p>
            <button id="increase" class="quantity-btn">+</button>
        </div>       
        <a style="text-decoration:none; text-align:center" class="buttonProduto" href="Carrinho.php">Adicionar ao Carrinho</a>
        <button class="buttonProduto1">Comprar com Shoppay</button>
        <div class="recolhaProduto">
            <img src="images/IconCerto.png" alt="certo" width="12px" height="12px">
            <p class="recolhaProduto1">Recolha disponível em Rua Dr.Manuel Laranjeira</p>
        </div>
        <p class="recolhaproduto2">Normalmente pronto em 2-4 dias</p>
        <p class="recolhaproduto3">Ver informações da loja</p>
    </div>
</div>

<!-- Importar o script.js antes do fechamento do body -->
<script src="js/script.js"></script>

<?php include_once 'Footer.php'; ?>
