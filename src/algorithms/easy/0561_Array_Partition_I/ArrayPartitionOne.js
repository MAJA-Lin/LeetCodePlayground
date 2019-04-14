/**
 * @param {number[]} nums
 * @return {number}
 */
var arrayPairSum = function(nums) {
    let length = nums.length;
    let sum = 0;
    let tmp = 0;

    for (let i = 0; i < length; i++) {
        for (let j = i + 1; j < length; j++) {
            if (nums[i] > nums[j]) {
                tmp = nums[i];
                nums[i] = nums[j];
                nums[j] = tmp;
            }
        }
    }

    for (i = 0; i < length / 2; i++) {
        sum = sum + nums[2 * i];
    }

    return sum;
};