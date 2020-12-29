<?php
    require("constants.php");

    if(isUserLoggedIn() == 1){
        $totale = $db->CalculateTotale($_SESSION["IdUtente"]);
        $IdOrdine = $db->insertOrdine($totale, $_SESSION["IdUtente"]);
        $db->insertDettaglioOrdine($IdOrdine);
        $db->updateProductAvailability($IdOrdine);
        $db->resetShoppingCart($_SESSION["IdUtente"]);
        $db->insertStatoOrdine($IdOrdine);

        //Notifica all'utente
        $oggetto = "Conferma ordine n° ".$IdOrdine;
        $testo = "Gentile ".$_SESSION["Nome"].", il tuo ordine è stato ricevuto correttamente";
        $letto = 0;
        $IdUtente = $_SESSION["IdUtente"];
        $db->notify($oggetto, $testo, $letto, $IdUtente);

        //Notifica al venditore
        $oggetto = "Ricevuto ordine n° ".$IdOrdine;
        $testo = "È stato ricevuto un ordine dal cliente".$_SESSION["IdUtente"];
        $letto = 0;
        $IdUtente = 2;
        $db->notify($oggetto, $testo, $letto, $IdUtente);

        header("location:./index.php");
    }else{
        header("location:./login.php");
    }
?>