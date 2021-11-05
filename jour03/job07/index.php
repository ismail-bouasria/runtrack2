<?php

$str = "Certaines choses changent, et d'autres
ne changeront jamais.";
$sav=$str[0]; // sauvegarde de l'index 0 de $str

for ($i=0;isset($str[$i]); $i++){ // on calcule la chaîne de commentaire

if (isset($str[$i+1])) { // si on calcule les caractère avec la condition de +1 sur l'index
    
$str[$i] = $str[$i+1]; // alors $str[$i] est égale à $str[$i+1]
echo $str[$i]; // on affiche donc $str[$i] qui remplace
}
else {
    echo $sav ;
}
}
?>