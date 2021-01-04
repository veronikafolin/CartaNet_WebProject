<section>
    <a href="aggiungiProdotto.php"> <button class="btn btn-primary" name="add" id="add"> Aggiungi nuovo prodotto </button></a>
</section>

<section>
    <h2>I miei prodotti</h2>
    <div class="container-fluid">
    <div class="row"> 
        <?php foreach($templateParams["prodotti"] as $prodotto): ?>
            <div class="col-6 col-xl-2 prodotto">
                <a href="prodotto.php?IdProdotto=<?php echo $prodotto["IdProdotto"]; ?>" title="Link per dettaglio prodotto">
                    <img src=<?php echo ".".$prodotto["Immagine"];?> alt=<?php echo "Immagine di ".$prodotto["NomeProdotto"];?> width="100" height="100"/>
                    <h3> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                </a>
                <p class="prezzo"> <?php echo $prodotto["Prezzo"]." €" ; ?></p> 
             </div>
         <?php endforeach; ?>
    </div>
    </div>
</section>
