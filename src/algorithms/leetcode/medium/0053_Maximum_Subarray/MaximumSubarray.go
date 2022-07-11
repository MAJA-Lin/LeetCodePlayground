package main

import "fmt"

/**
 * https://leetcode.com/problems/maximum-subarray/discuss/1595195/C%2B%2BPython-7-Simple-Solutions-w-Explanation-or-Brute-Force-%2B-DP-%2B-Kadane-%2B-Divide-and-Conquer
 */
func main() {
	input := []int{-2, 1, -3, 4, -1, 2, 1, -5, 4}

	fmt.Println(maxSubArray(input))
}

func maxSubArrayInBrutal(nums []int) int {
	length := len(nums)
	// minimum of int64
	result := -1 << (64 - 1)

	for i := 0; i < length; i++ {
		// Init temp maximum in row with first number in subarray
		currentMax := 0
		for j := i; j < length; j++ {
			currentMax = currentMax + nums[j]
			// fmt.Printf("Index i: %v, Inner: %v\n", i, j)

			if currentMax > result {
				result = currentMax
			}
		}
	}

	return result
}

func max(num1 int, num2 int) int {
	if num1 > num2 {
		return num1
	}

	return num2
}
