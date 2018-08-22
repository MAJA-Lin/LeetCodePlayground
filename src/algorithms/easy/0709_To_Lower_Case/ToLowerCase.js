/**
 * @param {string} str
 * @return {string}
 */
var toLowerCase = function (str) {
    const UPPER_A = 65;
    const UPPER_Z = 90;
    let result = str.split('');

    for (let i = 0; i < str.length; i++) {
        let ascii = str.charCodeAt(i)
        if (ascii >= UPPER_A && ascii <= UPPER_Z) {
            result[i] = String.fromCharCode(ascii + 32)
        }
    }
    result = result.join('');

    return result;
};