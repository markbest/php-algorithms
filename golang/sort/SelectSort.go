package main

import "fmt"

func SelectSort(array []int) []int {
	var tmp, min, minKey int
	total := len(array)
	for i := 0; i < total-1; i++ {
		//最小值
		min = array[i]
		//最小值对应的key
		minKey = i

		for j := i + 1; j < total; j++ {
			if min > array[j] {
				min = array[j]
				minKey = j
			}
		}

		tmp = array[i]
		array[i] = array[minKey]
		array[minKey] = tmp
	}
	return array
}

func main() {
	array := []int{10, 76, 23, 35, 4, 24, 45}
	sort_array := SelectSort(array)
	fmt.Println(sort_array)
}
