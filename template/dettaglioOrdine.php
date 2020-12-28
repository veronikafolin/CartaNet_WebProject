<section style="margin: 80px; clear: both;">
    <center><h2>Dettaglio Ordine</h2></center>
    <div class="container-fluid">
        <div class="row" style="width: 100%"> 
            <div class="col-sm-3 col-xl-6" style="padding: 0px">
                <p> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </br>
                Data Ordine: <?php echo $ordine["DataOrdine"]; ?> </br>
                Stato Ordine: <?php echo $ordine["Descrizione"]; ?> il <?php echo $ordine["DataStato"]; ?></br>
                Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?></p> 
            </div>
        </div>
        <div class="row" style="width: 100%"> 
        <p style="font-weight:bold">Prodotti ordinati:</p>
        </div>
        <?php foreach($templateParams["prodottiOrdinati"] as $prodotto): ?>
            <div class="row" style="width: 100%"> 
                <div class="col-sm-3 col-xl-2" style="padding: 0px">
                    <img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>" width="100" height="100"/>
                </div>
                <div class="col-sm-3 col-xl-6" style="padding: 0px">
                    <h3 style="font-size: 16pt"> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                    <p>Quantità: <?php echo $prodotto["Quantita"]; ?> <br/>
                    <?php $totale = $prodotto["Prezzo"] * $prodotto["Quantita"]; ?>
                    Totale: <?php echo $totale." €" ; ?></p> 
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>