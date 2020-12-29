<?php
    require("constants.php");

    $templateParams["titolo"] = "CartaNet - Dettaglio Prodotto";
    $templateParams["nomeFile"] = "template/prodotto.php";
    $templateParams["prodotto"] = $db->getProductById($_GET["IdProdotto"]);
    $templateParams["disponibilita"] = $db->isProductAvailable($_GET["IdProdotto"]);

    if(!isset($_SESSION["IdUtente"])){
        require_once("template/base.php");
    }else if($_SESSION["Tipo"] == "Venditore"){
        require_once("template/baseVenditore.php");
    }else if($_SESSION["Tipo"] == "Cliente"){
        require_once("template/base.php");
    }

?>