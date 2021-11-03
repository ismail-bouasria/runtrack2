<?php

for ($i=0; $i <=100 ; $i++) { 
    if ($i<=20) {
      echo '<i>'.$i.'</i>';
       echo "<br/>";
      } 
elseif ($i>=25 && $i<=50 && $i!=42) {
    echo'<u>'.$i.'</u>';
    echo "<br/>";
}
elseif ($i==42) {
    echo "La Plateforme";
    echo "<br/>";
}
else {
    echo $i;
    echo "<br/>";
}
}
?>