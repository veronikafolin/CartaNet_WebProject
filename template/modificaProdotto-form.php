<?php
$prodotto = $templateParams["prodotto"];
?>

<section>
    <h2>Modifica prodotto</h2>
    <div class="row justify-content-center align-items-center">
        <form action="modifica.php" method="post"> 
            <div class="form-group">
                <label for="IdProdotto">Id Prodotto:</label>
                <input class="form-control" type="text" id="IdProdotto" name="IdProdotto" value="<?php echo $prodotto["IdProdotto"] ?>" readonly/>
            </div>

            <div class="form-group">
                <label for="NomeProdotto">Nome prodotto:</label>
                <input class="form-control" type="text" id="NomeProdotto" name="NomeProdotto" value="<?php echo $prodotto["NomeProdotto"] ?>" required/>
            </div>
            <div class="form-group">
                <label for="Descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" type="text" id="Descrizione" name="Descrizione" required><?php echo $prodotto["Descrizione"] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="Prezzo">Prezzo (in €):</label>
                <input class="form-control" type="number" step="0.01" id="Prezzo" name="Prezzo" value="<?php echo $prodotto["Prezzo"]?>" required/>
            </div>
            <div class="form-group">
                <label for="Disponibilità">Disponibilità:</label>
                <input class="form-control" type="number" id="QuantitàResidua" name="QuantitàResidua" value="<?php echo $prodotto["QuantitaResidua"] ?>" required/>
            </div>
            <div class="form-group">
                <label for="Categoria">Categoria:</label>
                <select name="Categoria" id="Categoria" required>
                    <option value="Cancelleria" <?php if($prodotto["Categoria"]=="Cancelleria") echo "selected"?>> Cancelleria </option>
                    <option value="Calendari" <?php if($prodotto["Categoria"]=="Calendari") echo "selected"?>> Calendari </option>
                    <option value="Agende" <?php if($prodotto["Categoria"]=="Agende") echo "selected"?>> Agende </option>
                </select>
            </div>
            <div class="form-group">
                <label for="Immagine">Immagine:</label>
                <input class="form-control" type="file" id="Immagine" name="Immagine"  value="<?php echo $prodotto["Immagine"] ?>" required/>
            </div>
            <div class="form-group">
            <input class="form-control btn btn-primary" id="modify" type="submit" name="modify" value="Modifica prodotto"/>
            </div>
            <div class="form-group">
            <a href="gestioneprodotti.php"> <button onclick="document.getElementById('Immagine').removeAttribute('required');" class="form-control btn btn-warning" id="annulla" >Annulla</button></a>
            </div>
        </form>
    </div>
</section>