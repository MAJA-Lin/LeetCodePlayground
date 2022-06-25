package main

func main() {
	testCaseAlpha := []int{7, 1, 5, 3, 6, 4}

	maxProfit(testCaseAlpha)
}

func maxProfit(prices []int) int {
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
