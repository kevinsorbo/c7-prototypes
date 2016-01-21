//Feature Set 1
function myMessage()
{
    console.log("My first function!");
}

function add(x,y){
    var z = x+y;
    console.log(z)
}
// Feature Set 2

function add2(num1,num2)
{
    var total = num1 + num2;
    return total;
}
var add2result = add2(9,23);

// Feature Set 3
function cardFlip(param)
{
    $(param).hide();
}