<section style="margin: 80px; clear: both;">
    <center><h2>Il mio carrello</h2></center>
    <div class="container-fluid">
        <?php foreach($templateParams["prodottiInCarrello"] as $prodotto): ?>
             <div class="row" style="width: 100%"> 
                <div class="col-sm-3 col-xl-1" style="padding: 0px">
                    <img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>" width="100" height="100"/>
                </div>
                <div class="col-sm-3 col-xl-1" style="padding: 0px">
                    <h3 style="font-size: 16pt"> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                    <p>Quantità: <?php echo $prodotto["Quantità"]; ?></p>
                    <?php $totale = $prodotto["Prezzo"] * $prodotto["Quantità"]; ?>
                    <p style="font-weight: bold"> <?php echo $totale." €" ; ?></p> 
                </div>
            </div>
        <?php endforeach; ?>
        <button type="button" class="btn btn-primary">Ordina</button>
    </div>
</section>