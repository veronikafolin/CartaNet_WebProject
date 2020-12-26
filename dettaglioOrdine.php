<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Dettaglio Ordine";
    $templateParams["nomeFile"] = "template/dettaglioOrdine.php";
    $templateParams["prodottiOrdinati"] = $db->getDettaglioOrdine($_GET["IdOrdine"]);
    require_once("template/base.php");
?>