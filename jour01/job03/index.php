<?php
// Header
$h1 = "type";
$h2 = "nom";
$h3 = "valeur";

// Nom
$n1 = "Chaîne de caractères";
$n2 = "Nombre entiers";
$n3 = " Nombres décimaux";
$n4 = " Booléens";
$n5 = "Rien";

// Type
$t1 = "string";
$t2 = "int";
$t3 = "float";
$t4 = "bool";
$t5 = "NULL";

// Valeur
$v1 = "'Mathieu'";
$v2 = 3;
$v3 = 14.738;
$v4 = true;
$v5 = null;

// // Tableau
// echo '
// <table border = "1px" width ="50%">
//   <thead>
//    <tr>
//          <th>' .$h2. '</th>
//       </td>
//           <th>'.$h1. '</th>
//           <th>'.$h3. '</th>
      
//     </tr>
//  </thead>
//  <tr>
//  <td>
//  '.$n1.'
//  </td>
//  <td>
//  '.$t1.'
//  </td>
//  <td>
//  '.$v1.'
//  </td>
//   </tr>
//   <tr>
//   <td>
//   '.$n2.'
//   </td>
//   <td>
//   '.$t2.'
//   </td>
//   <td>
//   '.$v2.'
//   </td>
//    </tr>
//    <tr>
//    <td>
//    '.$n3.'
//    </td>
//    <td>
//    '.$t3.'
//    </td>
//    <td>
//    '.$v3.'
//    </td>
//     </tr>
//     <tr>
//     <td>
//     '.$n4.'
//     </td>
//     <td>
//     '.$t4.'
//     </td>
//     <td>
//      true ='.$v4.' et false= rien ne s\'affiche
//     </td>
//      </tr>
//      <tr>
//      <td>
//      '.$n5.'
//      </td>
//      <td>
//      '.$t5.'
//      </td>
//      <td>
//      '.$v5. 'rien ne s\'affiche
//      </td>
//       </tr>
// </table> ';
// ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<!-- Tableau n°2 -->
<body>
    <section>
        <!-- zone CSS -->
        <style>
            .custabl{
               background-color : #DEE7E7;
               text-align: center;
               width:60%;
               font-size: x-large;
               margin: 0% auto;
            }  
            .custabl2{
                border-left: 5px dotted #33848E;
                border-right: 5px dotted #33848E;
              
            }
            .custext{
                background-color : #FBB847;
                font-weight: bolder;
                border-radius: 3%;
                margin : 5% 20% 0% 20%;
            }
            .custext2{
                background-color : #71C5C4;
                font-weight: bolder;
                border-radius: 3%;
                margin : 5% 20% 0% 20%;
            }
            .custext3{
                background-color : #CEBFA5;
                font-weight: bolder;
                border-radius: 3%;
                margin : 5% 20% 0% 20%;
            }
            .custext4{
                background-color : #C7A6CD;
                font-weight: bolder;
                border-radius: 3%;
                margin : 5% 20% 0% 20%;
            }
            .custext5{
                background-color : #F18D74;
                font-weight: bolder;
                border-radius: 3%;
                margin : 5% 20% 0% 20%;
            }
        </style>
    <table class='custabl'>
        <thead >
            <th><?php echo $h2; ?></th>
            <th class='custabl2'><?php echo $h1; ?></th>
            <th><?php echo $h3; ?></th>
        </thead>
        <tr>
        <tr></tr>
            <td> <?php echo $n1; ?></td>
            <td class='custabl2'><div class="custext"><?php  echo $t1;?></div></td>
            <td> <?php echo $v1; ?></td>
        </tr>
        <tr>
            <td><?php echo $n2; ?></td>
            <td class='custabl2'><div class="custext2"><?php  echo $t2;?></div></td>
            <td><?php echo $v2; ?></td>
        </tr>
        <tr>
            <td><?php echo $n3; ?></td>
            <td class='custabl2'><div class="custext3"><?php  echo $t3;?></div></td>
            <td><?php echo $v3; ?></td>
        </tr>
        <tr>
            <td><?php echo $n4; ?></td>
            <td class='custabl2'><div class="custext4"><?php  echo $t4;?></div></td>
            <td><?php echo $v4; ?></td>
        </tr>
        <tr>
            <td><?php echo $n5; ?></td>
            <td class='custabl2'><div class="custext5"><?php  echo $t5;?></div></td>
            <td><?php echo $v5; ?></td>
        </tr>
    </table>
    </section>
</body>
</html>
