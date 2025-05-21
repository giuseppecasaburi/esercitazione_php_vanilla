<?php
// Esercizio 1: Filtrare Numeri Pari
// Data una lista di numeri interi, crea una funzione che restituisca solo i numeri pari.
$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Metodo senza array_filter
function trovaNumeriPari ($arr) {
$numeriPari = [];

foreach ($arr as $numero) {
if ($numero % 2 == 0) {
array_push($numeriPari, $numero);
}
}

print_r($numeriPari);
}

trovaNumeriPari($numeri);

// Metodo con array_filter
$numeriPari = array_filter($numeri, function($n) {
return $n % 2 === 0;
});

print_r($numeriPari);


## Esercizio 2: Convertire Stringhe in Maiuscolo
// Data una lista di nomi, scrivi una funzione che restituisca tutti i nomi in maiuscolo.
$nomi = ['anna', 'luca', 'marco'];
$nomiMaiuscolo = [];

// Metodo senza array_map
foreach ($nomi as $nome) {
array_push($nomiMaiuscolo, strtoupper($nome));
}

print_r($nomiMaiuscolo);

// Metodo con array_map
function nomiMaiuscolo ($arr) {
$nomiMaiuscolo = array_map("strtoupper", $arr);

print_r($nomiMaiuscolo);
};

nomiMaiuscolo($nomi);


## Esercizio 3: Calcolare la Somma degli Elementi
// Data una lista di numeri, scrivi una funzione che calcoli la somma totale degli elementi.
$numeri = [5, 10, 15];

// Metodo senza reduce()
function somma($arr) {
$somma = 0;
foreach($arr as $num) {
$somma += $num;
}
return $somma;
}

print_r(somma($numeri));

// Metodo con reduce()
function sommaNumeri($arr) {
$somma = array_reduce($arr, fn($n, $r) => $n + $r, 0);
return $somma;
}

print_r(sommaNumeri($numeri));


## Esercizio 4: Ordinare un Array Associativo per Valore
// Data una lista di studenti con i loro punteggi, ordina l'array in ordine decrescente di punteggio.
$studenti =
[
'Anna' => 28,
'Luca' => 22,
'Marco' => 30
];

// Metodo asort()
function ordineDecre($arr) {
arsort($arr);
return $arr;
}

print_r(ordineDecre($studenti));


## Esercizio 5: Unire Due Array
// Data due liste di elementi, uniscile in un unico array.
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e'];

function fusione($arr, $arr2) {
$arrUnito = array_merge($arr, $arr2);
return $arrUnito;
}

print_r(fusione($array1, $array2));


## Esercizio 6: Trovare la Differenza tra Due Array
// Data due liste di numeri, trova gli elementi presenti nel primo array ma non nel secondo.
$array1 = [1, 2, 3, 4, 5];
$array2 = [2, 4];

function differenzaArray($arr, $arr2) {
$arrayDifferenziato = array_diff($arr, $arr2);
return $arrayDifferenziato;
}

print_r(differenzaArray($array1, $array2));


## Esercizio 7: Contare la Frequenza degli Elementi
// Data una lista di elementi, conta quante volte ogni elemento appare nell'array.
$elementi = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

function contaOccorrenze($arr) {
$contatore = array_count_values($arr);
return $contatore;
}

print_r(contaOccorrenze($elementi));


## Esercizio 8: Accedere a un Array Multidimensionale
// Data una lista di studenti con i loro dettagli, estrai solo i nomi.
$studenti = [
['nome' => 'Anna', 'voto' => 28],
['nome' => 'Luca', 'voto' => 22],
['nome' => 'Marco', 'voto' => 30]
];

// Metodo senza array_column()
function nomi($arr) {
$nomiStudenti = [];
foreach($arr as $studente) {
array_push($nomiStudenti, $studente["nome"]);
};
return $nomiStudenti;
};

print_r(nomi($studenti));

// Metodo con array_column()
function soloNomi($arr) {
$soloNomiStudenti = array_column($arr, "nome");
return $soloNomiStudenti;
}

print_r(soloNomi($studenti));


## Esercizio 9: Verificare l'Esistenza di una Chiave in un Array
// Data una lista di prodotti con i loro prezzi, verifica se un determinato prodotto esiste nell'array.
$prodotti = [
'penna' => 1.5,
'matita' => 0.5,
'gomma' => 0.75
];
$prodotto_da_verificare = 'matita';

function esisteInArray($arr, $elem) {
if(array_key_exists($elem, $arr)) {
return $elem . " Esiste";
} else {
return $elem . "Non esiste";
}
}

print_r(esisteInArray($prodotti, $prodotto_da_verificare));


## Esercizio 10: Convertire un Array in una Stringa
// Data una lista di parole, uniscile in una singola stringa separata da spazi.
$parole = ['Questo', 'è', 'un', 'test'];

// Metodo senza implode()
function arrayInStringa($arr) {
$stringa = "";
foreach($arr as $parola) {
$stringa .= " $parola";
}

return $stringa;
}

print_r(arrayInStringa($parole));

// Metodo con implode()
function arrayInFrase($arr) {
$stringa = implode(" ", $arr);
return $stringa;
}

print_r(arrayInFrase($parole));