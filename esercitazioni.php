<?php
// Esercizio 1: Somma dei numeri pari
function sommaPari($arr) {
    $numPari = 0;
    foreach ($arr as $num) {
        if ($num % 2 === 0) {
            $numPari += $num;
        };
    };
    return $numPari;
}

sommaPari([1, 2, 3, 4, 5, 6]); // Output: 12

// Esercizio 2: Controllo di una parola palindroma
function isPalindrome($parola) {
    $parolaInvertita = strrev($parola);
    return $parolaInvertita === $parola;
}

isPalindrome("anna");

// Esercizio 3: Rimuovi i duplicati da un array
function rimuoviDuplicati($arr) {
    return array_unique($arr);
}

rimuoviDuplicati([1, 2, 3, 3, 4, 5, 5, 5]);

// Esercizio 4: Contare vocali in una stringa
function contaVocali($str) {
    $strLowerCase = strtolower($str);
    $vocali = ["a", "e", "i", "o", "u"];
    $count = 0;

    foreach (str_split($strLowerCase) as $letter) {
        if (in_array($letter, $vocali)) {
            $count++;
        };
    };
    echo $count;
}

contaVocali("ciao mondo");

// Esercizio 5: Trova il numero massimo
function bigNumber($arr) {
    // Partenza dal primo numero dell'array (utile in casi di numeri negativi)
    $bigNum = $arr[0];

    // Per ogni numero presente nell'array viene verificato se è maggiore o minore di quello salvato nella variabile
    // ed eventualmente viene aggiornata la variabile
    foreach($arr as $num) {
        if ($num > $bigNum) {
            $bigNum = $num;
        }
    }

    echo $bigNum;
}

bigNumber([1, 5, 10, 6, 22, 9, 4]);

// Esercizio 6: Verifica se una parola è presente
function isPresent($str, $word) {
    // Entrambi gli elementi vengono trasformati in minuscolo
    $strLower = strtolower($str);
    $wordLower = strtolower($word);

    // strpos cerca la posizione della parola nella stringa
    // se la trova restituisce true, altrimenti false
    if(strpos($strLower, $wordLower) !== false) {
        echo "trovata";
    } else {
        echo "non trovata";
    }
};

isPresent("hello world", "hello");

// Esercizio 7: Somma dei numeri pari e dispari
function sommPari($arr) {
    $sommaPari = 0;

    foreach($arr as $num) {
        if ($num % 2 == false) {
            $sommaPari += $num;
        }
    }
    echo $sommaPari;
}

sommPari([1, 3, 4, 6, 11, 33, 50]);

function sommDispari($arr) {
    $sommaDispari = 0;

    foreach ($arr as $num) {
        if ($num % 2 == 1) {
            $sommaDispari += $num;
        };
    };
    echo $sommaDispari;
}

sommDispari([1, 3, 4, 6, 11, 33, 50]);

// Esercizio 8: Capitalizza la prima lettera di ogni parola
function capitalize($str) {
    // Prende una stringa e ne capitalizza tutte le iniziali
    $capitalized = ucwords($str);
    echo $capitalized;
}

capitalize("ciao mondo");

// Esercizio 9: Conta quante volte un numero appare
function valueIn($arr, $num) {
    // Ritorna un array associativo con i valori dell'array originale come key e il loro numero di apparizioni come value
    $arrAssociativ = array_count_values($arr);
    echo $arrAssociativ[$num];
}

valueIn([1, 2, 3, 3, 3, 4, 4, 5], 3);


// Esercizio 10: Genera una password casuale
function genPassRand($num) {
    // array_merge crea un unico array
    $character_array = array_merge(
        // genera lettere maiuscole o minuscole o numeri entro un certo range
        range("a", "z"),
        range("A", "Z"),
        range(0, 9)
    );

    $password = "";

    for($i = 0; $i <= $num; $i++) {
        // Prende un indice casuale da un array
        $index = array_rand($character_array);
        $password .= $character_array[$index];
    }

    echo $password;
}

genPassRand(16);