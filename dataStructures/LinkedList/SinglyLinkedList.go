package main

import "fmt"

type Node struct {
	Next  *Node
	Value interface{}
}

type SinglyLinkedList struct {
	head *Node
	tail *Node
}

func New() *SinglyLinkedList {
	return new(SinglyLinkedList)
}

func NewNode(val interface{}) *Node {
	n := new(Node)
	n.Value = val

	return n
}

func (l *SinglyLinkedList) Head() *Node {
	return l.head
}

func (l *SinglyLinkedList) Append(n *Node) {
	if l.head == nil {
		l.head = n
		l.tail = n
		return
	}

	l.tail.Next = n
	l.tail = n
}

func (l *SinglyLinkedList) PrintAllNodes() {
	for current := l.Head(); current != nil; current = current.Next {
		fmt.Printf("%v -> ", current.Value)
	}
}

func main() {
	list := New()
	list.Append(NewNode("27"))
	list.Append(NewNode("92"))
	list.Append(NewNode("44"))
	list.Append(NewNode("7"))
	list.Append(NewNode("-15"))
	list.PrintAllNodes()
}
