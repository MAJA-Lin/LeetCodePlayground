/**
 * @param {number[][]} A
 * @return {number[][]}
 */
var flipAndInvertImage = function (A) {
    for (let key in A) {
        if (A.hasOwnProperty(key)) {
            A[key] = A[key].reverse().map(function (item) {
                return (!item) | 0;
            });
        }
    }

    return A;
};