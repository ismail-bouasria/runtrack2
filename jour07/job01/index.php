<?php

session_start();
if (isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"]++;
    
}else {
    $_SESSION["nbvisites"] = 0;
}
echo $_SESSION["nbvisites"];

if (isset($_POST["reset"])) {
    unset( $_SESSION["nbvisites"]);
    
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
        <input type="submit" name="reset" value="reset">
    </form>
    
</body>
</html>