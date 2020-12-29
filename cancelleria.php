<?php
    require("constants.php");

    $templateParams["titolo"] = "CartaNet - Cancelleria";
    $templateParams["nomeFile"] = "template/cancelleria.php";
    $templateParams["prodottiCancelleria"] = $db->getProductsFromCategory("Cancelleria");
    require_once("template/base.php");

?>