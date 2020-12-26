<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - I miei Ordini";
    $templateParams["nomeFile"] = "template/mieiOrdini.php";
    $templateParams["mieiOrdini"] = $db->getOrdersById($_SESSION["IdUtente"]);
    require_once("template/base.php");
?>