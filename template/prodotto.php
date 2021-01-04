<?php 
$prodotto = $templateParams["prodotto"];
?>

<section>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <h2> <?php echo $prodotto["NomeProdotto"]; ?> </h2>
        </div>
        <div class="dettagliProdotto row"> 
            <img class = "col-12 col-xl-4" src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>"/>
            <div class= "col-12 col-xl-8">
                <p> <?php echo $prodotto["Descrizione"]; ?> </p>
                <p class="prezzo"> <?php echo $prodotto["Prezzo"]." €" ; ?></p>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"> 
            <div class="col-12 col-xl-3">
                <?php
                $userLogged = isUserLoggedIn();
                switch($userLogged){
                    case 0:
                        echo '<button onclick="alertLogIn()" type="button" class="form-control btn btn-primary">Aggiungi al carrello</button>';
                        break;
                    case 1:
                        if($templateParams["disponibilita"] == 0){
                            echo '<button onclick="alertSoldOut()" type="button" class="form-control btn btn-primary disabled">Aggiungi al carrello</button>';
                            break;
                        }
                        echo '<a href="updateShoppingCart.php?IdProdotto='.$prodotto["IdProdotto"].'><button onclick="confirmAddingToShoppingCart()" type="button" class="form-control btn btn-primary">Aggiungi al carrello</button></a>';
                        break;
                    case 2:
                        echo '<a href="modificaProdotto.php?IdProdotto='.$prodotto["IdProdotto"].'><button type="button" class="form-control btn btn-primary">Modifica prodotto</button> </a>';
                        break;
                }
                ?>
            </div>
        </div>
    </div>
</section>