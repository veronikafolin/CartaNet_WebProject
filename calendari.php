<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Calendari";
    $templateParams["nomeFile"] = "template/calendari.php";
    $templateParams["prodottiCalendari"] = $db->getProductsFromCategory("Calendari");
    require_once("template/base.php");

?>