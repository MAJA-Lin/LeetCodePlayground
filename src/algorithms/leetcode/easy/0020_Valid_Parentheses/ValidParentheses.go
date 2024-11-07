package main

import (
	"errors"
	"fmt"
)

func main() {
	input := "([{{()}}])"

	fmt.Println(isValid(input))
}

// Submit at 2022
func isValidWithRuneSlice(s string) bool {
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

// Submission with full stack struct and funcs
type stack struct {
	Body []rune
}

func (s *stack) Push(input rune) *stack {
	s.Body = append(s.Body, input)
	return s
}

func (s *stack) Pop() (output rune, err error) {
	l := len(s.Body)
	if l == 0 {
		return output, errors.New("Empty stack")
	}

	output = s.Body[l-1]
	s.Body = s.Body[:l-1]
	return output, nil
}

func (s *stack) Peek() (lastElement rune) {
	return s.Body[len(s.Body)-1]
}

func isValid(s string) bool {
	pMap := map[rune]rune{
		'{': '}',
		'[': ']',
		'(': ')',
	}

	// Length should not be odd
	if len(s)%2 == 1 {
		return false
	}

	// Init stack
	stk := stack{}
	for _, v := range s {
		fmt.Printf("Current symbol: %v; stack is : %v\n", string(v), stk)
		if _, ok := pMap[v]; ok {
			stk.Push(v)
			continue
		}

		if len(stk.Body) == 0 || pMap[stk.Peek()] != v {
			return false
		}

		// Remove the matching element from Stack
		if _, err := stk.Pop(); err != nil {
			return false
		}
	}

	return len(stk.Body) == 0
}
