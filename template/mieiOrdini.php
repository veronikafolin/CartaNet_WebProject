<section>
    <h2>I miei Ordini</h2>
    <div class="container-fluid">
        <?php foreach($templateParams["mieiOrdini"] as $ordine): ?>
             <div class="row ordine justify-content-center align-items-center"> 
                 <div class="col-12 col-xl-9">
                    <h3> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </h3>
                    <p>
                    Data Ordine: <?php echo $ordine["DataOrdine"]; ?> </br>
                    Stato Ordine: <?php echo $ordine["Descrizione"]; ?> il <?php echo $ordine["DataStato"]; ?></br>
                    Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?>
                    </p> 
                 </div>
                 <div class="col-12 col-xl-3">
                    <a href="dettaglioOrdine.php?IdOrdine=<?php echo $ordine["IdOrdine"];  ?>">
                    <button type="button" class="form-control btn btn-primary">Vedi dettagli ordine</button>
                    </a>
                 </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
