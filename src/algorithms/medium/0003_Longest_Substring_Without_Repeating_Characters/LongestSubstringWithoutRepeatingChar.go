package main

import "fmt"

func main() {
	input := "abcdafgpo"

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

func lengthOfLongestSubstring(s string) int {
	length := len(s)
	result := 0
	// substrMap := map[rune]int{}
	// left := 0
	// right := 0

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
