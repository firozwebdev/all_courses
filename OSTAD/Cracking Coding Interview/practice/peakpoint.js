function peakPoint(arr) {
  // Your code here
  let n = arr.length;
  for (let i = 0; i < n; i++) {
    if (isPeak(i, arr)) {
      return arr[i];
    }
  }
  return 0;
}

function isPeak(i, arr) {
  // Your code here
  for (let j = 0; j < arr.length; j++) {
    if (arr[j] <= arr[i]) {
      return 1;
    }
  }
  for (let j = i + 1; j < arr.length; j++) {
    if (arr[j] >= arr[i]) {
      return 1;
    }
  }
  return 0;
}
console.log(peakPoint([2, 4, 5, 6, 8, 9]));
