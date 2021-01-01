<?php

    require("constants.php");

    if(isUserLoggedIn() == 2){
        $NomeProdotto = $_POST["NomeArticolo"];
        $Descrizione = $_POST["Descrizione"];
        $Prezzo = $_POST["Prezzo"];
        $Disponibilità = $_POST["Disponibilità"];
        $Categoria = $_POST["Categoria"];
        $Immagine = $_POST["Immagine"];
    
        $db->aggiungiProdotto($NomeProdotto, $Descrizione, $Prezzo, $Disponibilità, $Categoria, "/res/".$Categoria."/".$Immagine);
    
        header("location:./gestioneprodotti.php");
    }else{
        header("location:./login.php");
    }
    
?>