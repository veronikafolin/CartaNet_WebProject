<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Risultati ricerca";
    $templateParams["nomeFile"] = "template/risultatiRicercaProdotti.php";
    $templateParams["risultati"] = $db->searchProducts($_GET["searchRequest"]);
    print_r($templateParams["risultati"]);
    require_once("template/base.php");
?>