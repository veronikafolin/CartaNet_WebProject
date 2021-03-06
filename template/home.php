<section id="searchBar">
    <div class="search-container">
        <form class="form-inline" action="risultatiRicercaProdotti.php" method="GET">
            <label for="searchRequest">Ricerca prodotti</label>
            <input class="col-9 col-xl-8 form-control mr-2" type="text" placeholder="Cerca..." name="searchRequest" id="searchRequest">
            <button class="col-2 col-xl-2 btn btn-info" type="submit">Vai</button>
        </form>
    </div>
</section>

<section>
    <h2>Potrebbe interessarti</h2>
    <div class="container-fluid">
        <div class="row"> 
            <?php foreach($templateParams["prodotti"] as $prodotto): ?>
                <div class="col-6 col-xl-2 prodotto">
                        <a href="prodotto.php?IdProdotto=<?php echo $prodotto["IdProdotto"]; ?>">
                            <img src=<?php echo ".".$prodotto["Immagine"];?> alt=<?php echo "Immagine di ".$prodotto["NomeProdotto"];?> width="100" height="100"/>
                            <h3> <?php echo $prodotto["NomeProdotto"]; ?> </h3>
                        </a>
                        <p class="prezzo"> <?php echo $prodotto["Prezzo"]." €" ; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
