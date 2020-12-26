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

        $statement = $this->db->prepare("SELECT IdProdotto,Immagine, NomeProdotto, Prezzo FROM Prodotto LIMIT ?");
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

    public function getProductById($n){

        $statement = $this->db->prepare("SELECT Immagine, NomeProdotto, Descrizione, Prezzo FROM Prodotto WHERE IDProdotto=?");
        $statement->bind_param('i', $n);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function isProductAvailable($n){

        $statement = $this->db->prepare("SELECT QuantitàResidua FROM Prodotto WHERE IdProdotto=?");
        $statement->bind_param('i', $n);
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
}

?>