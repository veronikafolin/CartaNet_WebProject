<?php

    require("constants.php");


    if($_POST["Password"] != $_POST["RipetiPassword"]){
        $templateParams["erroreSignUp"] = "Errore, le due password non corrispondono";
        $templateParams["titolo"] = "CartaNet - SignUp";
        $templateParams["nomeFile"] = "signup-form.php";
    }else{
        $db->registraCliente($_POST["Nome"], $_POST["Cognome"], $_POST["Email"], $_POST["Indirizzo"], "Cliente", $_POST["Password"]);
        $templateParams["titolo"] = "CartaNet - SignUpOk";
        $templateParams["nomeFile"] = "signup-confirm.php";
    }
    require_once("template/base.php")
?>