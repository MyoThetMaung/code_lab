/*
//literal
let book = {
    title: "Ajax",
    year : 1997,
    getTitle : function(){
        return this.title;
    }
}
console.log(book);
console.log(Object.keys(book));
console.log(Object.values(book));


// constructor
function Magazine(title, year, month){
    this.title = title;
    this.year = year;
    this.month = month;
    this.getTitle = function(){
        return `Title is ${this.title}`;
    }
}
//prototype
Magazine.prototype.getYear = function(){
    let date = new Date().getFullYear();
    return `${this.title} is ` + (date - this.year) + ` years old`;
}
//Inheritance (constructor)
function News (title,year,month){
    Magazine.call(this,title,year,month);
}
//Inheritance (prototype)
News.prototype = Object.create(Magazine.prototype);

let mag = new Magazine('HTTP', 1997, 'March');
let news = new News('Myanmar Now', 2019, 'April');
console.log(mag.getYear());
console.log(news.getYear());
console.log(news.getTitle());
*/

let book = {
    title : "Programming",
    author: "David"
}
let book1 = Object.create(book,{
    title : {value: "Javascript"},
    author: {value: "John"}
});
console.log(book1.title);

// class
class Car {
    constructor(name,brand,year){
        this.name = name;
        this.brand = brand;
        this.year= year;
    }
    getName(){
        return this.name;
    }
    static show(){
        console.log(`This is a static method`);
    }
}
class Car1 extends Car{
    constructor(name,brand,year,color){
        super(name,brand,year);
        this.color = color;
    }
}
let toyota = new Car1('toyota','camry',2019,'white');
console.log(toyota.getName());
Car1.show();    
