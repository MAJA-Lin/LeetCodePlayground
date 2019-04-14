void reverseString(char* s, int sSize) {
    char *forwardPointer, *backwardPointer, temp;

    forwardPointer = s;
    backwardPointer = s + sSize - 1;

    while(forwardPointer < backwardPointer)
    {
        temp = *forwardPointer;
        *forwardPointer = *backwardPointer;
        *backwardPointer = temp;

        forwardPointer++;
        backwardPointer--;
    }

    return s;
}