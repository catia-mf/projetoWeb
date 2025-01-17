<?php include_once 'Header.php'; ?>
<div class="produtoSelect">
    <div class="imageProduto">
        <img style="margin-left:100px" id="mainImage" src="images/brincos6.png" alt="brincos" width="100%" height="100%">
    </div>
    <div class="blocoProduto">
        <p class="tituloProduto">FEATHER JEWELLERY</p>
        <p class="brincosProduto">Brincos Laço </p>
        <p class="descricaoProduto">Totalmente em aço inoxidável e anti-alérgicos.</p>
        <p class="precoProduto">€10,90 EUR</p>
    
        <div class="quantidadeProduto">
            <button id="decrease" class="quantity-btn">-</button>
            <p id="quantity">1</p>
            <button id="increase" class="quantity-btn">+</button>
        </div>       
        <button class="buttonProduto">Adicionar ao Carrinho</button>
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
