<?php

$values=trim(fgets(STDIN));

$values=explode(" ",$values);


while(1){
    if($values[0]<$values[1]){
        if($values[1]<$values[2]){
        break;
        }
        elseif($values[1]>$values[2]){
            $temp=$values[2];
            $values[2]=$values[1];
            $values[1]=$temp;
        }
    }elseif($values[1]>$values[2]){

    }
}

function change($a,$b){
    
    $temp=$a;
    $b=$a;
    $a=$temp;

}

echo $values[0]," ",$values[1]," ",$values[2],"\n";
?>