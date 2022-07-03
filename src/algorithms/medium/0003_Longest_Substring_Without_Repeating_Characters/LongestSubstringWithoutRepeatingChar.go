package main

import "fmt"

func main() {
	input := "au"

	fmt.Println(lengthOfLongestSubstring(input))
}

func lengthOfLongestSubstring(s string) int {
	result := map[rune]int{}
	lookMap := map[rune]int{}

	for pos, char := range s {
		// Initialize result with first element
		if len(result) <= 0 {
			lookMap[char] = pos
			result = lookMap
		}

		if _, isPresent := lookMap[char]; !isPresent {
			lookMap[char] = pos
		} else {
			// Empty the temp map and reassign elements
			lookMap = map[rune]int{}
			lookMap[char] = pos
		}

		if len(result) <= len(lookMap) {
			result = lookMap
		}

		// fmt.Println("Result is: ", result)
		// fmt.Println("Tmp is: ", lookMap)
	}

	// fmt.Println(result)
	return len(result)
}
