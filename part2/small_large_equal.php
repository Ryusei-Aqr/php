<?php

while(1){
 
$values=trim(fgets(STDIN));


if(($values[0]<=1000 && $values[0]>=(-1000)) || ($values[1]<=1000 && values[1]>=(-1000))) break;

}
$values=explode(" ",$values);


if($values[0]<$values[1]){
    echo "a < b";
}else if($values[0]>$values[1]){
    echo "a > b";
}else{
    echo "a == b";
}

echo "\n";
?>