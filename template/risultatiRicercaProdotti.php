<section style="margin: 80px; clear: both;">
    <center><h2>Risultati Ricerca</h2></center>
    <div class="container-fluid">
        <div class="row" style="width: 100%"> 
            <?php foreach($templateParams["risultati"] as $risultato): ?>
                <div class="col-sm-6 col-xl-2" style="padding: 0px">
                <a href="prodotto.php?IdProdotto=<?php echo $risultato["IdProdotto"]; ?>">
                    <center><img src="<?php echo ".".$risultato["Immagine"];?>" alt="<?php echo "Immagine di ".$risultato["NomeProdotto"];?>" width="100" height="100"/>
                    <h3 style="font-size: 16pt"> <?php echo $risultato["NomeProdotto"]; ?> </h3>
                </a>
                    <p style="font-weight: bold"> <?php echo $risultato["Prezzo"]." €" ; ?></p> </center>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>