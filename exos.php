<?php

//VARIABLES

//exo 1
// $nom = "Iron man";
// echo $nom;

//exo2
// $nom = "SIMPSON";
// $prenom = "Homer";
// $age = 45;
// echo "il s'appelle ".$nom." ".$prenom." et il a ".$age." ans";

//exo3
// $km = 1;
// echo $km;
// $km = 3;
// echo " ".$km;
// $km = 125;
// echo " ".$km;

//exo4
// $string = "vive le php";
// $int = 19;
// $float = 9.9;
// $bool = false;
// echo $string."<br>".$int."<br>".$float."<br>";
// echo $bool ? "true" : "false";

//exo5
// $int = null ;
// echo var_export($int);
// $int = 4;
// echo " ".$int;

//exo6
// $nom = "Yannick";
// echo "Bonjour ".$nom.", <br>comment vas tu?"

//exo7
// $nom = "SIMPSON";
// $prenom = "Lisa";
// $age = 14;
// echo "Bonjour ".$prenom." ".$nom."<br>tu as ".$age." ans";

//exo8
// $int1 = 3+4;
// $int2 = 5*20;
// $int3 = 45/5;
// echo $int1." ".$int2." ".$int3;


//CONDITIONS

//exo1 et 2 
// $age = 5;
// $genre = "femme";
// if ($genre === "femme"){
//      if ($age > 18) {
//     echo "Vous êtes une femme et vous êtes majeure";
//     }else  echo "Vous êtes une femme et vous êtes mineure" ;
// }else if ($genre === "homme") {
//     if ($age > 18) {
//         echo "Vous êtes un homme et vous êtes majeur";
//         }else  echo "Vous êtes un homme et vous êtes mineur" ;
// }

//exo 3
// $mavariable = "femme";
// if ($mavariable === "femme") {
//     echo "c'est une développeuse";
// }else if ($mavariable === "homme") {
//     echo "c'est un développeur";
// }

//exo4
// $monAge = 18;
// if ($monAge >= 18) {
//     echo "Tu es majeur";
// }else echo "Tu n'es pas majeur";

//exo5
// $mavariable = true;
// if ($mavariable === false) {
//     echo "C'est pas bon";
// }else echo "C'est OK";

//exo6
// $maVariable = false;
// if ($maVariable) {
//     echo "c'est ok !!";
// } else {
//     echo "c'est pas bon !!!";
// }


// LES BOUCLES

//exo1
// for ($i= 0; $i <= 10; $i++ ) {
//     echo $i;
// }

//exo2
// $i = 0;
// $j = 50;
// while ($i < 20) {
//     $k = $i*$j;
//     echo $k." ";
//     $i++;
// }

//exo3
// $i = 100;
// $j = 50;
// while ($i > 10) {
//     $k = $i/$j;
//     echo $k." ";
//     $i--;
// }

//exo4
// $i = 1;
// while ($i < 10) {
//     echo $i." ";
//     $i += $i/2;
// }

//exo5
// $message = "On y arrive presque <br>";
// for ($i=1; $i <= 15; $i++) {
//     echo $message;
// }

//exo6
// $message = "C'est presque bon <br>";
// for ($i = 20; $i > 0; $i--) {
//     echo $message;
// }

//exo7
// $message = "On tient le bon bout <br>";
// for ($i=0; $i <= 100; $i += 15) {
//     echo $message;
// }

//exo8
// $message = "enfin <br>";
// for ($i = 200; $i >= 0; $i -= 12) {
//     echo $message;
// }


//LES TABLEAUX

//exo1 2 3 et 4 et 8
// $mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septenbre","Octobre","Novembre","Décembre"];
// foreach ($mois as $nom) {
//     echo $nom."<br>";
// }
// echo "<br> exo 2 : ".$mois[2]."<br>";
// echo "<br> exo 3 : ".$mois[5]."<br>";
// $mois[7] = "Août";
// echo "<br> exo 4 : ".$mois[7]."<br>";

//exo5 6 7 9 et 10
// $chtis = [
//     59 => "Nord",
//     62 => "Pas-de-Calais",
//     80 => "Somme",
//     60 => "Oise",
//     02 => "Aisne"
// ];
// foreach ($chtis as $num=>$chti) {
//     echo $num."-".$chti."<br>";
// }
// echo "<br> exo 6 : ".$chtis[59]."<br>";
// $chtis[51] = "Marne";
// echo "<br> exo 7 et 8 : <br>";
// foreach ($chtis as $num=>$chti) {
//     echo $num."-".$chti."<br>";
// }
// echo "<br> exo 10 :<br>";
// foreach ($chtis as $num=>$chti) {
//     echo "Le département ".$chti." à le numéro ".$num."<br>";
// }

//LES FONCTIONS

//exo 1
// function vrai () {
//     $bool = true;
//     echo $bool ? "true" : "false";
// }
// vrai ();

//exo 2 
// function texte ($string) {
//     return $string;
// }
// echo texte ("Hello WORLD");

//exo 3
// function concat ($string1,$string2) {
//     echo $string1.$string2;
// }
// concat ("Hello"," WORLD") ;

//exo 4
// function compare ($int1,$int2) {
//     if ($int1 > $int2) {
//         echo "Le premier nombre est le plus grand <br>";
//     }else if ($int1 < $int2) {
//         echo "Le deuxième nombre est le plus grand <br>";
//     }else { echo "les deux nombres sont identiques <br>";
//     }
// }
// compare (12,15);
// compare (28,5);
// compare (2,2);

//exo 5 
//  function concat ($int,$string) {
//     echo $int." ".$string;
//  }
//  concat (1,"porte de l'enfer");

//exo6
// function concat ($nom, $prenom, $age) {
//     echo "Bonjour ".$prenom." ".$nom.", tu as ".$age." ans.";
// }
// concat ("SIMPSON", "Bart",16);

//exo7
// function devine ($age,$genre) {
//     if ($age < 18 && $genre === "femme") {
//         echo "Vous êtes une femme et vous êtes mineure.<br>";
// }else if ($age >= 18 && $genre === "femme") {
//         echo "Vous êtes une femme et vous êtes majeure. <br>";
// }else if ($age < 18 && $genre === "homme") {
//         echo "Vous êtes un homme et vous êtes mineur<br>";
// }else {
//     echo "Vous êtes un homme et vous êtes majeur<br>";
// }
// }
// devine (15,"femme");
// devine (25,"femme");
// devine (14,"homme");
// devine (86,"homme");

//exo8
// function somme ( $int1=1, $int2=2, $int3=3 ) {
    
//     echo $int1 + $int2 + $int3."<br>";
// }
// somme (5,5,5);
// somme (25,25,25);