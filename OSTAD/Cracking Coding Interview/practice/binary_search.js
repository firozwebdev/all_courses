// function test(arr, target) {
//   let length = arr.length;
//   let sortedArray = [];
//   for (let i = 0; i < length; i++) {
//     sortedArray[i] = [arr[i], i];
//   }

//   sortedArray.sort((a, b) => {
//     return a[0] - b[0];
//   });
//   for (let i = 0; i < sortedArray.length; i++) {
//     let n1 = sortedArray[i][0];
//     let n2 = target - sortedArray[i][0];
//     let index = binar_search(sortedArray, i + 1, n2);
//     if (index !== -1) {
//       return [sortedArray[i][1], index];
//     }
//   }
// }

// function binar_search(arr, start, target) {
//   let end = arr.length - 1;
//   while (start <= end) {
//     let mid = Math.floor(start + (end - start) / 2);
//     if (target == arr[mid][0]) {
//       return arr[mid][1];
//     }
//     if (target < arr[mid][0]) {
//       end = mid - 1;
//     } else {
//       start = mid + 1;
//     }
//   }
// }

//same function implementation
function test(arr, target) {
  let sortedArray = [];
  for (let i = 0; i < arr.length; i++) {
    sortedArray[i] = [arr[i], i];
  }

  sortedArray.sort(function (a, b) {
    return a[0] - b[0];
  });

  for (let i = 0; i < sortedArray.length; i++) {
    let n1 = sortedArray[i][0];
    let n2 = target - n1;
    let index = binary_search(sortedArray, i + 1, n2);
    if (index != -1) {
      return [sortedArray[i][1], index];
    }
  }

  return -1;
}

function binary_search(arr, start, target) {
  let end = arr.length - 1;
  while (start <= end) {
    let mid = Math.floor(start + (end - start) / 2);
    if (target == arr[mid][0]) {
      return arr[mid][1];
    }

    if (target < arr[mid][0]) {
      end = mid - 1;
    } else {
      start = mid + 1;
    }
  }
}

console.log(test([4, 3, 2, 6, 7, 11, 9, 10, 8], 10));
