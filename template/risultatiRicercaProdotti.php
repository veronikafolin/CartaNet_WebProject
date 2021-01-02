<section>
    <h2>Risultati Ricerca</h2>
    <div class="container-fluid">
        <div class="row"> 
            <?php foreach($templateParams["risultati"] as $risultato): ?>
                <div class="col-6 col-xl-2">
                <a href="prodotto.php?IdProdotto=<?php echo $risultato["IdProdotto"]; ?>">
                    <img src="<?php echo ".".$risultato["Immagine"];?>" alt="<?php echo "Immagine di ".$risultato["NomeProdotto"];?>" width="100" height="100"/>
                    <h3> <?php echo $risultato["NomeProdotto"]; ?> </h3>
                </a>
                    <p class="prezzo"> <?php echo $risultato["Prezzo"]." €" ; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>