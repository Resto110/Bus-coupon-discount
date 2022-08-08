var username = document.getElementById("username");

function check() {
    var nbr
    nbr = Number(document.getElementById("age").value);
    if (document.getElementById("username" && "age").value.length === 0) {
        alert("Pensi di prendermi per i fondelli? io ci ho speso più di 4 giorni su questo progetto, quindi per favore inserisci il tuo nome e la tua età :(")
    }

    if (nbr < 18) {
        window.alert('Ciao ' + username.value + ' devi pagare 9 euro !');
    } else {
        window.alert('Ciao ' + username.value + ' devi pagare 10 euro !');
    }

}

