var arrayOne = [1,2,3,4,5,6,7,8,9,10,11,12];
var arrayTwo = [1,2,3,4,5,6,7,8,9,10,11,12];
var tableArray = [];

for (i=0; i<arrayOne.length; i++) {
    for (j=0; j<arrayTwo.length; j++) {
        tableArray.push(arrayOne[i] * arrayTwo[j]);
    }
}

var cnt = 0;
while (cnt<tableArray.length) {
    var row = "";
    for (i=0; i<arrayOne.length; i++) {
        if (tableArray[cnt] < 10) {
            row += "   " + tableArray[cnt];
        }
        else if (tableArray[cnt] < 100) {
            row += "  " + tableArray[cnt];
        }
        else {
            row += " " + tableArray[cnt];
        }
        cnt++;
    }
    console.log(row);
}