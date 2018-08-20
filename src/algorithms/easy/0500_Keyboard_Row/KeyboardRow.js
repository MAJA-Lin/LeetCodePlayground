/**
 * @param {string[]} words
 * @return {string[]}
 */
var findWords = function (words) {
    let rows = [
        'qwertyuiop',
        'asdfghjkl',
        'zxcvbnm'
    ];
    let result = [...words];

    for (let wordIndex = words.length -1; wordIndex > -1; wordIndex--) {
        let specificRowIndex = -1;

        // Prevent upper case
        word = words[wordIndex].toLowerCase();

        for (let i = 0; i < rows.length; i++) {
            // Check the first alphabet belongs to which row
            if (rows[i].indexOf(word[0]) !== -1) {
                specificRowIndex = i;
                break;
            }
        }

        for (let i = 0; i < word.length; i++) {
            // console.log(specificRowIndex)
            if (rows[specificRowIndex].indexOf(word[i]) == -1) {
                result.splice(wordIndex, 1);
                break;
            }
        }
    }

    return result;
};