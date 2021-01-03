<section>
    <h2>Storico ordini</h2>
    <div class="container-fluid">
        <?php foreach($templateParams["ordini"] as $ordine): ?>
             <div class="row ordine"> 
                    <div class="col-12 col-xl-6">
                        <p> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </p>
                        <p>
                        Ordinato da: <?php echo $ordine["Nome"]." ".$ordine["Cognome"]; ?> </br>
                        Data Ordine: <?php echo $ordine["DataOrdine"]; ?> </br>
                        Stato Ordine: <?php echo $ordine["Descrizione"]; ?> il <?php echo $ordine["DataStato"]; ?></br>
                        Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?>
                        </p> 
                    </div>
                    <form class="form-inline col-12 col-xl-6 justify-content-center align-items-center" action="updateStatoOrdine.php?IdOrdine=<?php echo $ordine["IdOrdine"];?>" method="post"> 
                        <div class="form-group">
                            <label for="StatoOrdine">Modifica stato ordine:</label>
                            <select class="form-control" name="StatoOrdine" id="StatoOrdine">
                                <option value="Confermato">Confermato</option>
                                <option value="In Consegna">In Consegna</option>
                                <option value="Consegnato">Consegnato</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input onclick="updateOrderOK()" type="submit" class="btn btn-primary" value="Conferma modifica"/>
                        </div>
                    </form>
                </div>
        <?php endforeach; ?>
    </div>
</section>
