//EXERCISE 1
var variable1 = "hello";
var variable2 = 4;
var variable3 = ["foo","bar"];


//EXERCISE 2
var variable1 = 4;
var variable1 = "hello";


//EXERCISE 3
var numbers = [3,5,16,3,4,8];
var result = numbers[0];

for(var i = 0; i < numbers.length; i++){
    result += numbers[i];
}

console.log("Result =" + result);


//EXERCISE 4

console.log("this is a string" + "this is another string");

//EXERCISE 5

var my_float = 3.5;
var my_int = parseInt(my_float);
var my_float2 = 5.3;
var my_int2 = parseInt(my_float2);

//EXERCISE 6

var my_var1 = "Hello";
var my_var2;

if(my_var2){
    console.log(my_var2);
}
else{
    console.log(my_var1);
}


//EXERCISE 7

var check_var = "What time is it?";
switch (check_var){
    case "hello":
        console.log("greetings");
        break;
    case "bye":
        console.log("bye");
        break;
    default:
        console.log("It\'s party time!");
        break;
}


//EXERCISE 8
 var student = {
     name:"skippy",
     class:"English",
     grade:75
 };


//EXERCISE 9
 var student = {};

student.name = "skippy";
student.class = "English";
student.grade = 75;


//EXERCISE 10

var num_array = [35, 2, 14, 56, 65, 52];

function findGreatestNumAndIndex(direction){
    var greatest = null;
    var greatestIndex = null;
    var i;
    var increment;
    var endLoop;

    if(direction >= 0){
        i = 0;
        increment = 1;
        endLoop = num_array.length;
    }
    else{
        i = num_array.length;
        increment = -1;
        endLoop = 0;
    }

    while(i != endLoop){
        if(num_array[i] > greatest){
            greatest = num_array[i];
            greatestIndex = i;
        }
        i += increment;
    }

    return ("greatest: " + greatest + ", greatestIndex: " + greatestIndex);
}


findGreatestNumAndIndex(1);