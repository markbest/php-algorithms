<?php

function SelectSort($array){
    $len = count($array);
    for($i = 0; $i < $len - 1; $i++){
        //最小值
        $min = $array[$i];
        //最小值对应的key
        $minKey = $i;

        for($j = $i + 1; $j < $len; $j++){
            if($min > $array[$j]){
                $min = $array[$j];
                $minKey = $j;
            }
        }
        $tmp = $array[$i];
        $array[$i] = $array[$minKey];
        $array[$minKey] = $tmp;
    }
    return $array;
}

$array = ['10', '76', '23', '35', '4', '24', '45'];
$sort_array = SelectSort($array);
print_r($sort_array);