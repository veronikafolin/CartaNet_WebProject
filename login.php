<?php

    require_once("constants.php");

    if( isset($_POST["username"]) && isset( $_POST["password"]) ){
        $login_result = $db->checkLogin($username, $password);
        if(count($loginResult) == 0){
            $templateParams["erroreLogin"] = "Errore! Controllare username o password";
        }else{
            registerLoggedUser($login_result[0]);
        }
    }


    $userLogged = isUserLoggedIn();


    switch($userLogged){
        case 0:
            $templateParams["titolo"] = "CartaNet - Login";
            $templateParams["nomeFile"] = "login-form.php";
            break;

        case 1:
            $templateParams["titolo"] = "CartaNet - Home";
            $templateParams["nomeFile"] = "index.php";
            break;

        case 2:
            //pagina del venditore loggato
            break;
    }

    require_once("template/base.php");


    
?>