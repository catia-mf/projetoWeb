<?php include_once 'Header.php'; ?>
<div class="carrinho">
    <div class="secoesCarrinho">
        <div class=seccao1Carrinho>
            <div class="tituloCarrinho">
                <p>O seu Carrinho</p>
                <p>X</p>
            </div>
            <p>PRODUTOS</p>
            <div class="linhaCarrinho"></div>
            <div class="quantidadeCarrinho">
                <img src="images/imagemcarrinho.png" alt="imagecarrinho">
                <div class="quantidadeCarrinho1">
                    <p>Brincos Amélia Dourados </p>
                    <div class="lixoCarrinho">
                        <div class="quantidadeProduto2">
                            <button id="decrease" class="quantity-btn">-</button>
                            <p id="quantity">1</p>
                            <button id="increase" class="quantity-btn">+</button>
                        </div>
                        <img src="images/lixo.png" alt="lixo" style="margin-top: -7px;">
                    </div>
                </div>
                <p style="margin-left: auto">12,50 Euros</p>

            </div>
            <div class="linhaCarrinho"></div>
            <p>INSTRUÇÕES ESPECIAIS DE ENCOMENDA</p>
            <p class="informacoesCarrinho"> Escreva aqui informações adicionais sobre a encomenda...</p>
            <div class="precoCarrinho">
                <p>Total estimado: </p>
                <p> 12,50 Euros</p>
            </div>
            <p>Impostos, descontos e envio calculados na finalização da compra.</p>
            <button style="padding: 5px 50px; background-color: #C22A2B; color: white; border: none; border-radius: 4px;">
                Finalizar Encomenda
        </button>
        </div>
        <div class="imagemCarrinho">
            <img src="images/logo.jpg" alt="logotipo" width="100%" height="100%">
        </div>
    </div>

</div>

<!-- Importar o script.js antes do fechamento do body -->
<script src="js/script.js"></script>
<?php include_once 'Footer.php'; ?>
