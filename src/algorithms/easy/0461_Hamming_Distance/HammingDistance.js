/**
 * @param {number} x
 * @param {number} y
 * @return {number}
 */
var hammingDistance = function (x, y) {
    let result = 0;
    let binaryX = dec2bin(x);
    let binaryY = dec2bin(y);

    if (binaryX.length > binaryY.length) {
        binaryY = binaryY.padStart(binaryX.length, 0);
    }

    if (binaryX.length < binaryY.length) {
        binaryX = binaryX.padStart(binaryY.length, 0);
    }

    for (let i = 0; i < binaryX.length; i++) {
        if (binaryX.charAt(i) !== binaryY.charAt(i)) {
            result++;
        }
    }

    console.log(binaryY);
    console.log(binaryX);

    return result;
};

/**
 * @param {number} dec
 */
var dec2bin = function(dec) {
    return (dec >>> 0).toString(2);
}