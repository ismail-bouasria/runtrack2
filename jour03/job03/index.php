<?php

$str= "I'm sorry Dave I'm afraid I can't
do that";

for ($i=0; isset($str[$i]); $i++) { 
    if ($str[$i]== "I"||$str[$i]== "i"||$str[$i]== "a"||$str[$i]== "e"||$str[$i]== "o"||$str[$i]== "y") {
       echo$str[$i];
    }
}


?>