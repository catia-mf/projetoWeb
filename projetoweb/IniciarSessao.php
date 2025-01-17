<?php include_once 'Header.php'; ?>
<link href="css/main.css">
    <div class="geralIS">
        <div class="blocoI1">
            <p class="tituloIS"> Iniciar Sessão</p>
            <button class="shopIS"> Iniciar sessão com shop</button>
        </div>
        <div class="blocoI2">
            <form action="includes/IniciarSessao.inc.php" method="POST">
                <div class="blocoI2-1">
                    <div class="textoForms">
                        <label for="nome">E-mail</label>
                    </div>   
                    <input type="email" name="email" placeholder="E-mail" class="caixa">
                    <div class="textoForms">
                        <label for="pwd">Palavra-Passe</label>
                    </div>
                    <input type="password" name="pwd" placeholder="Palavra-passe" class="caixa">
                    <p class="palavraPasse">Esqueceu-se da palavra-passe?</p>
                    <button type="submit" name="submit" class="shopIS2">Iniciar Sessão</button>  
                </div>  
            </form>
        </div>
    </div>

<?php

if(isset($_GET["error"])){
    ?>
    <div style="display:flex; justify-content: center; width:93%; margin-top:-80px">
        <?php
    if($_GET["error"]=="emptyinput"){
        echo "<h6>Campo incorreto</h6>";
    }
    if($_GET["error"]=="LoginErrado"){
        echo "<p>Login Errado</p>";
    }
    ?>
    </div>
    <?php
}
?>

<?php include_once 'Footer.php'; ?>