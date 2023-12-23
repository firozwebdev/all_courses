//checking palindrome

function checkPalindrome(s, i, j) {
  if (i >= j) {
    return true;
  }
  if (s[i] != s[j]) {
    return false;
  }
  return checkPalindrome(s, i + 1, j - 1);
}
function checkPal(s) {
  const pattern = "[^A-Za-z0-9]";
  s = s.replace(pattern, "").toLowerCase();
  let i = 0;
  let j = s.length - 1;
  //   while (i < j) {
  //     if (s[i] != s[j]) {
  //       return false;
  //     }
  //     i++;
  //     j--;
  //     return true;
  //   }
  //using recursion method
  return checkPalindrome(s, i, j);
}

console.log(checkPal("peep"));
