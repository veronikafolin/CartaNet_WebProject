
<section style="margin: 80px; clear: both;">
    <center><h2>I miei Ordini</h2></center>
    <div class="container-fluid">
        <?php foreach($templateParams["mieiOrdini"] as $ordine): ?>
             <div class="row" style="width: 100%; border-bottom: 1px solid black; padding: 10px 0px;"> 
                 <div class="col-sm-3 col-xl-6" style="padding: 0px">
                    <h3> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </h3>
                    <p>
                    Data Ordine: <?php echo $ordine["DataOrdine"]; ?> </br>
                    Stato Ordine: <?php echo $ordine["Descrizione"]; ?> il <?php echo $ordine["DataStato"]; ?></br>
                    Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?>
                    </p> 
                 </div>
                 <div class="col-sm-3 col-xl-6" style="padding: 0px; align-items: center; justify-content: center; display: flex;">
                    <a href="dettaglioOrdine.php?IdOrdine=<?php echo $ordine["IdOrdine"];  ?>">
                    <button type="button" class="btn btn-primary">Vedi dettagli ordine</button>
                    </a>
                 </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
