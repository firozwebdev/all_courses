//checking palindrome
function checkPalindrome(s) {
  const pattern = "[^A-Za-z0-9]";
  s = s.replace(pattern, "");
  s = s.toLowerCase();
  let i = 0;
  let j = s.length - 1;
  while (i < j) {
    if (s[i] != s[j]) {
      return false;
    }
    i++;
    j--;
    return true;
  }
}

console.log(checkPalindrome("hello world"));
