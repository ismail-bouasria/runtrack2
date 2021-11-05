<?php
if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"  ) {
    echo "C'est pas ma guerre";
}
else {
    echo "Votre pire cauchemard";
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
<form method="post" action="#"> <!--J'utilise la methode post qui sécurise les donnée rentrée et ne sont pas affiché dans l'url -->
                <input type=text name="username" value=identifiant><br>
                <input type=password name="password" value=password><br>
                <input type=submit name="submit" value= "S'enregister">
           </form>
    
</body>
</html>