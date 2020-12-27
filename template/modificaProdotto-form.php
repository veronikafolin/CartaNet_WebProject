<?php
$prodotto = $templateParams["prodotto"];
?>

<div class="row justify-content-center align-items-center" style="margin: 20px 0">
    <form action="aggiungi.php" method="post" style="margin-top: 20px"> 
        <h2 style="font-size: 16pt; align: center">Modifica prodotto</h2>
        <div class="form-group col-10">
            <label for="NomeArticolo">Nome articolo:</label>
            <input class="form-control" type="text" id="NomeArticolo" name="NomeArticolo" placeholder="<?php echo $prodotto["NomeProdotto"] ?>" required/>
        </div>
        <div class="form-group col-10">
            <label for="Descrizione">Descrizione:</label>
            <textarea class="form-control" rows="5" type="text" id="Descrizione" name="Descrizione" required><?php echo $prodotto["Descrizione"] ?> </textarea>
        </div>
        <div class="form-group col-10">
            <label for="Prezzo">Prezzo (in €):</label>
            <input class="form-control" type="number" step="0.01" id="Prezzo" name="Prezzo" placeholder="<?php echo $prodotto["Prezzo"]?>" required/>
        </div>
        <div class="form-group col-10">
            <label for="Disponibilità">Disponibilità:</label>
            <input class="form-control" type="number" id="Disponibilità" name="Disponibilità" placeholder="<?php echo $prodotto["QuantitàResidua"] ?>" required/>
        </div>
        <div class="form-group col-10">
            <label for="Categoria">Categoria:</label>
            <select name="Categoria" id="Categoria" required>
                <option value="Cancelleria" <?php if($prodotto["Categoria"]=="Cancelleria") echo "selected"?>> Cancelleria </option>
                <option value="Calendari" <?php if($prodotto["Categoria"]=="Calendari") echo "selected"?>> Calendari </option>
                <option value="Agende" <?php if($prodotto["Categoria"]=="Agende") echo "selected"?>> Agende </option>
            </select>
        </div>
        <div class="form-group col-10">
            <label for="Immagine">Immagine:</label>
            <input class="form-control" type="file" id="Immagine" name="Immagine"  placeholder="<?php echo $prodotto["Immagine"] ?>" required/>
        </div>
        <div class="form-group col-4 " >
        <input class="btn btn-primary" id="modify" type="submit" name="modify" value="Modifica prodotto"/>
        </div>
    </form>
</div>