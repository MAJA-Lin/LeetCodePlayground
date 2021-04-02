package main

import "fmt"

func main() {
	nums := []int{2, 7, 11, 15}
	target := 13

	fmt.Println(twoSum(nums, target))
}

func twoSum(nums []int, target int) []int {
	length := len(nums)
	for i := 0; i < length; i++ {
		for j := i + 1; j < length; j++ {
			if (nums[i] + nums[j]) == target {
				return []int{i, j}
			}
		}
	}

	return []int{0, 1}
}
