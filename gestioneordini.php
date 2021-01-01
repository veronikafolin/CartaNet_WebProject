<?
    require("constants.php");

    if(isUserLoggedIn() == 2){
        $templateParams["titolo"] = "CartaNet - Gestione ordini";
        $templateParams["nomeFile"] = "template/gestioneordini.php";
        $templateParams["ordini"] = $db->getOrders();
        require_once("template/baseVenditore.php");
    }else{
        header("location:./login.php");
    }
    
?>