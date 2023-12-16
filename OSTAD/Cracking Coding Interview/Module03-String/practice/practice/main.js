function addBinary(a, b) {
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
}

const getAddBinary = addBinary("1001", "101");
console.log(getAddBinary);
