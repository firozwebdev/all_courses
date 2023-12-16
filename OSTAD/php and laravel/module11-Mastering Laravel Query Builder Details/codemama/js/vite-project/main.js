// function test(arr, b) {
//   let max_sum = 0;
//   let current_sum = 0;

//   for (let i = 0; i < b; i++) {
//     current_sum += arr[i];
//   }

//   max_sum = current_sum;

//   for (let i = b - 1; i >= 0; i--) {
//     for (let j = arr.length; j--; ) {
//       current_sum = current_sum - arr[i] + arr[j];
//       max_sum = Math.max(max_sum, current_sum);
//     }
//   }

//   return max_sum;
// }

// const test_sum = test([2, 4, 5, 6, 1, 2, 3], 3);
// console.log(test_sum);

function sumOfNumbers(number) {
  let splited = number.split("");
  //return splited.length;

  let sum = 0;
  for (let i = 0; i < splited.length; i++) {
    sum += parseInt(splited[i]);
  }

  if (sum % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}

const test = sumOfNumbers("1241");
console.log(test);
