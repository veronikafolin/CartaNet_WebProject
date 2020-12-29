<?php
    require("constants.php");

    $templateParams["titolo"] = "CartaNet - Home";
    $templateParams["nomeFile"] = "home.php";
    $templateParams["prodotti"] = $db->getProducts(24);
    require_once("template/base.php");
?>