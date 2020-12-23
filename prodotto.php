<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Dettaglio Prodotto";
    $templateParams["nomeFile"] = "template/prodotto.php";
    $templateParams["prodotto"] = $db->getProductById($_GET["IdProdotto"]);
    $templateParams["disponibilita"] = $db->isProductAvailable($_GET["IdProdotto"]);
    require_once("template/base.php");

?>