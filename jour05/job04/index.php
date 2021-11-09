<?php
function calcule($a,$operation,$b){
if ($operation == "+") {
    return $operation = $a+$b;
}elseif ($operation == "-") {
    return $operation = $a-$b;
}
elseif ($operation == "*") {
    return $operation = $a*$b;
}
elseif ($operation == "/") {
    return $operation = $a/$b;
}


}
echo calcule(5,"/",7);
?>