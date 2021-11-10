<?php
if (isset($_POST["reset"])) {
    unset($_COOKIE["nbvisites"]);
    setcookie("nbvisites");
    header("Location: index.php");
}

if (isset($_COOKIE["nbvisites"])) {
    $compteur=$_COOKIE["nbvisites"]+1; // $compteur égale à $cookie +1.
    setcookie("nbvisites",$compteur);
   
}else {
    $compteur=0;
    setcookie("nbvisites",$compteur);
  
}
echo $_COOKIE["nbvisites"];

   


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
        <input type="submit" name="reset" value="reset">
    </form>
    
</body>
</html>