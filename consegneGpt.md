## 🧠 Esercizio 1: Somma dei numeri pari
Scrivi una funzione sommaPari($array) che riceve un array di numeri interi e restituisce la somma solo dei numeri pari.

**Esempio**:
sommaPari([1, 2, 3, 4, 5, 6]); // Output: 12

## 🧠 Esercizio 2: Controllo di una parola palindroma
Scrivi una funzione isPalindroma($parola) che restituisce true se la stringa è palindroma, altrimenti false.
Una parola è palindroma se si legge uguale da sinistra a destra e viceversa (es: "anna", "otto").

**Esempio**:
isPalindroma("radar"); // Output: true
isPalindroma("ciao");  // Output: false

## 🧠 Esercizio 3: Rimuovi i duplicati da un array
Scrivi una funzione rimuoviDuplicati($array) che riceve un array e restituisce un nuovo array con tutti i duplicati rimossi, mantenendo l’ordine originale.

**Esempio**:
rimuoviDuplicati([1, 2, 2, 3, 4, 4, 5]); // Output: [1, 2, 3, 4, 5]

## 🧠 Esercizio 4: Contare vocali in una stringa
Scrivi una funzione contaVocali($stringa) che conta quante vocali ci sono nella stringa (sia maiuscole che minuscole).

**Esempio**:
contaVocali("Ciao mondo"); // Output: 4

## 🧠 Esercizio 5: Trova il numero massimo
Scrivi una funzione trovaMassimo($array) che riceve un array di numeri e restituisce il numero più grande contenuto nell'array.

**Esempio**:
trovaMassimo([3, 9, 2, 15, 6]); // Output: 15

## 🧠 Esercizio 6: Verifica se una parola è presente
Scrivi una funzione contieneParola($frase, $parola) che riceve due stringhe:

$frase: una frase intera
$parola: una parola

e ritorna true se la parola è contenuta nella frase, altrimenti false (ignora maiuscole/minuscole).

**Esempio**:
contieneParola("Il gatto dorme sul divano", "gatto"); // true
contieneParola("Il gatto dorme sul divano", "cane");  // false

## 🧠 Esercizio 7: Somma dei numeri dispari
Scrivi una funzione sommaDispari($array) che prende un array di numeri e restituisce la somma solo dei numeri dispari.

**Esempio**:
sommaDispari([1, 2, 3, 4, 5]); // Output: 9

## 🧠 Esercizio 8: Capitalizza la prima lettera di ogni parola
Scrivi una funzione capitalizza($frase) che prende una stringa e restituisce la frase con la prima lettera di ogni parola in maiuscolo (come un titolo).

**Esempio**:
capitalizza("ciao mondo! oggi è un bel giorno."); 
// Output: "Ciao Mondo! Oggi È Un Bel Giorno."

## 🧠 Esercizio 9: Conta quante volte un numero appare
Scrivi una funzione contaOccorrenze($array, $valore) che conta quante volte $valore appare all’interno dell’array.

**Esempio**:
contaOccorrenze([1, 2, 3, 2, 2, 4], 2); // Output: 3

## 🧠 Esercizio 10: Genera una password casuale
Scrivi una funzione generaPassword($lunghezza) che restituisce una password casuale lunga $lunghezza caratteri, composta da lettere maiuscole, minuscole e numeri.

**Esempio**:
generaPassword(8); // Output: "a9Bd3Xz1" (esempio casuale)

--------------------------------------------------------------------------------------------------------------------------------------------------------------------

## Esercizio 1: Filtrare Numeri Pari
    Data una lista di numeri interi, crea una funzione che restituisca solo i numeri pari.
    $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

**Output Atteso**: [2, 4, 6, 8, 10]

**Suggerimenti**: Utilizza array_filter() per filtrare l'array.
Implementa una funzione anonima o una funzione di callback per determinare se un numero è pari.

## Esercizio 2: Convertire Stringhe in Maiuscolo
    Data una lista di nomi, scrivi una funzione che restituisca tutti i nomi in maiuscolo.
    $nomi = ['anna', 'luca', 'marco'];

**Output Atteso**: ['ANNA', 'LUCA', 'MARCO']

**Suggerimenti**: Utilizza array_map() per applicare una funzione a ogni elemento dell'array.
Usa la funzione strtoupper() per convertire le stringhe in maiuscolo.

## Esercizio 3: Calcolare la Somma degli Elementi
    Data una lista di numeri, scrivi una funzione che calcoli la somma totale degli elementi.
    $numeri = [5, 10, 15];

**Output Atteso**: 30

**Suggerimenti**: Utilizza array_reduce() per accumulare i valori dell'array.
Implementa una funzione che sommi due numeri.

## Esercizio 4: Ordinare un Array Associativo per Valore
    Data una lista di studenti con i loro punteggi, ordina l'array in ordine decrescente di punteggio.
    $studenti = [
        'Anna' => 28,
        'Luca' => 22,
        'Marco' => 30
    ];

**Output Atteso**:
    [
        'Marco' => 30,
        'Anna' => 28,
        'Luca' => 22
    ]

**Suggerimenti**: Utilizza arsort() per ordinare l'array associativo in ordine decrescente mantenendo le chiavi.

## Esercizio 5: Unire Due Array

    Data due liste di elementi, uniscile in un unico array.
    $array1 = ['a', 'b', 'c'];
    $array2 = ['d', 'e'];

**Output Atteso**: ['a', 'b', 'c', 'd', 'e']

**Suggerimenti**: Utilizza array_merge() per unire gli array.

