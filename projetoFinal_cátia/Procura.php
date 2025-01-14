<?php include_once 'Header.php';
require_once 'includes/functions.php';
require_once 'includes/bdconnect.inc.php';
?>

<form action="Procura.php" method="POST">
    <label for="keywords" class="visually-hidden">Pesquisar produtos</label>
    <input 
        type="text" 
        id="keywords" 
        name="keywords" 
        class="search" 
        placeholder="Digite o nome do produto..." 
        required>
    <button type="submit" name="submit">Pesquisar</button>
</form>


<?php include_once 'Footer.php'; ?>