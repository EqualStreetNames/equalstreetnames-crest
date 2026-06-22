<?php

declare(strict_types=1);

return [
    // Relation ID of the OpenstreetMap City
    'relationId' => 84754,

    // Languages in which you want to extract Wiki informations
    'languages' => ['fr'],

    // Exclude datas from beeing extracted. Usefull to exclude streets at the edge of the city for example
    'exclude' => [
        'relation' => [],
        'way' => [
            /*
            15221322, // Half Included street
            */
        ],
    ],

    // Manualy assign gender to ways/relations (when there are no wikidata page for example)
    'gender' => [
        'relation' => [],
        'way' => [
            '484807330' => 'F', // Chemin Berthe Jouvet

            '308144848' => 'M', // Avenue Adrien Fayolle
            '324055896' => 'M', // Avenue Agirond
            '1113439088' => 'M', // Avenue Charles Armorin
            '11826173' => 'M', // Avenue du Docteur Andre Ricateau
            '8020527' => 'M', // Avenue Henri Grand
            '78260451' => 'M', // Chemin du Grand Saint Jean
            '228908519' => 'M', // Chemin du Petit Saint Jean
            '191214277' => 'M', // Chemin Saint Vincent
            '1531340470' => 'M', // Esplanade Edmond Dupraz
            '228979754' => 'M', // Impasse Adrien Fayolle
            '1531195277' => 'M', // Impasse Andre Reynier
            '386767012' => 'M', // Impasse Saint François
            '324055919' => 'M', // Montée Guillaumont
            '37544811' => 'M', // Montée Saint Antoine
            '439155551' => 'M', // Place Albert Argod
            '36398066' => 'M', // Place Antoine Bouvier
            '333837545' => 'M', // Place Jullien
            '36398077' => 'M', // Place Ulysse Bouchet
            '1456208578' => 'M', // Quai André Reynier
            '11826176' => 'M', // Quai Henri Latune
            '78260440' => 'M', // Rue Albert Fié
            '308144833' => 'M', // Rue André Mailhet
            '228908539' => 'M', // Rue Colonel Odon
            '8021705' => 'M', // Rue David Rigaud
            '228908526' => 'M', // Rue des Docteurs Louis et Frédéric Thiers
            '116517676' => 'M', // Rue des Frères Marc et Jean Marie Gamon
            '131472411' => 'M', // Rue Docteur Alcide Maurin
            '36398105' => 'M', // Rue Docteur Scheffer
            '865696089' => 'M', // Rue Driss Chraïbi
            '8021752' => 'M', // Rue Driss Chraïbi
            '116517361' => 'M', // Rue du Général Koenig
            '37544801' => 'M', // Rue du Maréchal Leclerc
            '131472412' => 'M', // Rue du Père Marc Castelan
            '308144850' => 'M', // Rue du Professeur Georges Mouriquand
            '8021758' => 'M', // Rue Edouard Branly
            '37544776' => 'M', // Rue Emile Loubet
            '37545197' => 'M', // Rue Eugène Arnaud
            '228908521' => 'M', // Rue Félix Perrier
            '308144836' => 'M', // Rue François Villon
            '37544815' => 'M', // Rue Général Bovet
            '37545195' => 'M', // Rue Georges Bovet
            '37544804' => 'M', // Rue Gustave André
            '36398104' => 'M', // Rue Gustave Bermond
            '78260447' => 'M', // Rue Gustave Eiffel
            '308144837' => 'M', // Rue Guynemer
            '167062582' => 'M', // Rue Hélie de Saint Marc
            '43233271' => 'M', // Rue Henri Barbusse
            '228908535' => 'M', // Rue Isaac Casaubon
            '167066397' => 'M', // Rue Jacques Prévert
            '308144838' => 'M', // Rue Jean Bouin
            '36398068' => 'M', // Rue Jean Claude Curnier
            '308144839' => 'M', // Rue Jean Cocteau
            '167066398' => 'M', // Rue Jean Giono
            '308144841' => 'M', // Rue Jean Henri Fabre
            '138392711' => 'M', // Rue Jean Jacques Rousseau
            '8020387' => 'M', // Rue Jean Jaurès
            '138392712' => 'M', // Rue Jean Moulin
            '37544803' => 'M', // Rue Jean Rousset
            '36398109' => 'M', // Rue Jean XXIII
            '36398063' => 'M', // Rue Joseph Grivel
            '308144842' => 'M', // Rue Joseph Richard
            '551511655' => 'M', // Rue Justin Brun Durand
            '37544778' => 'M', // Rue Laurent Mognat
            '138392706' => 'M', // Rue Léon Blum
            '260925090' => 'M', // Rue Leopold Bouvat
            '434751957' => 'M', // Rue Lieutenant Michel Prunet
            '308144844' => 'M', // Rue Louis Pasteur
            '36398110' => 'M', // Rue Marcel Pagnol
            '1446514175' => 'M', // Rue Maurice Barral
            '236274679' => 'M', // Rue Maurice Chabrières
            '131471426' => 'M', // Rue Maurice Long
            '37544797' => 'M', // Rue Molière
            '260925618' => 'M', // Rue Pasteur Marc Boegner
            '308144845' => 'M', // Rue Paul Arène
            '557815266' => 'M', // Rue Paul Goy
            '8021753' => 'M', // Rue Paul Pons
            '228979759' => 'M', // Rue Peysson
            '37544779' => 'M', // Rue Pierre Laurent Daly
            '37545196' => 'M', // Rue Roch Grivel
            '131471428' => 'M', // Rue Rochefort
            '318887851' => 'M', // Rue Saint François
            '8168443' => 'M', // Rue Victor Hugo
            '308144846' => 'M', // Rue Victor Schoelcher
            '211096757' => 'M', // Rue Vincent d'Indy
            '116517358' => 'M', // Rue Voltaire
            '308144834' => 'M', // Rue William Booth
        ],
    ],

    // Array that defines what instances of Wikidata are considered "a person". (you can probably leave this as is)
    'instances' => [
        'Q5'        => true,  // human
        'Q2985549'  => true,  // mononymous person
        'Q20643955' => true,  // human biblical figure

        'Q8436'     => false, // family
        'Q101352'   => false, // family name
        'Q327245'   => false, // team
        'Q3046146'  => false, // married couple
        'Q13417114' => false, // noble family
    ],
];
