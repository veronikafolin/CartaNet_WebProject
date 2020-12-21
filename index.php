<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Home";
    $templateParams["nomeFile"] = "home.php";
    // Aggiungi template params per riempire home
    $templateParams["prodotti"] = $db->getProducts(24);
    require_once("template/base.php");

?>