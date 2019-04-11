/**
 * @param {number[][]} matrix
 * @return {number[]}
 */
var findDiagonalOrder = function(matrix) {
    const m = matrix.length;

    if (m == 0) {
        return [];
    }

    const n = matrix[0].length;
    let result = [];

    if (m * n > 10000) {
        return [];
    }

    for (let diagonal = 0; diagonal <= (m + n - 2); diagonal++) {
        for (let i = 0; i <= diagonal; i++) {
            let x = i;
            let y = diagonal - i;
            let tmp = 0;

            if (diagonal % 2 == 0) {
                tmp = x;
                x = y;
                y = tmp;
            }

            if (x >= m || y >= n) {
                continue;
            }

            result.push(matrix[x][y]);
        }

    }

    return result;
};