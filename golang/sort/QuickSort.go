package main

import "fmt"

func QuickSort(array []int) []int {
	total := len(array)
	if total <= 1 {
		return array
	}

	left := make([]int, 0)
	right := make([]int, 0)
	for i := 1; i < total; i++ {
		if array[i] < array[0] {
			left = append(left, array[i])
		} else {
			right = append(right, array[i])
		}
	}

	//递归调用
	left = QuickSort(left)
	right = QuickSort(right)
	return array_merge(left, array[0], right)
}

func array_merge(left []int, key int, right []int) []int {
	result := make([]int, 0)
	for _, l := range left {
		result = append(result, l)
	}
	result = append(result, key)
	for _, r := range right {
		result = append(result, r)
	}
	return result
}

func main() {
	array := []int{10, 76, 23, 35, 4, 24, 45}
	sort_array := QuickSort(array)
	fmt.Println(sort_array)
}
