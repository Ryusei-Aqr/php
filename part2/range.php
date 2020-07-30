<?php


$values=trim(fgets(STDIN));

$values=explode(" ",$values);

if($values[0]<$values[1]){
    if($values[1]<$values[2]){
        echo "Yes","\n";
    }else{
        echo "No","\n";
    }
}else{
    echo "No","\n";
}


?>