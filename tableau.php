<?php
// EXO 1 //
$tableau= ["janvier ","fevrier ","mars ","avril ","mai ","juin ","juillet ","aout ","septembre ","octobre ","novembre ","decembre "];
// EXO 2 //
echo $tableau[2];
// EXO 3 //
echo $tableau[5];
// EXO 4 //
echo $tableau[3]= "julien";
// EXO 5 // 
$tab= [
2=>"Aisne",
59=>"Nord",
60=>"Oise",
69=>"Pas-de-Calais ",
80=>"Somme"
	];
// EXO 6 //
echo $tab[59];
// EXO 7 //
$tab[51]="Marne";
// EXO 8 //
foreach ($tableau as $key) {
	echo $key."";
}
// EXO 9 //
foreach ($tab as $key){


	echo $key."";
}
// EXO 10 //

foreach ($tab as $key => $value) {
	echo "le departement".$value."a le numero".$key;
}