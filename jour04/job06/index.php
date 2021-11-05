<?php
if ($_GET["nomber"] %2 ==0) {
    echo $_GET["nomber"];
}
elseif ($_GET["nomber"] %2 !=0) {
   echo $_GET["nomber"];
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
<form method="get" action="#"> 
                <input type=nomber name="nomber" value=password><br>
                <input type=submit name="submit" value= "S'enregister">
           </form>
    
</body>
</html>