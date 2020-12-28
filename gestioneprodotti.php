<?
     require_once("constants.php");
    $templateParams["titolo"] = "CartaNet - Gestione prodotti";
    $templateParams["nomeFile"] = "template/gestioneprodotti.php";
    $numeroProdotti = $db->countProducts();
    $templateParams["prodotti"] = $db->getProducts($numeroProdotti);
    require_once("template/baseVenditore.php");
?>