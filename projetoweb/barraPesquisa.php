<?php include_once 'Header.php'; 
require_once 'includes/functions.php';
require_once 'includes/bdconnect.inc.php';
?>


<div class="search-container">
    <form action="Procura.php" method="POST">
        <input type="text" name="keywords" class="search" placeholder="Search...">
        <button type="submit" name="submit">Pesquisar</button>
    </form>
</div>
<?php include_once 'Footer.php'; ?>