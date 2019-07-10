<?php
//les variables en Php permettent de sauvegarder temporairement les valeurs en mémoire
// le signe = lui assigne une valeur




// chaine de caractere ' " pour les additionner on appelle cela de la concatenation
//En faisant une concaténation de ces deux chaînes, nous obtiendrons la chaîne suivante  "J'apprend le PHP".:
//En PHP, la concaténation de chaîne s'effectue grâce au point.

//exemple2.php

//<?php
//$nom = "LA GLOBULE";
//echo 'Bonjour '.$nom.' !';
//"Bonjour LA GLOBULE !".



// Seulement les guillemets double " peuvent interpole les variables "$prenom"
// booléen ce sont des variables qui permettent de savoir ci cela est vrai ou faux true faulse




//

//$prenom = 'marc';
//$nom = 'pis';
//$note1 = 10;
//$note2 = 20;
//$moyenne = (($note1 + $note2) /2) ;
//echo ' bonjour ' . $prenom. ' '  . $nom. ' vous avez eu ' . (($note1 + $note2) /2) . ' de moyenne ';
//echo "bonjour $prenom $nom vous avez eu $moyenne de moyenne";

//

// En php la case commence toujours A 0 donc 0 1 2 etc..

// exemple tableau


//$eleve = [
    //'nom' => 'Anis',
   // 'prenom' => 'IDRENMOUCHE',
   // 'Age' => '20',
   // 'Notes' => [10, 15, 14, 8]
//];
// c'est pour assigner une nouvelle valeur ex que voici $eleve ['prenom'] = 'MOMO';
//echo $eleve['nom'] . ' ' . $eleve['prenom'];
// pour afficher une variable dans un tableau on utilise print_r
//echo $eleve['nom'] . ' ' . $eleve['prenom'];

// exemple de tableau classe d'école

$classe =[
    [
        'nom' => 'Anis',
        'prenom' => 'idren',
        'notes' => [10, 12, 14]

    ],
    [
        'nom' => 'Raju',
        'prenom' => 'Kumar',
        'notes' => [22, 12, 22]

    ],
];
echo $classe[1]['notes'][1];


