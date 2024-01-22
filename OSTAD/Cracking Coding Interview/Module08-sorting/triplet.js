function findTriplet(arr, targetSum) {
  // Sort the array in ascending order
  arr.sort((a, b) => a - b);

  // Loop through each element as a potential first element of the triplet
  for (let i = 0; i < arr.length - 2; i++) {
    let left = i + 1; // Index of the second element
    let right = arr.length - 1; // Index of the third element

    while (left < right) {
      const currentSum = arr[i] + arr[left] + arr[right];

      if (currentSum === targetSum) {
        // Triplet found
        return true;
      } else if (currentSum < targetSum) {
        // If current sum is less than target, move to the right
        left++;
      } else {
        // If current sum is greater than target, move to the left
        right--;
      }
    }
  }

  // No triplet found
  return false;
}

// Example usage
const arr = [1, 4, 45, 6, 10, 8];
const targetSum = 50;

if (findTriplet(arr, targetSum)) {
  console.log("Triplet found!");
} else {
  console.log("No triplet found.");
}
