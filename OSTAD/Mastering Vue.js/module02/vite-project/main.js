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
