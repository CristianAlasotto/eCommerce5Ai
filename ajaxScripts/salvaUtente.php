<?php
    //importo il file di connessione al db
    include_once("../db/conn.php");

    $datiRicevuti = file_get_contents('php://input');

    var_dump($datiRicevuti);
    $toJson = json_encode($datiRicevuti);

    consoleLog($toJson['userName']);

    //verifico la connessione
    if($conn != null) {
        consoleLog("Db connesso");

        /* $query = "INSERT INTO utenti (email, cognome, nome, tel, partita_iva, password_utente, citta, cf, cap, ind_fatturazione)";
        $query =  $query . " VALUES (". $datiRicevuti["userName"] .");"; */
    }

?>