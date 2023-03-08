<?php
    //importo il file di connessione al db
    include_once("../db/conn.php");

    $datiRicevuti = file_get_contents('php://input');
    $input = json_decode($datiRicevuti, TRUE);

    //verifico la connessione
    if($conn != null) {
        consoleLog("Db connesso");

        $query = "INSERT INTO utenti (email, cognome, nome, tel, partita_iva, password_utente, citta, cf, cap, ind_fatturazione)";
        $query =  $query . " VALUES (
            \"{$input['userEmail']}\", 
            \"{$input['userSurname']}\",
            \"{$input['userName']}\",
            \"{$input['userTel']}\",
            \"{$input['userPartIVA']}\",
            \"{$input['userPw']}\",
            \"{$input['userCity']}\",
            \"{$input['userCf']}\",
            \"{$input['userCap']}\",
            \"{$input['userInd']}\"


        );"; 

        if (mysqli_query($conn, $query)) {
        } else {
            echo "Error: " . "<br>" . mysqli_error($conn);
        }
    }

?>