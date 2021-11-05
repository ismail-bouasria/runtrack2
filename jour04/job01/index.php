<?php

$compt = 0;
var_dump($_GET);
foreach ($_GET as $value) {
 {
        $compt++;}
}
echo $compt;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
<input type="text" name= "username"  >
<input type="text" name= "Password">

<input type="submit" value="S'enregistrer">
    </form>
    
</body>
</html>