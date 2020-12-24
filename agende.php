<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Agende";
    $templateParams["nomeFile"] = "template/agende.php";
    $templateParams["prodottiAgende"] = $db->getProductsFromCategory("Agende");
    require_once("template/base.php");

?>