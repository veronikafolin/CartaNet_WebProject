function alertLogIn() {
        alert("Per aggiungere il prodotto al carrello devi effettuare il login!");
  }

document.getElementById("signup").onclick = function (){
      const pwd = document.getElementById("Password");
      const Rpwd = document.getElementById("RipetiPassword");     
      if(pwd != Rpwd){
            alert("Errore");
      }
}
