function maxsum(arr, B) {
  let current_sum = 0;
  let max_sum = 0;
  for (let i = 0; i < B; i++) {
    current_sum += arr[i];
  }
  max_sum = current_sum;
  for (let i = B - 1, j = arr.length - 1; i >= 0; i--, j--) {
    current_sum = current_sum - arr[i] + arr[j];
    max_sum = Math.max(max_sum, current_sum);
  }
  return max_sum;
}

console.log(maxsum([5, -2, 6, 1, 2], 3));
