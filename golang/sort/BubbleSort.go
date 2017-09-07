package main

import "fmt"

func BubbleSort_0(array []int) []int {
	total := len(array)
	for i := 0; i < total; i++ {
		for j := total - 1; j > i; j-- {
			if array[j] < array[j-1] {
				tmp := array[j]
				array[j] = array[j-1]
				array[j-1] = tmp
			}
		}
	}
	return array
}

func BubbleSort_1(array []int) []int {
	total := len(array)
	for i := 0; i < total-1; i++ {
		for j := 0; j < total-1-i; j++ {
			if array[j] > array[j+1] {
				tmp := array[j+1]
				array[j+1] = array[j]
				array[j] = tmp
			}
		}
	}
	return array
}

func main() {
	array := []int{10, 76, 23, 35, 4, 24, 45}
	sort_array := BubbleSort_0(array)
	sort_array1 := BubbleSort_1(array)
	fmt.Println(sort_array)
	fmt.Println(sort_array1)
}
