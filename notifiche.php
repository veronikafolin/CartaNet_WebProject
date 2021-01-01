<?php
    require("constants.php");

    if(isUserLoggedIn() != 0){
        $templateParams["titolo"] = "CartaNet - Notifiche";
        $templateParams["nomeFile"] = "template/notifiche.php";
        $templateParams["notifiche"] = $db->getNotifications($_SESSION["IdUtente"]);
        
        if($_SESSION["Tipo"] == "Cliente"){
            require_once("template/base.php");
        }else{
            require_once("template/baseVenditore.php");
        }
    }else{
        header("location:./login.php");
    }
?>