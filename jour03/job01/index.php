<?php
$array = [200,204,173,98,171,404,459];

foreach ($array as $key => $value) {
    // echo $value;
    if ($value %2 == 0) {
        echo $value; // affiche seulement les nombres paires.
    }
   elseif ($value %2 != 0) { // affiche seulement les nombres impaires.
echo $value;   }
}

?>