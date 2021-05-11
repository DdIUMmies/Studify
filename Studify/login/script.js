function validaForm() {
    if (document.myForm.remember.checked) {
        window.alert("Le tue credenziali sono state salvate per il prossimo accesso.");
    }
    else {
        window.alert("Non sarai ricordato per la prossima volta.");
    }
}