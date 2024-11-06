package main

import (
	"fmt"
	"math"
)

func main() {
	testCaseAlpha := []int{7, 1, 5, 3, 6, 4}

	dpMaxProfit(testCaseAlpha)
}

func brutalMaxProfit(prices []int) int {
	var max int = 0
	for i := 0; i < len(prices)-1; i++ {
		for j := i + 1; j < len(prices); j++ {
			// fmt.Println(prices[i], prices[j])
			currentProfit := prices[j] - prices[i]
			if currentProfit > max {
				max = currentProfit
			}
		}
	}
	// fmt.Printf("%v", max)
	return max
}

/**
 * Comparing with index
 *
 * Dynamic programming solution
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/discuss/1735550/Python-Javascript-Easy-solution-with-very-clear-Explanation
 */
func dpMaxProfit(prices []int) int {
	i := 0
	j := 1
	max := 0
	for j < len(prices) {
		if prices[j] > prices[i] {
			currentProfit := prices[j] - prices[i]
			if currentProfit > max {
				max = currentProfit
			}
		} else {
			i = j
		}
		j++
	}

	return max
}

// Comparing with value only, not index.
//
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/solutions/1735493/java-c-best-ever-explanation-could-possible
func maxProfitByValue(prices []int) int {
	buy := math.MaxInt
	todayProfit := 0
	maxProfit := 0

	for i := 0; i < len(prices); i++ {
		fmt.Println("------- Day :", i, "-------")
		fmt.Printf("Previous buy (lowest): %v, current price: %v\n", buy, prices[i])
		buy = min(buy, prices[i])
		todayProfit = prices[i] - buy

		fmt.Printf("Today's profit : %v, overall profit: %v\n", todayProfit, maxProfit)
		maxProfit = max(maxProfit, todayProfit)
	}

	return maxProfit
}
