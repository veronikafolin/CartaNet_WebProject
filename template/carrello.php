<section class="carrello"> 
    <h2>Il mio carrello</h2>
    <div class="container-fluid">
        <?php foreach($templateParams["prodottiInCarrello"] as $prodotto): ?>
             <div class="row"> 
                <div class="col-3 col-xl-2">
                    <img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>"/>
                </div>
                <div class="col-9 col-xl-10">
                    <h3> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                    <p>Quantità: <?php echo $prodotto["Quantita"]; ?> <br/>
                    <?php $totale = $prodotto["Prezzo"] * $prodotto["Quantita"]; ?>
                    Totale: <?php echo $totale." €" ; ?> <br/>
                    <a href="rimuoviProdotto.php?IdProdotto=<?php echo $prodotto['IdProdotto']?>" id="rimuoviProdotto">Rimuovi prodotto</a>
                    </p> 
                </div>
            </div>
        <?php endforeach; ?>
        <?php if($totaleCarrello !=0): ?>
            <div class="row">
                <p class="prezzo">Totale carrello: <?php echo $totaleCarrello."€" ?></p>
            </div>
            <div class="row justify-content-center"> 
                <div class="col-12 col-xl-3">
                    <a href="orderOK.php?IdUtente=<?php echo $_SESSION["IdUtente"]; ?>">
                    <button onclick="orderOK()" type="button" class="form-control btn btn-primary">Ordina</button>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php if($totaleCarrello ==0): ?>
            <div class="row"> 
                <p> Il carrello è vuoto </p>
            </div>
        <?php endif; ?>
    </div>
</section>

