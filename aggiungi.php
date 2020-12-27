<?php

    require_once("constants.php");

    $NomePrdotto = $_POST["NomeArticolo"];
    $Descrizione = $_POST["Descrizione"];
    $Prezzo = $_POST["Prezzo"];
    $Disponibilità = $_POST["Disponibilità"];
    $Categoria = $_POST["Categoria"];
    $Immagine = $_POST["Immagine"];

    $db->aggiungiProdotto($NomePrdotto, $Descrizione, $Prezzo, $Disponibilità, $Categoria, "/res/".$Categoria."/".$Immagine, $_SESSION["IdUtente"]);
    header("location:./gestioneprodotti.php");
?>