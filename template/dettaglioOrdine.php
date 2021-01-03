<section class="carrello">
   <h2>Dettaglio Ordine</h2>
    <div class="container-fluid">
        <div class="row"> 
            <div>
                <p> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </br>
                Data Ordine: <?php echo $ordine["DataOrdine"]; ?> </br>
                Stato Ordine: <?php echo $ordine["Descrizione"]; ?> il <?php echo $ordine["DataStato"]; ?></br>
                Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?></p> 
            </div>
        </div>
        
        <div class="row"> 
            <p>Prodotti ordinati:</p>
        </div>
        
        <?php foreach($templateParams["prodottiOrdinati"] as $prodotto): ?>
            <div class="row"> 
                <div class="col-3 col-xl-2">
                    <img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>"/>
                </div>
                <div class="col-9 col-xl-10" >
                    <h3 > <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                    <p>Quantità: <?php echo $prodotto["Quantita"]; ?> <br/>
                    <?php $totale = $prodotto["Prezzo"] * $prodotto["Quantita"]; ?>
                    Totale: <?php echo $totale." €" ; ?></p> 
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
