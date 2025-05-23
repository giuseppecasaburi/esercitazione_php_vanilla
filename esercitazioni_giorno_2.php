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


## Esercizio 1: Frequenze Parole
// Data una lista di parole, conta quante volte appare ciascuna parola e restituisci un array associativo del tipo:
$input = ['gatto', 'cane', 'gatto', 'topo', 'gatto', 'topo'];

function occorrenze($arr) {
    $contatoreDiOccorrenze = array_count_values($arr);
    return $contatoreDiOccorrenze;
};

print_r(occorrenze($input));


## Esercizio 2: Nomi da Maiuscolo a Minuscolo
// Data una lista di nomi scritti in maiuscolo, restituisci una nuova lista con tutti i nomi in minuscolo.
$parole = ['ANNA', 'LUCA', 'MARCO'];
function paroleInMinuscolo($arr) {
    $paroleInMinuscolo = array_map("strtolower", $arr);
    return $paroleInMinuscolo;
};

print_r(paroleInMinuscolo($parole));


## Esercizio 3: Elementi Comuni
// Data due liste di numeri interi, restituisci un nuovo array contenente solo i numeri presenti in entrambi gli array.
$array = [1, 2, 3, 4];
$array2 = [3, 4, 5, 6];

function valoriComuni($arr, $arr2) {
    $arrayCondiviso = array_intersect($arr, $arr2);
    return $arrayCondiviso;
}

print_r(valoriComuni($array, $array2));


## Esercizio 4: Somma Voti
// Hai una lista di array associativi rappresentanti studenti. Calcola la somma totale dei voti.
$arrayAssociativo = [
    ['nome' => 'Anna', 'voto' => 26],
    ['nome' => 'Luca', 'voto' => 30],
    ['nome' => 'Marco', 'voto' => 24]
];

function sommaVoti($arr) {
    $somma = 0;

    foreach ($arr as $studente) {
        $somma += $studente["voto"];
    }

    return $somma;
}

print_r(sommaVoti($arrayAssociativo));


## Esercizio 5: Rimuovere Duplicati
// Data una lista di stringhe, restituisci un array che contiene ogni parola una sola volta, mantenendo l’ordine originale.
$arrayValori = ['rosso', 'verde', 'rosso', 'blu', 'verde'];
function rimuoviDuplicati($arr) {
    $visti = [];
    $risultato = [];
    
    foreach($arr as $elem) {
        if(!in_array($elem, $visti)) {
            $visti[]= $elem;
            $risultato[] = $elem;
        };
    };

    return $risultato;
}

print_r(rimuoviDuplicati($arrayValori));


## Esercizio 1: Inverti l'array
// Data una lista di numeri, restituisci l’array invertito.
$numeri = [1, 2, 3, 4];
function numeriInvertiti($arr) {
    $numeriInvertiti = array_reverse($arr);
    return $numeriInvertiti;
}

print_r(numeriInvertiti($numeri));


## Esercizio 2: Somma dei numeri pari
// Data una lista di numeri, restituisci la somma di quelli pari.
$valori = [1, 4, 6, 7, 10];

function sommaPari($arr) {
    $sommaNumeriPari = 0;
    foreach($arr as $num) {
        if($num % 2 === 0) {
            $sommaNumeriPari += $num;
        };
    };
    return $sommaNumeriPari;
}

print_r(sommaPari($valori));


## Esercizio 3: Lunghezza delle parole
// Data una lista di parole, restituisci un array con le rispettive lunghezze.
$parole = ['ciao', 'PHP', 'developer'];

function lunghezza($arr) {
    $arrayLunghezze = [];
    foreach ($arr as $str) {
        $arrayLunghezze[$str] = strlen($str);
    }

    return $arrayLunghezze;
}

print_r(lunghezza($parole));


## Esercizio 4: Capitalizza le parole
// Data una lista di parole in minuscolo, restituisci una nuova lista con la prima lettera maiuscola.
$nomi = ['mario', 'luigi', 'peppe'];

function capitalize($arr) {
    $nomiCapsLock = [];
    foreach ($arr as $str) {
        $nomiCapsLock[] = ucfirst($str);
    }
    return $nomiCapsLock;
}

print_r(capitalize($nomi));


## Esercizio 5: Unione e ordinamento
// Unisci due array e restituisci l’unico array risultante ordinato in ordine crescente.
$a = [5, 1, 3];
$b = [4, 2];

function arrayFusion($arr, $arr2) {
    $arrayUnito = array_merge($arr, $arr2);
    sort($arrayUnito);
    return $arrayUnito;
}

print_r(arrayFusion($a, $b));


## Esercizio 6: Parole più lunghe di 4 caratteri
// Filtra un array di parole e restituisci solo quelle che hanno più di 4 caratteri.
$input = ['cane', 'gattino', 'albero', 'blu'];

function overFour($arr) {
    $strOverFour = [];
    foreach($arr as $str) {
        if(strlen($str) > 4) {
            $strOverFour[] = $str;
        }
    }
    return $strOverFour;
}

print_r(overFour($input));


## Esercizio 7: Verifica esistenza chiave
// Data una mappa (array associativo), verifica se esiste la chiave 'email'.
$utente = ['nome' => 'Anna', 'cognome' => 'Rossi'];

function keyExist($arr) {
    if(array_key_exists("email", $arr)) {
        return "La chiave EMAIL è presente";
    } else {
        return "La chiave EMAIL non è presente";
    }
}

print_r(keyExist($utente));


## Esercizio 8: Media dei valori
// Data una lista di numeri, calcola la media aritmetica.
$numeri = [7, 8, 6, 10];

