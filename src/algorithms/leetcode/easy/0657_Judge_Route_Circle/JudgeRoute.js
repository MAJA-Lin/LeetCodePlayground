/**
 * @param {string} moves
 * @return {boolean}
 */
var judgeCircle = function (moves) {
    let upDown = 0;
    let leftRight = 0;

    for (let i = 0; i < moves.length; i++) {
        switch (moves[i]) {
            case 'U':
                upDown++;
                break;
            case 'D':
                upDown--;
                break;
            case 'L':
                leftRight++;
                break;
            case 'R':
                leftRight--;
                break;

            default:
                break;
        }
    }

    return (upDown == 0 && leftRight == 0);
};