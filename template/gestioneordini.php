<section style="margin: 80px; clear: both;">
    <center><h2>Storico ordini</h2></center>
    <div class="container-fluid">
        <?php foreach($templateParams["ordini"] as $ordine): ?>
             <div class="row" style="width: 100%; border-bottom: 1px solid black; padding: 10px 0px;"> 
                    <div class="col-sm-3 col-xl-6" style="padding: 0px">
                        <h3> Id Ordine: <?php echo $ordine["IdOrdine"]; ?> </h3>
                        <p>
                        Ordinato da: <?php echo $ordine["Nome"]." ".$ordine["Cognome"]; ?> </br>
                        Data Ordine: <?php echo $ordine["Data"]; ?> </br>
                        Stato Ordine: <?php echo $ordine["Descrizione"]; ?> </br>
                        Totale Ordine: <?php echo $ordine["Totale"]." €" ; ?>
                        </p> 
                    </div>
                    <form class="col-sm-3 col-xl-6" action="aggiungi.php" method="post" style="margin-top: 20px"> 
                        <div class="form-group" >
                            <label for="StatoOrdine" style="display:inline">Modifica stato ordine:</label>
                            <select style="height:auto; width:auto;" class="form-control" name="StatoOrdine" id="StatoOrdine">
                                <option value="Confermato"> Confermato </option>
                                <option value="InConsegna"> In Consegna</option>
                                <option value="Consegnato"> Consegnato </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="modificaOrdine.php?IdOrdine=<?php echo $ordine["IdOrdine"];  ?>">
                            <button onclick="modificaOrdineOK()" type="button" class="btn btn-primary">Conferma modifica</button>
                            </a>
                        </div>
                    </form>
                </div>
        <?php endforeach; ?>
    </div>
</section>
