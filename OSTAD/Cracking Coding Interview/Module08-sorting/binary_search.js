function binary_search(arr, target) {
  let left = 0;
  let right = arr.length - 1;
  //console.log("hello ");

  while (left <= right) {
    let mid = Math.floor(left + (right - left) / 2);
    //console.log(mid);
    if (target == arr[mid]) {
      return mid;
    }
    if (target < arr[mid]) {
      right = mid - 1;
    } else {
      left = mid + 1;
    }
  }
}

console.log(
  binary_search([2, 5, 6, 7, 8, 70, 80, 90, 100, 101, 102, 103, 104, 105], 100)
);
