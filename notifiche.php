<?php
    require_once("constants.php");

    $templateParams["titolo"] = "CartaNet - Notifiche";
    $templateParams["nomeFile"] = "template/notifiche.php";
    $templateParams["notifiche"] = $db->getNotifications($_SESSION["IdUtente"]);
    require_once("template/base.php");

?>