<?php

$str = "Les choses que l'on
possede finissent par nous posseder.";

// calcule de la longueur de chaine de caractère
for ($i=0; isset($str[$i]); $i++);
$lenght = $i; // définir  la valeur de la longeur de chaine de caractère grâce à $i.

for ($i= ($lenght-1);$i >=0 ; $i--) { // permet d'exécuter les caractères dans l'odre inversé !
    echo $str[$i];
}

?>