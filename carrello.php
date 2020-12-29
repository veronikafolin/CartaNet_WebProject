<?php
    require("constants.php");

    if(isUserLoggedIn() == 1){
        $templateParams["titolo"] = "CartaNet - Il mio carrello";
        $templateParams["nomeFile"] = "template/carrello.php";
        $templateParams["prodottiInCarrello"] = $db->getProductsInShoppingCart($_SESSION["IdUtente"]);
        $totaleCarrello = $db->CalculateTotale($_SESSION["IdUtente"]);
        require_once("template/base.php");
    }else{
        header("location:./login.php");
    }
?>