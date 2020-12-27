<?
     require_once("constants.php");
    $templateParams["titolo"] = "CartaNet - Gestione prodotti";
    $templateParams["nomeFile"] = "template/gestioneprodotti.php";
    $templateParams["prodotti"] = $db->getProductsBySupplier($_SESSION["IdUtente"]);
    require_once("template/baseVenditore.php");
?>