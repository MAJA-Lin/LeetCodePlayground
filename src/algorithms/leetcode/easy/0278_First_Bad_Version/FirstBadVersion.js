/**
 * Definition for isBadVersion()
 *
 * @param {integer} version number
 * @return {boolean} whether the version is bad
 * isBadVersion = function(version) {
 *     ...
 * };
 */

/**
 * Linear search
 *
 * @param {function} isBadVersion()
 * @return {function}
 */
var linearSearchSolution = function(isBadVersion) {
    /**
     * @param {integer} n Total versions
     * @return {integer} The first bad version
     */
    return function(n) {
        for (let i = 1; i <= n; i++) {
            if (isBadVersion(i)) {
                return i;
            }
        }
    };
};

/**
 * Binary search
 *
 * @param {function} isBadVersion()
 * @return {function}
 */
var solution = function(isBadVersion) {
    /**
     * @param {integer} n Total versions
     * @return {integer} The first bad version
     */
    return function(n) {
        // Edge case
        if (isBadVersion(1)) {
            return 1;
        }

        let left = 1;
        let right = n;
        let index = 0;

        while (left < right) {
            // left + ((right - left) / 2) => can avoid overflow problem
            index = Math.ceil(left + ((right - left) / 2));
            // console.log("Index", index)
            // console.log("L:", left, "R: ", right)

            if (isBadVersion(left) == false && isBadVersion(index) == false) {
                left = index;
                continue;
            }

            if (isBadVersion(left) == false && isBadVersion(index) == true) {
                if (left == (index - 1)) {
                    return index;
                }
                right = index;
                continue;
            }
        }
    };
};