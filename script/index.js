//Console API
console.log('Hello');
console.warn("warning messg");
console.error("erroe msg");
// alert("Alert msg");

//Js Variables  => containers to store data values
var num1 = 4;
var num2 = 5;
console.log(num1+num2);

//Data types JS
// Num: var num = 9; num2 = 67.7;
//String: var str1 = 'prasadnehu';

//Object:
var marks = {
    prashu:34, 
    nehu:99,
    sidd: 45
}

//Booleans
var a = true;
var b = false;

//Undefined or Null
var undf;  //default val is undefined
var und = undefined;
var n = null;
console.log(und);
console.log(undf);
console.log(n);

// At very high level there are 2 main datatypes in jS
// 1. Primitive Datatype: undefined, null, number, string, boolean, symbol.
// 2. Reference Datatype: arrays, objects.

// Arrays 
var arr = [1, 2, "string", 3, 4];
console.log(arr[0]);   // 1
console.log(arr[2]);  //string

// Operators in JS
// Arithmetic: + * / % - 
// Assignment: = += -= *= /=
//Comparison: == >= > < <= !=
//Logical: && || !
//Bitwise: & |

//Functions in JS
// function abc(para1, para2){

// }

//Array Methods
var arr = [1, 2, 3, 4, 5];
console.log(arr.length);
console.log(arr.pop);
console.log(arr.push(2));

//DOM Manipulation
var elem = document.getElementById('click');
console.log(elem);
elem.style.fontSize = '20px';
elem.style.padding = '10px 19px';
elem.classList.add("bg-pri");
elem.classList.remove("bg-pri");
elem.innerHTML = "Login"  +arr+ "";

let tagname = document.getElementById('pra');
tagname.innerHTML = '<b> I am prasad chavan </b>';

let tn = document.getElementsByTagName('div')
let createdElem = document.createElement('button');
createdElem.innerText = "Nehu love you";
// tn[0].append(createdElem);

//Events in js

let prevHTML = document.getElementById('pra').innerHTML;

elem.addEventListener('click', function(){
    document.getElementById('pra').innerHTML = "Prasad chavan";
})

let prev = document.getElementById('clickprev');
prev.addEventListener('click', function(){
    document.getElementById('pra').innerHTML = prevHTML;
})

//Events
//windows.onload = function(){}
// mouseover
// mouseout
// mouseup
// mousedown
// scroll

//Arrow Functions
// function summ(a, b){
//     return a+b;
// }
// above function can br written as follow
summ = (a,b) =>{
    return a+b;
}


//SetTimeout & Setinterval
//settimeout has 1st argument as function and 2nd as time interval
logKaro = ()=>{
    console.log("login kro");
}
setTimeout(logKaro, 2000); //executes after 2seconds
// clearTimeout();
// setInterval(logKaro, 2000); //fires same event after 2 sec gap infinitely
// clr = setInterval(logKaro, 2000); //assign id to clr
// clearInterval(clr);  //used to stop event timeinterval

//Js Local Storage
// localStorage.setItem('name', 'Prashu');
// localStorage.getItem('name');
// localStorage.removeItem('name');
// localStorage.clear();

//JSON   Javascript object Notation
//json only accept double quotes
obj = {name: "Nehu", age: 18, a: {this: "that"}}
jso = JSON.stringify(obj);   //JSOn to string conversion
console.log(typeof obj, typeof jso);  //print type of variable
console.log(jso);

//string to JSON conversion
parsed = JSON.parse(`{"name":"Nehu","age":18,"a":{"this":"that"}}`)
console.log(parsed);

//template literals
a = 45;
console.log(`My roll num is ${a}`);