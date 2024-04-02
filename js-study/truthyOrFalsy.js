/*
Truthy Values:

Non-empty strings: Any string with at least one character, such as "hello".
Non-zero numbers: Any number except 0, including positive numbers and negative numbers.
Objects: Any object, including arrays and functions.
Arrays: Even empty arrays [] are considered truthy.
Functions: Any function, including function expressions and arrow functions.
Any other non-null object: Objects created with constructors or literals.
*/

/*
Falsy Values:

Empty strings: The empty string "".
0: The number zero.
NaN: Not-a-Number.
null: The absence of any value or object.
undefined: The value assigned to uninitialized variables or missing properties.
false: The boolean value false.
*/

// Truthy values
if ("hello") {
    console.log("Truthy"); // Output: Truthy
  }
  
  if (42) {
    console.log("Truthy"); // Output: Truthy
  }
  
  if ([]) {
    console.log("Truthy"); // Output: Truthy
  }
  
  // Falsy values
  if (0) {
    console.log("Falsy");
  } else {
    console.log("Falsy"); // Output: Falsy
  }
  
  if (null) {
    console.log("Falsy");
  } else {
    console.log("Falsy"); // Output: Falsy
  }
  