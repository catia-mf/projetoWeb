<?php

function emptyInputRegisto($nome, $email, $pwd){
    $result=true;
    if(empty($nome)|| empty($email) || empty($pwd)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result=true;
    if($pwd !== $pwdRepeat){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result=true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $email) {
    // Query SQL com prepared statement
    $sql = "SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn); // Inicializar prepared statement

    // Verificar se a query foi preparada corretamente
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../IniciarSessao.php?error=stmtfailedUid");
        exit();
    }

    // Vincular parâmetros e executar a query
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    // Obter resultado
    $resultData = mysqli_stmt_get_result($stmt);

    // Verificar se o email foi encontrado
    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt); // Fechar statement antes do retorno
        return $row; // Retorna os dados do usuário
    } else {
        mysqli_stmt_close($stmt); // Fechar statement antes do retorno
        return false; // Retorna falso se o usuário não for encontrado
    }
}

function createUser($conn, $nome, $email, $pwd){

$sql = "INSERT INTO user (nome, email, pwd) Values(?,?,?);";
$stmt = mysqli_stmt_init($conn);// prevenir MSQL injection com os prepared statments

if(!mysqli_stmt_prepare($stmt, $sql)){
    header ("location: ../IniciarSessao.php?error=stmtfailedUSER");
    exit();
}

$hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $hasedPwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header ("location: ../IniciarSessao.php?error=none");
exit();
}

function emptyInputLogin($email, $pwd){
    $result=true;
    if(empty($pwd) || empty($email)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd){

    $uidExists = uidExists($conn, $email, $pwd);

    if($uidExists === false){
        header ("location: ../IniciarSessão.php?error=LoginErrado");
        exit();
    }

    //print_r($uidExists);
    //die();

    $pwdHased=$uidExists['pwd'];
    $checkPwd = password_verify($pwd, $pwdHased); // esta função já faz o hash da password

    if($checkPwd === false){ 
        header ("location: ../IniciarSessao.php?error=LoginErrado");
        exit();
    }else if($checkPwd === true){ 
        session_start();
        $_SESSION["id"] = $uidExists['id'];
        $_SESSION["nome"] = $uidExists['nome'];
        header ("location: ../Inicio.php");
        exit();
    }
}

/*---------------------------------------------------------PRODUTOS---------------------------------------------------------------*/


function listarProdutos($conn){
    $sql ="SELECT * FROM produtoanel";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}

function listarProdutos1($conn){
    $sql ="SELECT * FROM produtocolar";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}

function listarProdutos2($conn){
    $sql ="SELECT * FROM produtoroupa";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}

function listarProdutos3($conn){
    $sql ="SELECT * FROM produtobrinco";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}


function listarProdutos4($conn){
    $sql ="SELECT * FROM produtocaneca";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}
function listarProdutos5($conn){
    $sql ="SELECT * FROM produtopulseira";

    if($resultData = mysqli_query($conn, $sql)){
        return $resultData;
    }else{
        $result=false;
        return $result;
    }

}

function search($conn, $keywords) {
    $search = mysqli_real_escape_string($conn, $keywords);

    // Tabelas que devem ser pesquisadas
    $tables = [
        'produtopulseira', 
        'produtocolar', 
        'produtoroupa', 
        'produtobrinco', 
        'produtoanel', 
        'produtocaneca'
    ];

    $results = [];

    // Itera por cada tabela e realiza a pesquisa
    foreach ($tables as $table) {
        $sql = "SELECT * FROM $table WHERE nome LIKE '%$search%'";

        if ($resultData = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_assoc($resultData)) {
                $results[] = $row; // Adiciona cada resultado ao array
            }
        }
    }

    return !empty($results) ? $results : false;
}