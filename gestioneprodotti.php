<?
    require("constants.php");

    if(isUserLoggedIn() == 2){
        $templateParams["titolo"] = "CartaNet - Gestione prodotti";
        $templateParams["nomeFile"] = "template/gestioneprodotti.php";
        $numeroProdotti = $db->countProducts();
        $templateParams["prodotti"] = $db->getProducts($numeroProdotti);
        require_once("template/baseVenditore.php");
    }else{
        header("location:./login.php");
    }
    
?>