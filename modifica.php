<?php 

    require("constants.php");

    if(isUserLoggedIn() == 2){
        if(isset($_POST["Annulla"])){
            header("location:./gestioneprodotti.php");
        }else{
            $immagine = '/res/'.$_POST["Categoria"].'/'.$_POST["Immagine"];
            $db->modificaProdotto($_POST["IdProdotto"], $_POST["NomeProdotto"], $_POST["Descrizione"], $_POST["Prezzo"], $_POST["QuantitàResidua"], $_POST["Categoria"], $immagine);
            header("location:./gestioneprodotti.php");
        }
    }else{
        header("location:./login.php");
    }


?>