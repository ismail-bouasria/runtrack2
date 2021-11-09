<?php

function leetspeak($str) {
$tab = [
    "A"=> 4,
    "a"=> 4,
    "B"=> 8,
    "b"=> 8,
    "e"=> 3,
    "E"=> 3,
    "g"=> 6,
    "G"=> 6,
    "l"=> 1,
    "L"=> 1,
    "S"=> 5,
    "s"=> 5,
    "T"=> 7,
    "t"=> 7,];

for ($i=0; isset($str[$i]); $i++) { 
   foreach ($tab as $key => $value) {
       if ($str[$i] == $key) {
           $str[$i] = $value;
       }
   }
    
}
return $str;
}
 echo leetspeak("leet speak");
?>