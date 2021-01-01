<?php
    require("constants.php");

    if(isUserLoggedIn() == 1){
        $templateParams["titolo"] = "CartaNet - Dettaglio Ordine";
        $templateParams["nomeFile"] = "template/dettaglioOrdine.php";
        $ordine = $db->getInfoOrder($_GET["IdOrdine"]);
        $templateParams["prodottiOrdinati"] = $db->getDettaglioOrdine($_GET["IdOrdine"]);
    require_once("template/base.php");
    }else{
        header("location:./login.php");
    }
    
?>