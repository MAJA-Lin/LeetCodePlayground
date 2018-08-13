/**
 * @param {number} x
 * @param {number} y
 * @return {number}
 */
var hammingDistance = function (x, y) {
    let result = 0;
    let xorResult = x ^ y;

    let dec2bin = function (dec) {
        return (dec >>> 0).toString(2);
    }

    let binaryXorResult = dec2bin(xorResult);

    for (let i = 0; i < binaryXorResult.length; i++) {
        if (binaryXorResult.charAt(i) == 1) {
            result++;
        }
    }
    return result;
};
