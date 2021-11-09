<?php 
function occurances($str,$char){
    $nbchar = 0;
for ($i=0; isset($str[$i]) ; $i++) { 
    
    if ($str[$i] == $char) {
        $nbchar++;
    }
    
}
return $nbchar;
}

echo occurances("le vent souffle dans la grange","e")


?>