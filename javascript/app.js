// output
// document.write('hello world');
// console.log('this is console');

// input
// alert('this is alert');
// prompt('this is prompt');

// data type | const, let , var 
// let num1 =10;
// var value = false;
// const num2 = 20, num3 =30;
// console.log(num2 + num2);
// console.log(typeof value);

//operator
/* 
    Arithmetic operator  => + - * / % ++ --
    Comparison operator => == != === !== > < >= <=
    Assignment operator  => = += -= *= /= %=
    Logical operator => && || !
    Conditional operator => ? :
*/
// let number = 10;
// console.log(number++);
// console.log(number);

// console.log(1 === '1');
// console.log(number == 1|| number != 20);
// console.log(number == 1 && number != 20);
// number *= 100;
// console.log(number);

// var result = number ==1100 ? 'it is 1100' : 'it is not 1100';
// console.log(result);

// let num = 4+5-(5*(7/4));
// console.log(num);



//condition
/*
input  =  prompt("Enter number");
today = parseInt(input);

if(today == 1){
    console.log("Today is Monday");
}else if(today == 2){
    console.log("Today is Tuesday");
}else if(today == 3){
    console.log("Today is Wednesday");
}else if(today == 4){
    console.log("Today is Thursday");
}else if(today == 5){
    console.log("Today is Friday");
}else if(today == 6){
    console.log("Today is Saturday");
}else if(today == 7){
    console.log("Today is Sunday");
}else{
    console.log("Wrong day");
}

switch(today){
    case 1:
        console.log("Today is Monday");
        break;
    case 2:
        console.log("Today is Tuesday");
        break;
    case 3:
        console.log("Today is Wednesday");
        break;
    case 4:
        console.log("Today is Thursday");
        break;
    case 5:
        console.log("Today is Friday");
        break;
    case 6:
        console.log("Today is Saturday");
        break;
    case 7:
        console.log("Today is Sunday");
        break;
    default:
        console.log("Wrong day");
        break;
}
*/


//loop
/*
    let no = 5;
    while(no <= 10){
        console.log(no++);
    }
    console.log('end');

    let nu = 4;
    do{
        console.log(nu++);
    }while(nu<10);

    let startNum = parseInt(prompt("Enter start number"));
    let endNum = parseInt(prompt("Enter end number"));
    for(startNum; startNum <= endNum; startNum++){
        console.log(startNum);
    } 
    while(startNum <= endNum){
        console.log(startNum++);
    }
*/

//function
/*
    function getName(){
        console.log("hello world");
    }
    function getNumber(num1=10){
        console.log(num1);
    }
    function sum(no1 = 10, no2 = 20){
        console.log(no1 + no2);
    }
    function typeFunction(age=24){
        return age;
    }
    function voidFunction(address="Yangon"){
        console.log(address);
    }
    let gender = () => {
        console.log("I am male");
    }
    let gen = () => console.log("I am female");
    let ge = () => console.log("I am gay");

    getName();
    getNumber();
    sum();
    typeFunction();
    voidFunction();
    gender();
    gen();
    ge();
*/

//array
/*
let fru = new Array('strawberry','lemon','lime');
let fruits = ['banana','orange','apple','watermelon'];
console.log(fru);
console.log(fruits);

let associateArr = [];
associateArr['name'] = 'David';
associateArr['age'] = 24;
console.log(associateArr);

let numArr = [2,3,4,5];
numArr.push(6);
numArr.pop(6);
numArr.unshift(1);
numArr.shift(1);
console.log(numArr);

let mapArr = numArr.map(function(each){
    console.log(each * 2);
})

let arr = [12,23,34];
[a,b,c] = arr;
console.log(a);
show = (one,two,three) => console.log(one+two+three);
show(a,b,c);



let associate = {
    name: "John",
    age: 24,
    uni: "WYU",
    graduate : function(){
        return `${this.name} am graduated`;
    }
}
console.log(associate.graduate());
*/

// Object
/*
let car = new Object();
car.name = "BMW";
car.model = 1997;
console.log(car);

function Book(title,author){
    this.title = title;
    this.author = author;
}
let book = new Book("Good","John");
console.log(book);

let numb = 1.23533;
let nam = "hello ";
console.log(numb.toFixed(3));
console.log(nam.toUpperCase());
console.log(nam.toLowerCase());
console.log(nam.substr(2,2));
console.log(nam.trim());
console.log(nam.split(""));

let date = "14-2-1997";
[day,month,year] = date.split("-");
console.log(day);
console.log(month);
console.log(year);
*/
