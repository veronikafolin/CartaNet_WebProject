<?
     require_once("constants.php");
    $templateParams["titolo"] = "CartaNet - Gestione ordini";
    $templateParams["nomeFile"] = "template/gestioneordini.php";
    $templateParams["ordini"] = $db->getOrders();
    require_once("template/baseVenditore.php");
?>