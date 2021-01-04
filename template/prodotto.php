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

                <?php if(isUserLoggedIn() == 0): ?>
                    <button onclick="alertLogIn()" type="button" class="form-control btn btn-primary">Aggiungi al carrello</button>
                <?php endif ?>

                <?php if(isUserLoggedIn() == 1): ?>
                    <?php if($templateParams["disponibilita"] == 0): ?>
                        <button onclick="alertSoldOut()" type="button" class="form-control btn btn-primary disabled">Aggiungi al carrello</button>
                    <?php else: ?>
                        <a href="updateShoppingCart.php?IdProdotto=<?php echo $prodotto['IdProdotto']?>"><button onclick="confirmAddingToShoppingCart()" type="button" class="form-control btn btn-primary">Aggiungi al carrello</button></a>
                    <?php endif ?>
                <?php endif ?>
                
                <?php if(isUserLoggedIn() == 2): ?>
                    <a href="modificaProdotto.php?IdProdotto=<?php echo $prodotto['IdProdotto'] ?>"><button type="button" class="form-control btn btn-primary">Modifica prodotto</button> </a>'
                <?php endif ?>

            </div>
        </div>
    </div>
</section>