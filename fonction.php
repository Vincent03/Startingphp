<?php
// EXO 1
function truetrue(){
        echo true."</br>";
}
truetrue();
// EXO 2
function chaine($string){
        return $string."</br>";
}
echo chaine("bonjour");

// EXO 3
    function double_chaine($string1, $string2){
        return $string1 ." ". $string2 ."</br>";
   }
echo double_chaine('Phrase 1','Phrase 2');


 // EXO 4
    function nombres($n1, $n2){
        if($n1 == $n2){
            echo "Les deux nombres sont identiques.</br>";
        }else if($n1 >= $n2){
            echo "Le premier nombre est plus grand.</br>";
        }else if($n1 <= $n2){
            echo "Le premier nombre est plus petit.</br>";
        }
    }
nombres(23, 30);

// EXO 5 

 function nombre_et_string($nombre, $phrase){
        return $nombre ." ". $phrase ."</br>";
    }
echo nombre_et_string(22, "je veux manger");

// EXO 6 //

function npa($nom,$prenom,$age){
	return "bonjour".$nom.$prenom."tu as ".$age."ans";
}