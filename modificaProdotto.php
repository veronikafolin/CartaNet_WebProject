<?php
    require_once("constants.php");
    $templateParams["titolo"] = "CartaNet -Modifica prodotto";
    $templateParams["nomeFile"] = "modificaProdotto-form.php";
    $templateParams["prodotto"] = $db->getProductById($_GET["IdProdotto"]);

    require_once("template/baseVenditore.php");
?>