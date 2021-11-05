<?php

$str = "Certaines choses changent, et d'autres
ne changeront jamais.";
$sav=$str[0];

for ($i=0;isset($str[$i]); $i++){

if (isset($str[$i+1])) {
    
$str[$i] = $str[$i+1];
echo $str[$i];
}
else {
    echo $sav ;
}
}
?>