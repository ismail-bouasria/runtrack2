<?php
$bdd= mysqli_connect('localhost','root','','jour08');

$req= mysqli_query($bdd,"SELECT SUM(capacite) FROM salles");

$res= mysqli_fetch_all($req, MYSQLI_ASSOC);

// var_dump($res);


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
<table>
        <thead>
        <tr>
            <?php
            foreach ($res as $value) {
                foreach ($value as $key => $value) {
                    echo'<th>'.$key = "capacite_totale".'</th>';
                    
              
                }
                break;
            }
            
    ?>
    </tr>
    </thead>
     </tr>
    <tbody>
    
    <?php
     
            foreach ($res as $value) {
                echo "<tr>";
                foreach ($value as $key => $value) {
                    echo' <td>'.$value.'</td>';
                    
              
                }
               echo ' </tr>';
            }
         ?>
       
          
      
    </tbody>
    </table>
</body>
</html>
