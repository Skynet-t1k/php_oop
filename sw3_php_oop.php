<?php

// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.
// HINT:
// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.
// Dati i seguenti array:

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta',
    'di',
    ','
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];


$results =
    $words1[6][3][1][1] . " " .         // "Nel"
    $words1[6][3][0] . " " .            // "mezzo"
    $words1[8] . " " .                  // "di"
    $words1[6][3][1][0] . " " .         // "cammin"
    $words1[8] . " " .                  // "di"
    $words2['elemento2'] . " " .        // "nostra"
    $words1[2] . " " .                  // "vita"
    $words1[4] . " " .                  // "mi"
    $words1[6][4] . " " .               // "ritrovai"
    $words1[6][5] . " " .               // "per"
    $words1[6][3][1][2][2][1] . " " .   // "una"
    $words1[6][3][1][2][0] . " " .      // "selva"
    $words1[6][0] . $words1[9] . " " .  // "oscura,"
    $words2['elemento3'][2] . " " .     // "ché"
    $words1[6][3][1][2][1] . " " .      // "la"
    $words1[7] . " " .                  // "diritta"
    $words1[6][3][1][2][2][0] . " " .   // "via"
    $words1[6][1] . " " .               // "era"
    $words2['elemento3'][1] . ".";      // "smarrita."

echo $results;
