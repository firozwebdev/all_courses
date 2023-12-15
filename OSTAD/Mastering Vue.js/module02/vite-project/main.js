/*
ES6 practice session

*/

function greet(name) {
  //console.log(`hello ${name}`);
}

const greet2 = (name) => {
  //console.log(`hello ${name}`);
};

greet("sabuz");

function add(n1, n2) {
  return n1 + n2;
}

const add2 = (n1, n2) => {
  return n1 + n2;
};

const add3 = (n1, n2) => n1 + n2;

const data = add2(3, 4);
//console.log(data);
function sum2(n) {
  //const sum5 = (n) => n.reduce((o, n) => o + n);
  const summation = n.reduce(function (o, n) {
    return o + n;
  });
  return summation;
}

function sum4(n) {
  const summation = n.reduce((o, n) => o + n);
  return summation;
}

const sum_4 = sum4([2, 3, 4, 5, 6, 7, 8, 9, 10]);
//console.log(sum_4);

const sum5 = (n) => n.reduce((o, n) => o + n);

console.log(sum5([2, 3, 40, 5, 65, 7, 8, 9, 10]));

function revString(str) {
  return str.split("").reverse().join("");
}

//console.log(revString("hello world"));

const revString2 = (str) => str.split("").reverse().join("");
//console.log(revString2("I am sabuz"));

const revString3 = (str) => str.split("").reverse().join("");
//console.log(revString3("I am Baba"));

const data2 = [12, 13, 14, 15];
const [a, b, ...c] = data2;

const summation = (args) => args.reduce((o, n) => o + n);
//console.log(summation(c));

const person = {
  fname: "John",
  lname: "Doe",
  age: 34,
};

const { fname, ...rest } = person;
console.log(fname, rest);
