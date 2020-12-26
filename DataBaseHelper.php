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

    public function getProductsFromCategory($category){
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Prezzo FROM Prodotto WHERE Categoria=?");
        $statement->bind_param('s', $category);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($IdProdotto){
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Descrizione, Prezzo FROM Prodotto WHERE IDProdotto=?");
        $statement->bind_param('i', $IdProdotto);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function isProductAvailable($IdProdotto){
        $statement = $this->db->prepare("SELECT QuantitàResidua FROM Prodotto WHERE IdProdotto=?");
        $statement->bind_param('i', $IdProdotto);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["QuantitàResidua"];
    }

    public function checkLogin($username, $password){
        $query = "SELECT U.IdUtente, U.Nome, C.Email, C.Password, U.Tipo FROM Utente U, Credenziali C WHERE U.Email = C.Email AND C.Email = ? AND C.Password = ?";
        $statement = $this->db->prepare($query);
        $hashedPassword = hash("sha256" ,$password, false);
        $statement->bind_param('ss', $username, $hashedPassword);
        $statement->execute();
        $result = $statement->get_result();
        $statement->close();
        return $result->fetch_all(MYSQLI_ASSOC);
    }  


    public function registraCliente($nome, $cognome, $email, $indirizzo, $tipo, $password){
        
        $queryCredenziali = "INSERT INTO Credenziali (Email, Password) VALUES (?, ?)";
        $statement = $this->db->prepare($queryCredenziali);
        $hashedPassword = hash("sha256" ,$password, false);
        $statement->bind_param("ss", $email, $hashedPassword);
        $statement->execute();
        
        $queryUtente = "INSERT INTO Utente (Email, Nome, Cognome, Indirizzo, Tipo) VALUES(?, ?, ?, ?, ?)";
        $statement = $this->db->prepare($queryUtente);
        $statement->bind_param("sssss", $email, $nome, $cognome, $indirizzo, $tipo);
        $statement->execute();
    }

    public function getProductsInShoppingCart($IdUtente){
        $statement = $this->db->prepare("SELECT P.IdProdotto, P.NomeProdotto, P.Prezzo, P.Immagine, PC.Quantità FROM Prodotto_in_carrello PC JOIN Prodotto P ON (PC.IdProdotto = P.IdProdotto) WHERE PC.IdUtente=?");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getQuantityFromShoppingCart($IdProdotto, $IdUtente){
        $statement = $this->db->prepare("SELECT Quantità FROM Prodotto_in_carrello WHERE IdProdotto=? AND IdUtente=?");
        $statement->bind_param('ii', $IdProdotto, $IdUtente);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateShoppingCart($IdProdotto, $IdUtente){
        $quantità = $this->getQuantityFromShoppingCart($IdProdotto, $IdUtente);
        if(count($quantità) == 0){
            $statement = $this->db->prepare("INSERT INTO Prodotto_in_carrello(IdProdotto, IdUtente, Quantità) VALUES (?,?,1)");
            $statement->bind_param('ii', $IdProdotto, $IdUtente);
            $statement->execute();
        }
        else{
            $quantità = $quantità[0]["Quantità"] + 1; 
            $statement = $this->db->prepare("UPDATE Prodotto_in_carrello SET Quantità = $quantità WHERE IdProdotto=? AND IdUtente=?");
            $statement->bind_param('ii', $IdProdotto, $IdUtente);
            $statement->execute();
        }
    }

    public function searchProducts($stringa){
        $statement = $this->db->prepare("SELECT IdProdotto, Immagine, NomeProdotto, Prezzo FROM Prodotto WHERE NomeProdotto LIKE '%?%'");
        $statement->bind_param('s', $stringa);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function resetShoppingCart($IdUtente){
        $statement = $this->db->prepare("DELETE FROM Prodotto_in_carrello WHERE IdUtente=?");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
    }

    public function insertOrdine($IdUtente){
        $statement = $this->db->prepare("INSERT INTO Ordine(Data, IdUtente) VALUES (CURDATE(), ?)");
        $statement->bind_param('i', $IdUtente);
        $statement->execute();
        $statement = $this->db->prepare("SELECT MAX(IdOrdine) as IdOrdine FROM Ordine");
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0]["IdOrdine"];
    }

    public function insertDettaglioOrdine($IdOrdine){
        $prodottiInCarrello = $this->getProductsInShoppingCart($_SESSION["IdUtente"]);
        foreach($prodottiInCarrello as $prodotto){
            $statement = $this->db->prepare("INSERT INTO Dettaglio_ordine(IdProdotto, IdOrdine, Quantità) VALUES (?,?,?)");
            $statement->bind_param('iii', $prodotto["IdProdotto"], $IdOrdine, $prodotto["Quantità"]);
            $statement->execute();
        }
    }

    public function insertStatoOrdine($IdOrdine){
        $statement = $this->db->prepare("INSERT INTO Stato_ordine(Descrizione, Data, IdOrdine) VALUES ('Confermato',CURDATE(),?)");
        $statement->bind_param('i', $IdOrdine);
        $statement->execute();
    }
}

?>