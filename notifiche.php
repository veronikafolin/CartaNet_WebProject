<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Anteprima Notifiche";
    $templateParams["nomeFile"] = "anteprima-notifiche.php";
    $templateParams["notifiche"] = $db->getNotifications($_SESSION["IdUtente"]);
    require_once("template/base.php");

?>