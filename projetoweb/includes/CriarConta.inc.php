<?php

if(isset($_POST['submit'])){
    //echo "está a funcionar";
    
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];
    $pwdRepeat= $_POST['pwdRepeat'];

require_once 'functions.php';
require_once 'bdconnect.inc.php';


if(emptyInputRegisto($nome, $email, $pwd)!== false){
    header("location: ../CriarConta.php?error=emptyinput");
    exit();
}

if(pwdMatch($pwd, $pwdRepeat)!== false){
    header("location: ../CriarConta.php?error=passnotmatch");
    exit();
}

if(invalidEmail($email)!== false){
    header("location: ../CriarConta.php?error=invalidEmail");
    exit();
}

if(uidExists($conn, $email)!== false){
    header("location: ../CriarConta.php?error=userEmailTaken");
    exit();
}

createUser($conn, $nome, $email, $pwd);

}else{
    header("location: ../Inicio.php");
    exit();
}