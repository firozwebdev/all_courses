const addBinary = (a, b) => {
  let i = a.length - 1;
  let j = b.length - 1;
  let carry = 0;
  let result = "";

  while (i >= 0 || j >= 0) {
    const bit1 = i < 0 ? 0 : parseInt(a[i--]);
    const bit2 = j < 0 ? 0 : parseInt(b[j--]);
    const sum = bit1 + bit2 + carry;
    result = (sum % 2) + result;
    carry = Math.floor(sum / 2);
  }
  if (carry > 0) {
    result = carry + result;
  }
  return result;
};

//console.log(addBinary("1000", "101111"));

function findNumberInString(intputSting) {
  const matches = intputSting.match(/\d+/g);
  //console.log(matches);

  if (matches.length > 0) {
    let result = matches.join("");
    return result;
  } else {
    return "No matches found";
  }
}

const getfindNumberInString = findNumberInString("4ell25sd6f8");
//console.log(getfindNumberInString);

const findNeedle = (haystack, needle) => {
  let indices = [];
  for (let i = 0; i <= haystack.length - needle.length; i++) {
    //console.log(haystack.substring(i, i + needle.length));
    if (haystack.substring(i, i + needle.length) === needle) {
      indices.push(i);
    }
  }
  //console.log(indices);
  if (indices.length > 0) {
    console.log(indices.join(", "));
  } else {
    console.log("No indices found");
  }
};

const haystack =
  "Hello, this is a sample haystack. This sample has another sample.";
const needle = "sample";

findNeedle(haystack, needle);
//console.log(findNeedle("helloWorld", "hello"));
