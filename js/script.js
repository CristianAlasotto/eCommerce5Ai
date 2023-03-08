let campiRegistrazione;
let campiRegJson = {};

function controllaDati() {
    //verifica dei dati
    campiRegistrazione = document.querySelectorAll(".datiUtente");
    /* console.log(campiRegistrazione); */

    let controlloOK = true;
    for (let index = 0; index < campiRegistrazione.length; index++) {
        if (!campiRegistrazione[index].value) {
            //campiRegistrazione[index].value != ""
            controlloOK = false;
            /* console.log(controlloOK); */
        }

        //accoppiamento key - value
        campiRegJson[campiRegistrazione[index].id] =
            campiRegistrazione[index].value;
    }

    return controlloOK;
}

document
    .getElementById("submit-btn")
    .addEventListener("click", confermaRegistrazione);

function confermaRegistrazione() {
    if (controllaDati()) {
        console.log("dato valido");

        $.ajax({
            url: "./ajaxScripts/salvaUtente.php",
            type: "POST",
            data: JSON.stringify(campiRegJson),
            contentType: "application/json; charset=utf-8",
            success: function (response) {
                alert(response.status);
            },
            error: function () {
                alert("error");
            },
        });
    }
}
