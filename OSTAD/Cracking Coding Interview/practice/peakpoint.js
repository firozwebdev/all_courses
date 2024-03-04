function peakPoint(arr) {
  // Your code here
  let n = arr.length;
  for (let i = 0; i < n; i++) {
    if (isPeak(i, arr)) {
      return 1;
    }
  }
  return 0;
}

function isPeak(i, arr) {
  // Your code here
  for (let j = 0; j < arr.length; j++) {
    if (arr[j] >= arr[i]) {
      return 1;
    }
  }
  for (let j = i + 1; j < arr.length; j++) {
    if (arr[j] <= arr[i]) {
      return 1;
    }
  }
  return 0;
}
console.log(
  peakPoint([
    17660, 7480, 26424, 26634, 10867, 7463, 27919, 12159, 18239, 21197, 12023,
    1147, 32499, 28487,
  ])
);
