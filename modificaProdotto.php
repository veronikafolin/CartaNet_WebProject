<?php
    require_once("constants.php");
    $templateParams["titolo"] = "CartaNet -Modifica prodotto";
    $templateParams["nomeFile"] = "modificaProdotto-form.php";
    $templateParams["IdProdotto"] = $_GET["IdProdotto"];
    require_once("template/baseVenditore.php");
?>