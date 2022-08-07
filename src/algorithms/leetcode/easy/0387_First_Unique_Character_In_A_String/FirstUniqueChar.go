package main

import "fmt"

func main() {
	input := "mewbaeccsmfg"

	fmt.Println(firstUniqCharOptimized(input))
}

/**
 * Hashmap solution
 * Check https://leetcode.com/problems/first-unique-character-in-a-string/discuss/337965/Go-O(n)-Hashmap-with-explanation
 */
func firstUniqChar(s string) int {
	result := make(map[byte]int)
	length := len(s)

	// Add character count into hashmap (e.g.: result[a] = 2)
	for i := 0; i < length; i++ {
		result[s[i]]++
	}

	// Iterate hashmap again to find out char that only appeared once
	for i := 0; i < length; i++ {
		if result[s[i]] == 1 {
			return i
		}
	}

	return -1
}

/**
 * Revised solution: https://leetcode.com/problems/first-unique-character-in-a-string/discuss/86418/Golang-concise-solution
 */
func firstUniqCharOptimized(s string) int {
	// Create an array with known size ([a-z] in lower case) and initiate it
	flags := make([]int, 26)
	for i := range flags {
		flags[i] = -1
	}
	slen := len(s)

	for i, ch := range s {
		// Get index by ASCII calculation
		idx := byte(ch - 'a')
		// Set up index if it's first appearance;
		if flags[idx] == -1 {
			flags[idx] = i
		} else {
			flags[idx] = slen
		}
	}

	min := slen
	for i := range flags {
		if flags[i] >= 0 && flags[i] < len(s) && flags[i] < min {
			min = flags[i]
		}
	}

	if min == slen {
		return -1
	}
	return min
}
