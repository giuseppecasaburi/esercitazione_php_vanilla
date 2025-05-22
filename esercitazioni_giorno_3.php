<?php
// Esercizio 1: Numeri pari
// Data una lista di numeri, restituisci solo quelli pari.
$numeri = [1, 4, 7, 8, 10];

function numeriPari($arr) {
    $numeriPari = [];
    foreach($arr as $num) {
        if($num % 2 === 0) {
            $numeriPari[] = $num;
        }
    }
    return $numeriPari;
}

print_r(numeriPari($numeri));


## Esercizio 2: Somma dei numeri positivi
// Data una lista di numeri, somma solo i positivi.
$valori = [-2, 3, -1, 7, 0];

function sommaPositivi($arr) {
    $sommaPositivi = [];
    foreach($arr as $num) {
        if ($num > 0) {
            $sommaPositivi[] = $num;
        }
    }
    $somma = array_sum($sommaPositivi);
    return $somma;
}

print_r(sommaPositivi($valori));


## Esercizio 3: Crea un dizionario parola => lunghezza
// Data una lista di parole, crea un array associativo con parola => numero di lettere.
$parole = ['ciao', 'developer', 'php'];

function associativo($arr) {
    $arrayAssociativo = [];
    foreach ($arr as $parola) {
        $arrayAssociativo[$parola] = strlen($parola);
    }
    return $arrayAssociativo;
}

print_r(associativo($parole));


## Esercizio 4: Stringa palindroma
// Scrivi una funzione che verifica se una stringa è palindroma (uguale al contrario). Ignora maiuscole/minuscole.
$parola = "Anna";

function palindroma($word) {
    $parolaMinuscola = strtolower($word);
    if(strrev($parolaMinuscola) == $parolaMinuscola) {
        return true;
    } else {
        return "Non è palindroma";
    }
}

print_r(palindroma($parola));


## Esercizio 5: Capitalizza parole
// Scrivi una funzione che trasforma una frase in stile titolo (prima lettera maiuscola di ogni parola).
$frase = "ciao mondo da php"; // "Ciao Mondo Da Php"
function titolo($str) {
    $stringaVuota = "";
    $stringaUpper = str_split($str);
    foreach($stringaUpper as $string) {
        $parolaUpper = ucfirst($string);
        $stringaVuota .= "$parolaUpper ";
    }
    return $stringaVuota;
}

print_r(titolo($frase));


## Esercizio 6: Trova massimo e minimo
// Data una lista di numeri, restituisci un array con i valori minimo e massimo.
$numeri = [7, 2, 19, -4, 0];

function minMax($arr) {
    $min = $arr[0];
    $max = $arr[0];

    foreach($arr as $num) {
        if($num > $max) {
            $max = $num;
        }

        if($num < $min) {
            $min = $num;
        }
    }

    return "Il valore minimo è $min ed il valore massimo è $max";
}

print_r(minMax($numeri));


## Esercizio 7: Raggruppa per iniziale
// Data una lista di parole, raggruppale in base alla lettera iniziale.
$parole = ['cane', 'cielo', 'gatto', 'gioco', 'giardino', 'cavallo'];

function inizialiUguali($arr) {
    $gruppi = [];
    foreach ($arr as $parola) {
        $iniziale = strtolower($parola[0]);
        $gruppi[$iniziale][] = $parola;
    }
    return $gruppi;
}

print_r(inizialiUguali($parole));


## Esercizio 8: Frequenza delle lettere
// Data una stringa, conta quante volte appare ogni lettera (ignora spazi e differenza tra maiuscole/minuscole).
$testo = "Ciao Ciao PHP";

function occorrenze($str) {
    $strLower = strtolower(str_replace(' ', '', $str));
    $strArr = str_split($strLower);
    return array_count_values($strArr);
}

print_r(occorrenze($testo));


## Esercizio 9: Merge di due array associativi
// Unisci due array associativi. In caso di chiavi duplicate, mantieni il valore del secondo array.
$arr1 = ['nome' => 'Luca', 'email' => 'luca@mail.com'];
$arr2 = ['email' => 'luca@gmail.com', 'età' => 25];

function merge($arr, $arr2) {
    $array = array_merge($arr, $arr2);
    return $array;
}

print_r(merge($arr1, $arr2));

## Esercizio 10: Conta le parole
// Data una frase, conta quante parole contiene.
$frase = "PHP è un linguaggio molto usato nel backend";

function contaParole($str) {
    $contaParole = str_word_count($str);
    return $contaParole;    
}

print_r(contaParole($frase));