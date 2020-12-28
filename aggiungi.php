<?php

    require_once("constants.php");

    $NomeProdotto = $_POST["NomeArticolo"];
    $Descrizione = $_POST["Descrizione"];
    $Prezzo = $_POST["Prezzo"];
    $Disponibilità = $_POST["Disponibilità"];
    $Categoria = $_POST["Categoria"];
    $Immagine = $_POST["Immagine"];

    $db->aggiungiProdotto($NomeProdotto, $Descrizione, $Prezzo, $Disponibilità, $Categoria, "/res/".$Categoria."/".$Immagine);

    header("location:./gestioneprodotti.php");
?>