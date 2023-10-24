<?php

/* 
COOKIES: 
Encrypting cookies is essential when you need to store sensitive information on the client side. 
*/


/*
A.key: 
Secret key used with the encryption algorithm to convert plaintext 
into ciphertext and vice-versa.

B.iv: 
Random string that's used in combination with the key to ensure the encryption 
process produces unique outputs even for the same input data

C. base64:
Used to encode binary data, like the output of encryption functions, 
into a string that's safe to be transmitted or stored in places that might not handle binary data well.

D. openssl_cipher_iv_length:
Returns the length of the IV (Initialization Vector) required for a specific encryption method/cipher.

E. openssl_encrypt:
Encrypts data using a given method (like aes-256-cbc) and key.

F. aes-256-cbc:
Specifies the encryption method

G. 0 or OPENSSL_RAW_DATA
1. With 0 or OPENSSL_RAW_DATA: You get raw binary data.
2. Without 0 or OPENSSL_RAW_DATA: You get a base64-encoded string.


*/


function encryptCookieData($data) {
     $key="123-XYZ";
     $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
     $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
     return base64_encode($iv . $encrypted);
 }


 function decryptCookieData($encrypted_data) {
     $key="123-XYZ";
     $encrypted_data = base64_decode($encrypted_data);
     $iv_length = openssl_cipher_iv_length('aes-256-cbc');
     $iv = substr($encrypted_data, 0, $iv_length);
     $cipher_text = substr($encrypted_data, $iv_length);
     return openssl_decrypt($cipher_text, 'aes-256-cbc', $key, 0, $iv);
 }
 



 
// Take Data From Client & Set Cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $StringData = file_get_contents("php://input");
     $PHPAsocArray = json_decode($StringData, true);  


    $value=  encryptCookieData($PHPAsocArray['username']);    


     setcookie("username", $value, [
          "expires" => time() + 3600,
          "path" => "/",
          "domain" => "localhost",
          "secure" => true,
          "httponly" => true,
          "samesite" => "Lax" 
      ]);

     echo "Cookie Set Success";
}




// Read Cookie From Request
if ($_SERVER["REQUEST_METHOD"] == "GET") {

     echo  decryptCookieData($_COOKIE["username"]);

}



// Destroy Cookie From Request
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
     setcookie("username", "", time() - 3600, "/");
     echo "Cookie Destroy Success";
}


