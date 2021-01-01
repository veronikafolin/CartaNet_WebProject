<section>
    <div class="search-container" id="searchBar">
        <form class="form-inline" action="risultatiRicercaProdotti.php" method="GET">
            <label for="searchRequest">Ricerca prodotti</label>
            <input class="form-control mr-sm-2" type="text" placeholder="Cerca..." name="searchRequest" id="searchRequest">
            <button class="btn btn-info" type="submit">Vai</button>
        </form>
    </div>
</section>

<section>
    <h2>Cancelleria</h2>
    <div class="container-fluid">
        <div class="row"> 
            <?php foreach($templateParams["prodottiCancelleria"] as $prodotto): ?>
                <div class="col-6 col-xl-2">
                <a href="prodotto.php?IdProdotto=<?php echo $prodotto["IdProdotto"]; ?>">
                    <img src="<?php echo ".".$prodotto["Immagine"];?>" alt="<?php echo "Immagine di ".$prodotto["NomeProdotto"];?>" width="100" height="100"/>
                    <h3> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                </a>
                    <p class="prezzo"> <?php echo $prodotto["Prezzo"]." €" ; ?></p> 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

