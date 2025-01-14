<?php include_once 'Header.php'; ?>
<link href="css/main.css">
    <div class="geralIS">
        <div class="blocoI1">
            <p class="tituloIS"> Criar Conta</p>
            <button class="shopIS"> Criar Conta com Google</button>
        </div>
        <div class="blocoI2">
            <form action="includes/CriarConta.inc.php" method="POST">
                <div class="blocoI2-1">

                    <div class="textoForms">
                        <label for="nome">Nome Próprio</label>
                    </div>
                    <input type="name" name="nome" placeholder="Nome Próprio" class="caixa">

                    <div class="textoForms">
                        <label for="email">E-mail</label>
                    </div>   
                    <input type="email" name="email" placeholder="E-mail" class="caixa">

                    <div class="textoForms">
                        <label for="pwd">Palavra-Passe</label>
                    </div>
                    <input type="password" name="pwd" placeholder="Palavra-passe" class="caixa">

                    <div class="textoForms">
                        <label for="pwdRepeat">Confirmar Palavra-Passe</label>
                    </div>
                    <input type="password" name="pwdRepeat" placeholder="Confirmar Palavra-passe" class="caixa">

                    <button type="submit" name="submit" class="shopIS2">Criar Conta</button>  
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
        echo "<h6>Ainda se encontram campos por preencher!</h6>";
    }
    if($_GET["error"]=="passnotmatch"){
        echo "<h6>As passwords não são coincidentes!</h6>";
    }
    if($_GET["error"]=="invalidEmail"){
        echo "<h6>Este email é inválido!</h6>";
    }
    if($_GET["error"]=="stmtfailedUSER"){
        echo "<h6>Erro Ligacao BD</h6>";
    }
    if($_GET["error"]=="userEmailTaken"){
        echo"<h6>Este utilizador já se encontra registado!</h6>";
    }
    if($_GET["error"]=="none"){
        echo "<h6> Utilizador registado com sucesso! </h6>";
    }
    ?>
    </div>
    <?php
}
?>

<?php include_once 'Footer.php'; ?>