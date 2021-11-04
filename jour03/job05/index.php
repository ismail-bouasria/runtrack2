<?php

$str = "On n'est pas le meilleur quand
on le croit mais quand on le sait";

$nbvoy= 0;
$nbcon= 0;
$dico = [
   'voyelles'=>  ['a','e','i','o','O','u','y'],
    'consonnes'=> ['b','c','d','f','j','k','l','m','n','p','q','r','s','t','v','w','x','z'],];

for ($i=0; isset($str[$i]); $i++) { 
   foreach ($dico["voyelles"] as $element) {
       if ($str[$i] == $element) {
           
           $nbvoy++;    
       }
    }
      foreach ($dico['consonnes'] as $element2) {
          if ($str[$i] == $element2) {
           $nbcon++;
          }
      
      }
      
}
echo $nbvoy."<br/>";
echo $nbcon."<br/>";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
    <thead>
        <th> Voyelles</th>
        <th> Consonnes</th>
    </thead>
    <tr><td> <?php echo $nbvoy ?> </td><td><?php echo $nbcon ?></td></tr>
    </table>
    
</body>
</html>