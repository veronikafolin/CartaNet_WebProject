<?php
    require("constants.php");

    if( isUserLoggedIn() == 2 ){
        $db->updateStatoOrdine($_POST["StatoOrdine"], $_GET["IdOrdine"]);

        //notifica all'utente
        $oggetto = "Cambiato lo stato dell'ordine ".$_GET["IdOrdine"];
        $testo = "Lo stato del suo ordine è cambiato e ora è:".$_POST["StatoOrdine"];
        $letto = 0;
        $IdUtente = $db->getIdUtenteByOrdine($_GET["IdOrdine"]);
        $db->notify($oggetto, $testo, $letto, $IdUtente);

        header("location:./gestioneordini.php");
    }else{
        header("location:./login.php");
    }
    
?>