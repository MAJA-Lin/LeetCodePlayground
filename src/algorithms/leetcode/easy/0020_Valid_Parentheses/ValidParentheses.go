package main

import "fmt"

func main() {
	input := "([{{()}}])"

	fmt.Println(isValid(input))
}

func isValid(s string) bool {
	charMap := map[rune]rune{
		')': '(',
		'}': '{',
		']': '[',
	}

	// length := len(s)
	// if length%2 != 0 {
	// 	return false
	// }

	// Init stack with EOL capacity
	stack := make([]rune, 0, 1)
	for _, value := range s {
		switch value {
		case '(', '{', '[':
			// Stack push
			stack = append(stack, value)
		case ')', '}', ']':
			length := len(stack)
			if len(stack) == 0 || stack[length-1] != charMap[value] {
				return false
			}
			// Stack pop
			stack = stack[:length-1]
		}
		// fmt.Printf("Current char: %v\n", string(value))
		// fmt.Println(stack)
	}

	return len(stack) == 0
}
