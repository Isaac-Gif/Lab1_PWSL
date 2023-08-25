<?php
session_start();
//Usuario Administrador 
$usuario="u20190155";
$pwd="123";

//Usuario rustico
$usuario1="Isaac";
$pwd1="1234";

//Usuario básico
$usuario2="Angel";
$pwd2="12345";

$user= $_POST['correo'];
$pass= $_POST['pdw'];

if($usuario === $user && $pwd === $pass){

    $_SESSION['ok']="ok";
    header("Location: dash.php");
}
elseif($usuario1 === $user && $pwd1 === $pass){
    $_SESSION['ok']="ok";
    header("Location: dashrustico.php");
}

elseif($usuario2 === $user && $pwd2 === $pass){
    $_SESSION['ok']="ok";
    header("Location: dashbasico.php");
}
else{
    header("Location: index.php");
}


?>