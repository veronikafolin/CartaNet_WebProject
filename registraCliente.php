<?php

    require("constants.php");

    $db->registraCliente($_POST["Nome"], $_POST["Cognome"], $_POST["Email"], $_POST["Indirizzo"], "Cliente", $_POST["Password"]);
    $templateParams["titolo"] = "CartaNet - SignUpOk";
    $templateParams["nomeFile"] = "signup-confirm.php";
   
    require_once("template/base.php")
?>