<?php
for ($i=0; $i <=1000 ; $i++) { 
  $div = 0;
  for ($j=1; $j <=$i ; $j++) { 
    if ($i%$j==0) {
      $div++;
    }
  }
  if ($div==2) {
    echo $i."<br/>";
  }
}

?>