<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Risultati ricerca";
    $templateParams["nomeFile"] = "template/risultatiRicercaProdotti.php";
    $templateParams["risultati"] = $db->searchProducts($_GET["searchRequest"]);
    require_once("template/base.php");
?>