function media($arr) {
    $somma = array_sum($arr);
    $media = $somma / count($arr);
    return $media;
}

print_r(media($numeri));


## Esercizio 9: Frequenza caratteri in una stringa
// Conta quante volte compare ogni carattere in una stringa.
$stringa = 'banana';

function occorrenzeStringa($str) {
    $arrayStr = str_split($str);
    $strCount = array_count_values($arrayStr);

    return $strCount;
}

print_r(occorrenzeStringa($stringa));


## Esercizio 10: Estrai i nomi da array associativo
// Data una lista di utenti, estrai in un array i soli nomi.
$utenti = [
    ['nome' => 'Anna', 'eta' => 25],
    ['nome' => 'Marco', 'eta' => 30],
    ['nome' => 'Luca', 'eta' => 28]
];

function nomiUtenti($arr) {
    $nomi = [];

    foreach($arr as $student) {
        $nomi[] = $student["nome"];
    }

    return $nomi;
}

print_r(nomiUtenti($utenti));


## Esercizio 1: Somma dei quadrati
// Data una lista di numeri, restituisci la somma dei quadrati di ciascun numero.
$numeri = [2, 3, 4];

function quadrati($arr) {
    $numeriQuadrati = [];

    foreach($arr as $num) {
        $numeriQuadrati[] = $num * $num;
    }

    return array_sum($numeriQuadrati);
}

print_r(quadrati($numeri));


## Esercizio 2: Filtra solo numeri positivi
// Data una lista di numeri (positivi e negativi), restituisci solo quelli maggiori di zero.
$lista = [-5, 3, 0, -2, 10];
 function numeriPositivi($arr) {
    $numeriPositivi = [];

    foreach($arr as $num) {
        if ($num > 0) {
            $numeriPositivi[] = $num;
        }
    }

    return $numeriPositivi;
 }

print_r(numeriPositivi($lista));


## Esercizio 3: Conta vocali
// Data una stringa, conta quante vocali contiene.
$testo = "Programmare in PHP";

function trovaVocali($str) {
    $strMinuscolo = strtolower($str);
    $strArray = str_split($strMinuscolo);
    $vocali = ["a", "e", "u", "i", "o"];
    $contatore = 0;

    foreach($strArray as $letter) {
        if(in_array($letter, $vocali)) {
            $contatore++;
        }
    }

    return $contatore;
}

print_r(trovaVocali($testo));


## Esercizio 4: Estrai indirizzi email
// Dato un array di utenti, estraine gli indirizzi email in un nuovo array.
$utenti = [
    ['nome' => 'Anna', 'email' => 'anna@mail.com'],
    ['nome' => 'Luca', 'email' => 'luca@mail.com']
];

function trovaEmail($arr) {
    $emails = [];

    foreach($arr as $utente) {
        $emails[] = $utente["email"];
    }

    return $emails;
}

print_r(trovaEmail($utenti));


## Esercizio 5: Verifica se tutti i numeri sono dispari
// Data una lista di numeri interi, restituisci true se tutti sono dispari, altrimenti false.
$valori = [3, 7, 11, 15];

function tuttiDispari($arr) {
    foreach($arr as $num) {
        if($num % 2 === 0) {
            return false;
        }
    }

    return true;
}

print_r(tuttiDispari($valori));


## Esercizio 6: Rimuovi elementi nulli
// Rimuovi tutti gli elementi null da un array.
$input = ['ciao', null, 'PHP', null, 'developer'];

function noNull($arr) {
    $arrPulito = [];
    foreach($arr as $elem) {
        if($elem !== null) {
            $arrPulito[] = $elem;
        }
    }
    return $arrPulito;
}

print_r(noNull($input));


## Esercizio 7: Calcola percentuali
// Dato un array di voti da 0 a 30, restituisci un array con le percentuali rispetto al massimo (30).
$voti = [18, 27, 30];

function votiPercentuali($arr) {
    $arrayPercentuali = [];
    foreach($arr as $voto) {
        $arrayPercentuali[] = $voto * 100 / 30;
    }
    return $arrayPercentuali;
}

print_r(votiPercentuali($voti));


## Esercizio 8: Iniziali dei nomi
// Dato un array di nomi completi, restituisci un array con le iniziali.
$nomi = ['Mario Rossi', 'Luca Bianchi', 'Anna Verdi'];

function iniziali($arr) {
    $arrayIniziali = [];
    foreach($arr as $nome) {
        $parti = explode(" ", $nome); // Dove trova il primo argomento passato, divede in due elementi dell'array
        $iniziali = strtoupper($parti[0][0] . $parti[1][0]);
        $arrayIniziali[] = $iniziali;
    }
    return $arrayIniziali;
}

print_r(iniziali($nomi));


## Esercizio 9: Elemento più lungo
// Data una lista di stringhe, restituisci quella con il numero maggiore di caratteri.
$parole = ['ciao', 'sviluppatore', 'PHP', 'supercalifragilistichespiralidoso'];

function stringaLunga($arr) {
    $stringa = $arr[0];

    foreach ($arr as $str) {
        if(strlen($str) > strlen($stringa)) {
            $stringa = $str;
        }
    }
    return $stringa;
}

print_r(stringaLunga($parole));


## Esercizio 10: Rimuovi la parola "nulla"
// Data una frase, rimuovi ogni occorrenza della parola "nulla" (ma non di parole simili come "annullare").
$frase = "Non c'è nulla di interessante nella parola nulla.";

function rimuoviNulla($str) {
    return str_replace("nulla", "", $str);
}

print_r(rimuoviNulla($frase));