## Esercizio 6: Trovare la Differenza tra Due Array
    Data due liste di numeri, trova gli elementi presenti nel primo array ma non nel secondo.
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [2, 4];

**Output Atteso**: [1, 3, 5]

**Suggerimenti**: Utilizza array_diff() per trovare la differenza tra gli array.

## Esercizio 7: Contare la Frequenza degli Elementi
    Data una lista di elementi, conta quante volte ogni elemento appare nell'array.
    $elementi = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

**Output Atteso**:
    [
        'apple' => 3,
        'banana' => 2,
        'orange' => 1
    ]

**Suggerimenti**: Utilizza array_count_values() per contare le occorrenze di ogni valore.

## Esercizio 8: Accedere a un Array Multidimensionale
    Data una lista di studenti con i loro dettagli, estrai solo i nomi.

    $studenti = [
        ['nome' => 'Anna', 'voto' => 28],
        ['nome' => 'Luca', 'voto' => 22],
        ['nome' => 'Marco', 'voto' => 30]
    ];

**Output Atteso**: ['Anna', 'Luca', 'Marco']

**Suggerimenti**: Utilizza array_column() per estrarre una colonna specifica da un array multidimensionale.

## Esercizio 9: Verificare l'Esistenza di una Chiave in un Array
    Data una lista di prodotti con i loro prezzi, verifica se un determinato prodotto esiste nell'array.

    $prodotti = [
        'penna' => 1.5,
        'matita' => 0.5,
        'gomma' => 0.75
    ];
    $prodotto_da_verificare = 'matita';

**Output Atteso**: true

**Suggerimenti**: Utilizza array_key_exists() per verificare se una chiave esiste in un array.

## Esercizio 10: Convertire un Array in una Stringa
    Data una lista di parole, uniscile in una singola stringa separata da spazi.
    $parole = ['Questo', 'è', 'un', 'test'];

**Output Atteso**: 'Questo è un test'

**Suggerimenti**: Utilizza implode() per unire gli elementi di un array in una stringa.

--------------------------------------------------------------------------------------------------------------------------------------------------------------------
## Esercizio 1: Frequenze Parole
    Data una lista di parole, conta quante volte appare ciascuna parola e restituisci un array associativo del tipo:
        [
        'gatto' => 3,
        'cane' => 1,
        'topo' => 2
        ]

**Input di esempio**: ['gatto', 'cane', 'gatto', 'topo', 'gatto', 'topo']

## Esercizio 2: Nomi da Maiuscolo a Minuscolo
    Data una lista di nomi scritti in maiuscolo, restituisci una nuova lista con tutti i nomi in minuscolo.

**Esempio input**: ['ANNA', 'LUCA', 'MARCO']

## Esercizio 3: Elementi Comuni
    Data due liste di numeri interi, restituisci un nuovo array contenente solo i numeri presenti in entrambi gli array.

**Input di esempio**: [1, 2, 3, 4], [3, 4, 5, 6]
**Output atteso**: [3, 4]

## Esercizio 4: Somma Voti
    Hai una lista di array associativi rappresentanti studenti. Calcola la somma totale dei voti.

**Input di esempio**:
    [
        ['nome' => 'Anna', 'voto' => 26],
        ['nome' => 'Luca', 'voto' => 30],
        ['nome' => 'Marco', 'voto' => 24]
    ]

**Output atteso**: 80

## Esercizio 5: Rimuovere Duplicati
    Data una lista di stringhe, restituisci un array che contiene ogni parola una sola volta, mantenendo l’ordine originale.

**Esempio input**: ['rosso', 'verde', 'rosso', 'blu', 'verde']

**Output atteso**: ['rosso', 'verde', 'blu']

--------------------------------------------------------------------------------------------------------------------------------------------------------------------
## Esercizio 1: Inverti l'array
    Data una lista di numeri, restituisci l’array invertito.
    $numeri = [1, 2, 3, 4];

## Esercizio 2: Somma dei numeri pari
    Data una lista di numeri, restituisci la somma di quelli pari.
    $valori = [1, 4, 6, 7, 10];

## Esercizio 3: Lunghezza delle parole
    Data una lista di parole, restituisci un array con le rispettive lunghezze.
    $parole = ['ciao', 'PHP', 'developer'];

## Esercizio 4: Capitalizza le parole
    Data una lista di parole in minuscolo, restituisci una nuova lista con la prima lettera maiuscola.
    $nomi = ['mario', 'luigi', 'peppe'];

## Esercizio 5: Unione e ordinamento
    Unisci due array e restituisci l’unico array risultante ordinato in ordine crescente.
    $a = [5, 1, 3];
    $b = [4, 2];

## Esercizio 6: Parole più lunghe di 4 caratteri
    Filtra un array di parole e restituisci solo quelle che hanno più di 4 caratteri.
    $input = ['cane', 'gattino', 'albero', 'blu'];

## Esercizio 7: Verifica esistenza chiave
    Data una mappa (array associativo), verifica se esiste la chiave 'email'.
    $utente = ['nome' => 'Anna', 'cognome' => 'Rossi'];

## Esercizio 8: Media dei valori
    Data una lista di numeri, calcola la media aritmetica.
    $numeri = [7, 8, 6, 10];

## Esercizio 9: Frequenza caratteri in una stringa
    Conta quante volte compare ogni carattere in una stringa.
    $stringa = 'banana';

## Esercizio 10: Estrai i nomi da array associativo
    Data una lista di utenti, estrai in un array i soli nomi.
    $utenti = [
        ['nome' => 'Anna', 'eta' => 25],
        ['nome' => 'Marco', 'eta' => 30],
        ['nome' => 'Luca', 'eta' => 28]
    ];
