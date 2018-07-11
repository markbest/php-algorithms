<?php

function BubbleSort_0($array){
    $len = count($array);
    for($i = 0; $i < $len; $i++){
        for($j = $len - 1; $j > $i; $j--){
            if($array[$j] < $array[$j-1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $tmp;
            }
        }
    }
    return $array;
}

function BubbleSort_1($array){
    $len = count($array);
    for($i = 0; $i < $len - 1; $i++){
        for($j = 0; $j < $len - 1 - $i; $j++){
            if($array[$j] > $array[$j+1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $tmp;
            }
        }
    }
    return $array;
}

$array = ['10', '76', '23', '35', '4', '24', '45'];
$sort_array_0 = BubbleSort_0($array);
$sort_array_1 = BubbleSort_1($array);
print_r($sort_array_0);
print_r($sort_array_1);