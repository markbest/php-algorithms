<?php

function QuickSort($array){
    $len = count($array);
    if($len <= 1){
        return $array;
    }
    $left = $right = [];
    for($i = 1; $i < $len; $i++){
        if($array[$i] < $array[0]){
            $left[] = $array[$i];
        }else{
            $right[] = $array[$i];
        }
    }

    //递归调用
    $left = QuickSort($left);
    $right = QuickSort($right);
    return array_merge($left, [$array[0]], $right);
}

$array = ['10', '76', '23', '35', '4', '24', '45'];
$sort_array = QuickSort($array);
print_r($sort_array);