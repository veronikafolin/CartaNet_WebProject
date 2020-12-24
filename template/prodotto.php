<?php 
$prodotto = $templateParams["prodotto"];
?>

<section style="margin: 80px">
<div class="container-fluid">
    <div class="row" style="width: 100%"> 
        <img class = "col-xl-4 col-sm-4" src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>"/>
        <div class= "col-xl-8 col-sm-8">
            <h2 style="font-size: 16pt"> <?php echo $prodotto["NomeProdotto"]; ?> </h2>
            <p> <?php echo $prodotto["Descrizione"]; ?> </p>
            <p style="font-weight: bold"> <?php echo $prodotto["Prezzo"]." €" ; ?></p>
            <?php
            $userLogged = isUserLoggedIn();
            switch($userLogged){
                case 0:
                    echo '<button onclick="alertLogIn()" type="button" class="btn btn-primary">Aggiungi al carrello</button>';
                    break;
                case 1:
                    if($templateParams["disponibilita"] == 0){
                        echo '<button onclick="alertSoldOut()" type="button" class="btn btn-primary disabled">Aggiungi al carrello</button>';
                        break;
                    }
                    echo '<a href="template/updateShoppingCart.php?IdProdotto='.$prodotto["IdProdotto"].'"><button onclick="confirmAddingToShoppingCart()" type="button" class="btn btn-primary">Aggiungi al carrello</button></a>';
                    break;
                case 2:
                    echo '<button type="button" class="btn btn-primary">Modifica prodotto</button>';
                    break;
            }
            ?>
        </div>
    </div>
</div>
</section>