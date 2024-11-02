package main

import (
	"errors"
	"fmt"
	"testing"

	"github.com/stretchr/testify/assert"
)

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

func main() {
	input := "}{()[]{}"

	fmt.Println(isValid(input))
}

func TestIsValid(t *testing.T) {
	input := "()[]{}"
	assert.Equal(t, true, isValid(input))

}
