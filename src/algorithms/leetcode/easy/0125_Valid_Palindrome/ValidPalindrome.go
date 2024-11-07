package main

import "fmt"

func main() {
	input := "A man, a plan, a canal: Panama"
	target := true

	fmt.Println("Result: ", isPalindrome(input) == target)
}

// Use simple ASCII calculation
func isPalindrome(s string) bool {
	runeSlice := make([]rune, 0, len(s))
	for _, char := range s {
		if char >= 'A' && char <= 'Z' {
			runeSlice = append(runeSlice, char-'A'+'a')
		} else if char >= 'a' && char <= 'z' {
			runeSlice = append(runeSlice, char)
		} else if char >= '0' && char <= '9' {
			runeSlice = append(runeSlice, char)
		}

		continue
	}

	// fmt.Println(runeSlice)
	// fmt.Printf("Result palindrome: %v\n", string(runeSlice))

	// Start from middle
	l := len(runeSlice)
	if l == 0 {
		return true
	}

	i := l / 2
	// Shift left if length is odd
	if l%2 > 0 {
		i--
	}

	// Got left-right index at the wrong position issue when input is "0P" (length equals to 2)
	// Test case: "0P"
	// print: Index of left [p]: 1, right [0]: 0
	for i >= 0 {
		// fmt.Printf("Index of left [%c]: %v, right [%c]: %v\n", runeSlice[i], i, runeSlice[l-i-1], l-i-1)
		if runeSlice[i] != runeSlice[l-i-1] {
			return false
		}

		i--
		continue
	}

	return true
}
