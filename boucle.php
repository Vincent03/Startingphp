<?php
// Exercice 1 //
$boucle = 0;
    echo "Exercice 1 : ";
    while ($boucle < 10){
        echo $boucle." ";
        $boucle++;
    }
// Exercice 2 //
$boucle2 = 0;
$boucle3 = 50;
    echo "<br/>";
    echo "Exercice 2 : ";
    while ( $boucle2 != 20) {
        $boucle4=$boucle2 * $boucle3;
        echo $boucle4." ";
        $boucle2++;
    }
// Exercice 3 //
$boucle5 = 100;
$boucle6 = 50;
    echo "<br/>";
    echo "Exercice 3 : ";
    while ( $boucle5 > 10) {
        $boucle7=$boucle5* $boucle6;
        echo $boucle7." ";
        $boucle5--;
    }
// Exercice 4 //
$boucle8 = 1;
    echo "<br/>";
    echo "Exercice 4 : ";
    while ( $boucle8 < 10) {
        echo $boucle8." ";
        $boucle8= $boucle8 + $boucle8/2;
    }
// Exercice 5 //
$boucle9;
    echo  "<br/>";
    echo "Exercice 5 : ";
    for ($boucle9 = 1; $boucle9 <= 15; $boucle9++) { 
        echo " On y arrive presque ";
    }

// Exercice 6 //
    echo  "<br/>";
    echo "Exercice 6 : ";
    for ($boucle10 = 20; $boucle10 >= 0 ; $boucle10--) { 
        echo " C'est presque bon ";
    }
////////// EXO 7 ////

    for($boucle3=1; $boucle<=100; $boucle+=15){
                echo "On tient le bon bout. ";
}

//// EXO 8 ////////

    for($boucle20=200; $boucle20>=0; $boucle20-=12){
        echo "enfin !!!!";
    }
