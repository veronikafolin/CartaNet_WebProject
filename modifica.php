<?php 

if(isset($_POST["Annulla"])){
    header("location:./gestioneprodotti.php");
}else{
    require_once("constants.php");
    $immagine = '/res/'.$_POST["Categoria"].'/'.$_POST["Immagine"];
    $db->modificaProdotto($_POST["IdProdotto"], $_POST["NomeProdotto"], $_POST["Descrizione"], $_POST["Prezzo"], $_POST["QuantitàResidua"], $_POST["Categoria"], $immagine);
    header("location:./gestioneprodotti.php");
}

?>