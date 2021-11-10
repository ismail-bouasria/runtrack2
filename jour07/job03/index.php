<?php
session_start();

    if (!isset($_SESSION['prenom'])) {
        $_SESSION["prenom"]="";

    }
    echo $_SESSION["prenom"];
if (isset($_POST['username'])) {
    $_SESSION["prenom"] = $_SESSION["prenom"].$_POST['username']."<br/>";
     }
      
     if (isset($_POST["reset"])) {
        unset($_SESSION['prenom']);
       }

       
    
   
  



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
    <form action="#" method="post">
    Prénom <input type="text" name="username">
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="reset" value="reset">
    </form>
    
</body>
</html>