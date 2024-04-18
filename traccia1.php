<?php
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [
 ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
 ['name' => 'Marco', 'surname' => 'De Vito', 'gender' => 'M'],
 ['name' => 'Carolina', 'surname' => 'Villa', 'gender' => 'F'],
];

foreach ($users as  $user) {
    
    switch ($user['gender']) {
        case 'NB':
            echo "\nBuongiorno "."{$user['name']} {$user['surname']}";
            break;
        case 'F':
            echo "\nBuongiorno Sig.ra "."{$user['name']} {$user['surname']}";
            break;
        case 'M':
            echo "\nBuongiorno Sig. "."{$user['name']} {$user['surname']}";
            break;
        
        default:
            echo "\nErrore";
            break;
    }

    
}