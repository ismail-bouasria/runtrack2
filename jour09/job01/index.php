<?php
$bdd= mysqli_connect('localhost','root','','jour08');

$req= mysqli_query($bdd,"SELECT * FROM etudiants");

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
    
    <th>prenom</th>
     <th> nom</th>
     <th>naissance</th>
     <th>sexe</th>
     <th>email</th>
    </thead>
    <tbody>
    <?php
     foreach ($res as $value) {
    echo '
       <tr>
          <td>'.$value['prenom'].'<br/> </td>
          <td>'.$value['nom'].'<br/></td>
          <td>'.$value['naissance'].'<br/></td>
          <td>'.$value['sexe'].'<br/></td>
          <td>'.$value['email'].'</td>
       </tr>'; }?>
    </tbody>
    </table>
  <!-- OU -->
    <table>
        <thead>
        <tr>
            <?php
            foreach ($res as $value) {
                foreach ($value as $key => $value) {
                    echo'<th>'.$key.'</th>';
                    
              
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