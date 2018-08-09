/**
 * @param {string} J
 * @param {string} S
 * @return {number}
 */
var numJewelsInStones = function (J, S) {
    let jewel = [];
    let jewelCount = 0;

    for (var i = 0; i < J.length; i++) {
        jewel.push(J.charCodeAt(i));
    }

    for (var j = 0; j < S.length; j++) {
        if (jewel.includes(S.charCodeAt(j))) {
            jewelCount++;
        }
    }

    return jewelCount;
};
