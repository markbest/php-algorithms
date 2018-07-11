<?php

function InsertSort($array){
    $len = count($array);
    for($i = 1; $i < $len; $i++){
        //当前值
        $key = $array[$i];
        //当前位置
        $pos = $i;

        while($pos > 0 && $array[$pos-1] > $key){
            $array[$pos] = $array[$pos-1];
            $pos = $pos -1;
        }
        $array[$pos] = $key;
    }
    return $array;
}

$array = ['76', '10', '23', '35', '4', '24', '45'];
$sort_array = InsertSort($array);
print_r($sort_array);