int strStr(char* haystack, char* needle) {
    if (needle[0] == '\0') {
        return 0;
    }

    int lengthH = strlen(haystack);
    int lengthN = strlen(needle);

    for (int i = 0; i < lengthH; i++) {
        bool skip = false;
        if (haystack[i] == needle[0] && (lengthH - i) >= lengthN) {
            for(int j = 1; j < lengthN; j++) {
                // printf("haystack: %c; needle: %c\n", haystack[i+j], needle[j]);
                // printf("Same: %d\n", (haystack[i + j] != needle[j]));
                if (haystack[i + j] != needle[j]) {
                    // printf("Break?\n");
                    skip = true;
                    break;
                }
            }

            if (skip == false) {
                return i;
            }
        }
    }

    return -1;
}
