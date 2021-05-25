function validaForm() {
    if (document.myForm.remember.checked) {
        window.alert("Le tue credenziali sono state salvate per il prossimo accesso.");
    }
    else {
        window.alert("Non sarai ricordato per la prossima volta.");
    }
    window.alert("Benvenuto in Studify! Stai per essere reindirizzato al tuo profilo. Buona permanenza :)")
}

function accountReg() {
  window.alert("Esiste già un account registrato con questa email! Clicca qui per accedere!");
}

function ricerca() {
    var input; 
    var filtro;
    var lista;
    var voci;
    var x;
    var i;
    var testo;
      input = document.getElementById("barraRicerca");
      filtro = input.value.toUpperCase();
      lista = document.getElementById("elenco");
      voci = lista.getElementsByTagName("li");
      for (i = 0; i < voci.length; i++) {
        x = lista.getElementsByTagName("li")[i];
        testo = x.textContent || x.innerText;
        if (testo.toUpperCase().indexOf(filtro) > -1) {
          voci[i].style.display = "";
        } else {
          voci[i].style.display = "none";
        }
      }
    }