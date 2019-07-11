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

//$classe =[
    //[
        //'nom' => 'Anis',
        //'prenom' => 'idren',
      //  'notes' => [10, 12, 14]

    //],
    //[
        //'nom' => 'Raju',
      //  'prenom' => 'Kumar',
    //    'notes' => [22, 12, 22]

  //  ],
//];
//echo $classe[1]['notes'][1];



// Les conditions
/*
$note = (int)readline('Entre ta note la tu crois quoi');
if($note >=10){
    echo 'YUHOUUU TU AS LA MOYENNE ';

}  elseif ($note== 10){
    echo 'TU AS PEINE LA MOYENNE JUSTE';
}
 else{
    echo 'A MERDE UNE PROCHAINE FOIS ';
}
*/


// Exemple 1 pas forcement le meilleur

/*
$action = (int)readline('Entre ta note la tu crois quoi : (1: attaquer, 2: defendre, 3: passer mon tour)');
if($action === 1){
    echo 'attaque ';

}  elseif ($action=== 2){

    echo 'defense';

}  elseif ($action === 3){

    echo 'operation non recconue';
}
else{
    echo 'A MERDE tu as ecrit quoi ';
}
*/

// Exemple 2 le plus souvent utilisé


/*
$action = (int)readline('Entre ta note la tu crois quoi : (1: attaquer, 2: defendre, 3: passer mon tour)');

switch ($action){
    case 1:
        echo 'j\attaque';
        break;
    case 2:
        echo 'je defends';
        break;
    case 3:
        echo 'walou';
        break;
    default:
        echo 'heinnn';
}
*/


$heure = (int)readline('entrez une heure :');
if ((8<= $heure && $heure <= 12) || (14 <= $heure && $heure <= 18)){
    echo 'le magasin est ouvert';
} else {
    echo 'le magasin est fermé';
}

/*
Vrai  && vrai = vrai
Vrai  && faux = faux
faux  && vrai = faux


Vrai  || vrai = vrai
Vrai  || faux = vrai
faux  || vrai = faux


// pour inverser une condition point !








