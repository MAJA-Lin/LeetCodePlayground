package main

import "fmt"

func main() {
	input := "avdaef"

	fmt.Println(lengthOfLongestSubstring(input))
}

// max returns the max of num1 and num2
func max(num1 int, num2 int) int {
	if num1 > num2 {
		return num1
	}
	return num2
}

func lengthOfLongestSubstringInBrutal(s string) int {
	length := len(s)
	result := 0

	if length <= 1 {
		return length
	}

	for left := 0; left < length-1; left++ {
		for right := 0; right < length; right++ {
			charMap := map[uint8]bool{}
			isUnique := true

			for i := left; i <= right; i++ {
				if _, isPresent := charMap[s[i]]; !isPresent {
					charMap[s[i]] = true
					continue
				}

				isUnique = false
				break
			}

			if isUnique {
				result = max(result, right-left+1)
			}
		}

	}

	return result
}

/**
 * Explanation: https://www.code-recipe.com/post/longest-substring-without-repeating-characters
 */
func lengthOfLongestSubstring(s string) int {
	length := len(s)
	result := 0
	// k:v => character and index in the input
	substringMap := map[uint8]int{}
	left := 0

	for right := 0; right < length; right++ {
		duplicatedIndex, isDuplicated := substringMap[s[right]]

		if isDuplicated {
			// Update result without duplicated char
			result = max(result, right-left)

			// Remove all elements before the duplicated index
			for i := left; i < duplicatedIndex; i++ {
				delete(substringMap, s[i])
			}

			left = duplicatedIndex + 1
		}
		// Add char-index map into processing map
		substringMap[s[right]] = right
	}

	result = max(result, length-left)
	return result
}
