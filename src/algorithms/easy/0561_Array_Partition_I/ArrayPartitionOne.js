/**
 * @param {number[]} nums
 * @return {number}
 */
var arrayPairSum = function(nums) {
    return nums
        .sort(function (a, b) {
            return a - b;
        })
        .reduce(function (sum, current, i) {
            if (i % 2 == 0) {
                sum = sum + current;
            }

            return sum;
        });
};