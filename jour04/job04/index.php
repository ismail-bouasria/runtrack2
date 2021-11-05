
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <table  border="2px">
                <thead>
                    <tr>
                        <th> Arguments </th>
                        <th> Valeurs </th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        foreach ($_POST as $key => $value) {
                            echo '
                                <tr>
                                    <td>'. $key.'</td>
                                    <td>'.$value.'</td>
                                </tr>';
                            } 
                    ?>  
                </tbody>
            </table>
<html>
           <form method="post" action="#">
                <input type=text name="nom" value=identifiant><br>
                <input type=password name="mot de passe" value=password><br>
                <input type=submit name="submit" value=Ok>
           </form>
        </html>