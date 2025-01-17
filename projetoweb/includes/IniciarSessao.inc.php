<?php

if(isset($_POST['submit'])){
    
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];


require_once 'functions.php';
require_once 'bdconnect.inc.php';

if (emptyInputLogin($email, $pwd) !== false) {
    header("location: ../IniciarSessao.php?error=emptyinput");
    exit();
} else {
    loginUser($conn, $email, $pwd);
}
}