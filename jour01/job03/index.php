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

// Tableau
echo '
<table>
  <thead>
   <tr>
         <th>' .$h2. '</th>
      </td>
          <th>'.$h1. '</th>
          <th>'.$h3. '</th>
      
    </tr>
 </thead>
 <tr>
 <td>
 '.$n1.'
 </td>
 <td>
 '.$t1.'
 </td>
 <td>
 '.$v1.'
 </td>
  </tr>
  <tr>
  <td>
  '.$n2.'
  </td>
  <td>
  '.$t2.'
  </td>
  <td>
  '.$v2.'
  </td>
   </tr>
   <tr>
   <td>
   '.$n3.'
   </td>
   <td>
   '.$t3.'
   </td>
   <td>
   '.$v3.'
   </td>
    </tr>
    <tr>
    <td>
    '.$n4.'
    </td>
    <td>
    '.$t4.'
    </td>
    <td>
     true ='.$v4.' et false= rien ne s\'affiche
    </td>
     </tr>
     <tr>
     <td>
     '.$n5.'
     </td>
     <td>
     '.$t5.'
     </td>
     <td>
     '.$v5. 'rien ne s\'affiche
     </td>
      </tr>
</table> ';
?>

