var txtFile = require('fs');
var fileContents = "";
var output = "";

txtFile.readFile('fb_test.txt', function (err, text) {
    if (err) {
        throw err;
        console.log("error");
    }
    fileContents += txtFile.responseText;
    console.log(fileContents);
    var lines = fileContents.split("\n");

    for (var i=0; i<lines.length; i++) {
        var ln = lines[i].split(" ");
        var a = ln[0];
        var b = ln[1];
        var n = ln[2];
        var count = 0;
        while (count < n) {
            count++;
            if (count%a==0 && count%b==0) {
                output += FB;
            }
            else if (count%a==0) {
                output += F;
            }
            else if (count%b==0) {
                output += B;
            }
            else {
                output += count;
            }
        }
        console.log(output);
        console.log("ok");
    }
});