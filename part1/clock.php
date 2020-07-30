<?php

while(1){
    $time=fgets(STDIN);

    if($time>=0 && $time<86400)break;

}

$hour=floor($time/3600);
$min=floor($time%3600/60);
$sec=($time%60);

echo $hour,":",$min,":",$sec,"\n";

?>