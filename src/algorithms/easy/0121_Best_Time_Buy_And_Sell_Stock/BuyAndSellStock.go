package main

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
