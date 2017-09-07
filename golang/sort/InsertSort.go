package main

import "fmt"

func InsertSort(array []int) []int {
	var key, pos int
	total := len(array)
	for i := 0; i < total; i++ {
		//当前值
		key = array[i]
		//当前位置
		pos = i

		for pos > 0 && array[pos-1] > key {
			array[pos] = array[pos-1]
			pos = pos - 1
		}
		array[pos] = key
	}
	return array
}

func main() {
	array := []int{10, 76, 23, 35, 4, 24, 45}
	sort_array := InsertSort(array)
	fmt.Println(sort_array)
}
