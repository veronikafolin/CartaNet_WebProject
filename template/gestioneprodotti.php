<section>
    <a href="aggiungiProdotto.php"> <button class="btn btn-primary" style="margin: 10px 0 0 10px" name="add" id="add"> Aggiungi nuovo prodotto </button></a>
</section>

<section style="margin: 80px; clear: both;">
    <center><h2>I miei prodotti</h2></center>
    <div class="container-fluid">
    <div class="row" style="width: 100%"> 
        <?php foreach($templateParams["prodotti"] as $prodotto): ?>
            <div class="col-sm-6 col-xl-2" style="padding: 0px">
            <a href="prodotto.php?IdProdotto=<?php echo $prodotto["IdProdotto"]; ?>" title="Link per dettaglio prodotto">
                <center><img src=<?php echo ".".$prodotto["Immagine"];?> alt=<?php echo "Immagine di ".$prodotto["NomeProdotto"];?> width="100" height="100"/>
                <h3 style="font-size: 16pt"> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
            </a>
                <p style="font-weight: bold"> <?php echo $prodotto["Prezzo"]." €" ; ?></p> </center>
             </div>
         <?php endforeach; ?>
    </div>
    </div>
</section>
