<?php

    require_once("constants.php");

    if (!empty($_POST["username"]) && !empty( $_POST["password"])){
        $login_result = $db->checkLogin($_POST["username"], $_POST["password"]);
        if(count($login_result) == 0){
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
            require_once("template/base.php");
            break;
        case 1:
            $templateParams["titolo"] = "CartaNet - Home";
            $templateParams["nomeFile"] = "home.php";
            $templateParams["prodotti"] = $db->getProducts(24);
            require_once("template/base.php");
            break;

        case 2:
            //pagina del venditore loggato
            $templateParams["titolo"] = "CartaNet - Home Venditore";
            $templateParams["nomeFile"] = "homeVenditore.php";
            require_once("template/baseVenditore.php");
            break;
    }
?>