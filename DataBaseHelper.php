<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }        
    }

    public function getProducts($n){
        $statement = $this->db->prepare("SELECT IdProdotto,Immagine, NomeProdotto, Prezzo FROM Prodotto ORDER BY RAND() LIMIT ?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function countProducts(){
        $statement = $this->db->prepare("SELECT Count(IdProdotto) as NumeroProdotti FROM Prodotto");
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["NumeroProdotti"];
    }

    public function getProductsFromCategory($category){
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Prezzo FROM Prodotto WHERE Categoria=?");
        $statement->bind_param('s', $category);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($IdProdotto){
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Descrizione, QuantitaResidua, Prezzo, Categoria FROM Prodotto WHERE IDProdotto=?");
        $statement->bind_param('i', $IdProdotto);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function isProductAvailable($IdProdotto){
        $statement = $this->db->prepare("SELECT QuantitaResidua FROM Prodotto WHERE IdProdotto=?");
        $statement->bind_param('i', $IdProdotto);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["QuantitaResidua"];
    }

    public function checkLogin($username, $password){
        $query = "SELECT U.IdUtente, U.Nome, C.Email, C.Password, U.Tipo FROM Utente U, Credenziali C WHERE U.Email = C.Email AND C.Email = ? AND C.Password = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param('ss', $username, $password);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        return $result->fetch_all(MYSQLI_ASSOC);
    }  


    public function registraCliente($nome, $cognome, $email, $indirizzo, $tipo, $password){
        
        $queryCredenziali = "INSERT INTO Credenziali (Email, Password) VALUES (?, ?)";
        $statement = $this->db->prepare($queryCredenziali);
        $statement->bind_param("ss", $email, $password);
        $statement->execute();
        
        $queryUtente = "INSERT INTO Utente (Email, Nome, Cognome, Indirizzo, Tipo) VALUES(?, ?, ?, ?, ?)";
        $statement = $this->db->prepare($queryUtente);
        $statement->bind_param("sssss", $email, $nome, $cognome, $indirizzo, $tipo);
        $statement->execute();
    }

    public function getProductsInShoppingCart($IdUtente){
        $statement = $this->db->prepare("SELECT P.IdProdotto, P.NomeProdotto, P.Prezzo, P.Immagine, PC.Quantita FROM Prodotto_in_carrello PC JOIN Prodotto P ON (PC.IdProdotto = P.IdProdotto) WHERE PC.IdUtente=?");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getQuantityFromShoppingCart($IdProdotto, $IdUtente){
        $statement = $this->db->prepare("SELECT Quantita FROM Prodotto_in_carrello WHERE IdProdotto=? AND IdUtente=?");
        $statement->bind_param('ii', $IdProdotto, $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateShoppingCart($IdProdotto, $IdUtente){
        $quantità = $this->getQuantityFromShoppingCart($IdProdotto, $IdUtente);
        if(count($quantità) == 0){
            $statement = $this->db->prepare("INSERT INTO Prodotto_in_carrello(IdProdotto, IdUtente, Quantita) VALUES (?,?,1)");
            $statement->bind_param('ii', $IdProdotto, $IdUtente);
            $statement->execute();
        }
        else{
            $quantità = $quantità[0]["Quantita"] + 1; 
            $statement = $this->db->prepare("UPDATE Prodotto_in_carrello SET Quantita = $quantità WHERE IdProdotto=? AND IdUtente=?");
            $statement->bind_param('ii', $IdProdotto, $IdUtente);
            $statement->execute();
        }
    }

    public function searchProducts($stringa){
        $stringa = '%'.$stringa.'%';
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Prezzo FROM Prodotto WHERE NomeProdotto LIKE ?");
        $statement->bind_param('s', $stringa);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNotifications($IdUtente){
        $query = "SELECT IdNotifica, Data, Oggetto, Letto, Testo FROM Notifica WHERE IdUtente = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function resetShoppingCart($IdUtente){
        $statement = $this->db->prepare("DELETE FROM Prodotto_in_carrello WHERE IdUtente=?");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
    }

    public function CalculateTotale($IdUtente){
        $prodottiInCarrello = $this->getProductsInShoppingCart($_SESSION["IdUtente"]);
        $totale = 0;
        foreach($prodottiInCarrello as $prodotto){
            $totale = $totale + ($prodotto["Prezzo"] * $prodotto["Quantita"]);
        }
        return $totale;
    }

    public function insertOrdine($totale, $IdUtente){
        $statement = $this->db->prepare("INSERT INTO Ordine(Data, Totale, IdUtente) VALUES (CURDATE(),?,?)");
        $statement->bind_param('di',  $totale, $IdUtente);
        $statement->execute();
        $statement = $this->db->prepare("SELECT MAX(IdOrdine) as IdOrdine FROM Ordine");
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["IdOrdine"];
    }

    public function insertDettaglioOrdine($IdOrdine){
        $prodottiInCarrello = $this->getProductsInShoppingCart($_SESSION["IdUtente"]);
        foreach($prodottiInCarrello as $prodotto){
            $statement = $this->db->prepare("INSERT INTO Dettaglio_ordine(IdProdotto, IdOrdine, Quantita) VALUES (?,?,?)");
            $statement->bind_param('iii', $prodotto["IdProdotto"], $IdOrdine, $prodotto["Quantita"]);
            $statement->execute();
        }
    }

    public function updateProductAvailability($IdOrdine){
        $prodottiOrdinati = $this->getDettaglioOrdine($IdOrdine);
        foreach($prodottiOrdinati as $prodotto){
            $quantitàResidua = $this->isProductAvailable($prodotto["IdProdotto"]);
            $quantitàResidua = $quantitàResidua - $prodotto["Quantita"];
            $statement = $this->db->prepare("UPDATE Prodotto SET QuantitaResidua=? WHERE IdProdotto=?");
            $statement->bind_param('ii', $quantitàResidua, $prodotto["IdProdotto"]);
            $statement->execute();

            //Notifica al venditore
            if($quantitàResidua == 0){
                $oggetto = "Finita disponibilità prodotto".$prodotto["IdProdotto"];
                $testo = "La disponibilità del prodotto si è azzerata, provvedere al rifornimento";
                $letto = 0;
                $IdUtente = 2;
                $this->notify($oggetto, $testo, $letto, $IdUtente);
            }
        }
    }

    public function insertStatoOrdine($IdOrdine){
        $statement = $this->db->prepare("INSERT INTO Stato_ordine(Descrizione, Data, IdOrdine) VALUES ('Confermato',CURDATE(),?)");
        $statement->bind_param('i', $IdOrdine);
        $statement->execute();
    }

    public function setRead($IdNotifica){
        $query = "UPDATE Notifica SET Letto = 1 WHERE IdNotifica = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $IdNotifica);
        $statement->execute();
    }

    public function getOrdersById($IdUtente){
        $statement = $this->db->prepare("SELECT O.IdOrdine, O.Data as DataOrdine, S.Descrizione, S.Data as DataStato, O.Totale FROM Ordine O JOIN Stato_ordine S ON (O.IdOrdine = S.IdOrdine) WHERE O.IdUtente=?");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getInfoOrder($IdOrdine){
        $statement = $this->db->prepare("SELECT O.IdOrdine, O.Data as DataOrdine, S.Descrizione, S.Data as DataStato, O.Totale FROM Ordine O JOIN Stato_ordine S ON (O.IdOrdine = S.IdOrdine) WHERE O.IdOrdine=?");
        $statement->bind_param('i', $IdOrdine);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getDettaglioOrdine($IdOrdine){
        $statement = $this->db->prepare("SELECT P.IdProdotto, P.NomeProdotto, P.Prezzo, P.Immagine, DO.Quantita FROM Dettaglio_ordine DO JOIN Prodotto P ON (DO.IdProdotto = P.IdProdotto) WHERE DO.IdOrdine=?");
        $statement->bind_param('i', $IdOrdine);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function aggiungiProdotto($nome, $descrizione, $prezzo, $disponibilità, $categoria, $path){
        $query = "INSERT INTO Prodotto (NomeProdotto, Prezzo, QuantitaResidua, Immagine, Descrizione, Categoria) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->db->prepare($query);
        $statement->bind_param("sdisss", $nome, $prezzo, $disponibilità, $path, $descrizione,  $categoria);
        $statement->execute();
    }

    public function notify($oggetto, $testo, $letto, $IdUtente){
        $query = "INSERT INTO Notifica (Oggetto, Testo, Data, Letto, IdUtente) VALUES (?, ?, CURDATE(), ?, ?)";
        $statement = $this->db->prepare($query);
        $statement->bind_param("ssii", $oggetto, $testo, $letto, $IdUtente);
        $statement->execute();
    }
    
    public function getOrders(){
        $query = "SELECT O.IdOrdine, U.Nome, U.Cognome, O.Data as DataOrdine, S.Descrizione, S.Data as DataStato, O.Totale FROM Ordine O, Stato_ordine S, Utente U WHERE O.IdOrdine=S.IdOrdine AND O.IdUtente=U.IdUtente";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateStatoOrdine($statoOrdine, $IdOrdine){
        $statement = $this->db->prepare("UPDATE Stato_ordine SET Descrizione=?, Data=CURDATE() WHERE IdOrdine=?");
        $statement->bind_param('si', $statoOrdine, $IdOrdine);
        $statement->execute();
    }

    public function modificaProdotto($id, $nome, $descrizione, $prezzo, $quantitàResidua, $categoria, $immagine){
        $query = "UPDATE Prodotto SET NomeProdotto = ?, Prezzo = ?, QuantitaResidua = ?, Immagine = ?, Descrizione = ?, Categoria = ? WHERE IdProdotto = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("sdisssi", $nome, $prezzo, $quantitàResidua, $immagine, $descrizione, $categoria, $id);
        $statement->execute();
    }

    public function getIdUtenteByOrdine($IdOrdine){
        $query = "SELECT IdUtente FROM Ordine WHERE IdOrdine=?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $IdOrdine);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["IdUtente"];
    }

    public function registerFailedAttempts($user){
        $query = "INSERT INTO Login_attempts(Time, Email) VALUES (?, ?)";
        $statement = $this->db->prepare($query);
        $now = time();
        $statement->bind_param("ss", $now, $user);
        $res = $statement->execute();
    }

    public function checkBruteForce($user){
        $now = time();
        $checkWindow = $now - 60 * 60; 
        $query = "SELECT count(*) as NumTentativi FROM Login_attempts WHERE Email=? AND Time > ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("ss", $user, $checkWindow);
        $statement->execute();
        $result = $statement->get_result();
        $tentativi = $result->fetch_all(MYSQLI_ASSOC)[0]["NumTentativi"];
        if($tentativi >= 3){
            $bruteForce = true;
        }else{
            $bruteForce = false;
        }
        return $bruteForce;
    }
}
?>