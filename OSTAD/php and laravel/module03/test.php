<?php



$testUsers = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Tina', 'email' => 'tina@example.com'],
];

$users = [
    "Jhon" => [
        'age'=>23,
        'email'=>'jhon@gmail.com'
    ],
    "sabuz" => [
        'age'=>34,
        'email'=>'jhon@gmail.com'
    ],
    "Rasel" => [
        'age'=>56,
        'email'=>'jhon@gmail.com'
    ],
    "Karim" => [
        'age'=>12,
        'email'=>'jhon@gmail.com'
    ]
];

//foreach ($users as $username => $details){
//    echo "Username : $username \n";
//    foreach($details as $key => $value){
//        echo "$key : $value \n";
//    }
//}
//$names = array_column($users, 'name');
//print_r($names);

//echo $users[2]['name'] .' '. $users[2]['email'];

//foreach($users as $user){
//    foreach ($user as $key=>$value){
//        echo "$key: $value ,";
//    }
//}

//$arr1 = ["a",'b','c','d'];
//$arr2 = ['Apple','Ball','Cat','Doll'];
//
//print_r(array_combine($arr1,$arr2));

//$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
//print_r(array_values($assoc));
//print_r(array_keys($assoc));

//$indexArr = ['apple','orange','banana','Multa'];
//$filled = array_fill(1,3,'True');
//print_r($filled);

//$array = ['apple','orange','Multa','banana'];
//array_push($array,'grape'); // return no. of  items in the array
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_pop($array);  //return removed item
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_unshift($array,'mango'); //return no. of array item
//
//echo $test;
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_shift($array); // apple; return removed item from the array.
//echo $test;
//print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$test = array_splice($array,1,1,['cherry','coconut']);
//
////print_r($array);

//$array = ['apple','orange','Multa','banana'];
//$newArray = array_slice($array,2,1);
//print_r($newArray);

//$array = ['apple','orange','Multa','banana'];
//$output = in_array('apple',$array); // if found, it will return 1
//if(in_array('banana',$array)){   // in array method is used for index array
//    echo 'Banana is found on array';
//}


//$user = ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'];
//if(array_key_exists('ids',$user)){
//    echo 'Key Id exists in this array';
//}else{
//    echo 'Not Exists';
//}

// array_search() -- search item with given value and return corresponding key with that value
//$fruits = ['first'=>'banana','second'=>'apple','third'=>'Multa','fourth'=>'Cherry'];
//$key = array_search('Multa',$fruits);
//echo $key;

// array_map() -- this method uses callback in its first parameter, and take an array as second parameter and returns
// whole array with modifed value

//function square($n){
//    return $n*$n;
//}
//$a = [1,3,4,5,6];
//
//$modifed = array_map('square',$a);
//print_r($modifed);



// array_filter() -- this method uses callback in its second parameter, and take an array as first parameter and returns
// array with only modified value
//
//function checker($n){
//    if($n%5==0){
//        return $n;
//    }
//}
//$a = [1,3,4,5,6,10,100];
//
//$modifed = array_filter($a,'checker');
//print_r($modifed);

$fruits = array("apple", "banana", "cherry");

//function test_alter(&$item, $key, $prefix) {
//    $item = "$prefix : $item";
//}
//
//array_walk($fruits, 'test_alter', 'fruit');
//print_r($fruits);

//print_r(array_reverse($fruits)) ;

/*
 * String functions
 */

//$string = 'Hello World';
////echo str_word_count($string);
//$position = stripos($string, 'world');
//
//if($position !== false){
//    echo 'it is found';
//}else{
//    echo "it is not found";
//}

$string = "PHP and Framework Course from OSTAD";
//$replace = 'Laravel';
//$search = 'Framework';
//echo  str_replace($search,$replace,$string);
//$newString = strtr($string,[
//   "language" => 'PHp',
//   "Framework" => "laravel"
//]);
//
//echo $newString;

//$arrays = explode(' ',$string);
////print_r(count($arrays));
//$newString = implode(' ',$arrays);
//echo $newString;

//$string = '"Light to moderate rain or thundershowers accompanied by temporary gusty wind is likely at many places over Rangpur, Rajshahi, Mymensingh and Sylhet divisions; a few places over Dhaka and Khulna divisions and at one or two places over Barishal and Chattogram divisions with moderately heavy to heavy falls at places
//            over Rangpur, Rajshahi, Mymensingh and Sylhet divisions," it said.';
//
//echo wordwrap($string,20,"...") ;

/*
 * Array built in functions
 */

#array_search() - Searches the array for a given value and returns the first corresponding key.
//$assoc = array("first" => "apple", "second" => "banana");
//$key = array_search("banana", $assoc);
//echo $key;

#array_splice() - Removes a portion of the array and replaces it with something else.
//$fruits = array("apple", "banana", "cherry");
//$newArray = array_splice($fruits, 1, 2, array("fig", "grape"));
//print_r($fruits);
//print_r($newArray);



#array_slice() - Extracts a portion of the array.
//$fruits = array("apple", "banana", "cherry",'Multa');
////$portion = array_slice($fruits, 1, 2);
////$portion = array_slice($fruits,1);
////print_r($portion) ;
//$replacement = ['Mango'];
//$newArray = array_splice($fruits,1,'2');
//print_r($newArray);

//$numbers = array(3, 1, 4, 1, 5);
//sort($numbers);
//print_r(array_unique($numbers));
//
//$numbers = array(3, 1, 4, 1, 5);
//rsort($numbers);
//print_r(array_unique($numbers));

#asort() - Sorts an array in ascending order with value and maintains index association that value.
//$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
//asort($fruit);
//print_r($fruit);

#arsort() -  Sorts an array in descending order with value and maintains index association that value.
//$fruits = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
//arsort($fruits);
//print_r($fruits);

// ksort()- Sorts an array in ascending order with key
//$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
//ksort($fruit);
//print_r($fruit);
//
//// krsort()- Sorts an array in ascending order with key
//$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
//krsort($fruit);
//print_r($fruit);

#natsort() - Sorts an array using natural order algorithm.
//$files = array("img1.png", "img10.png", "img12.png", "img2.png");
//natsort($files);
//print_r($files);

//$people = array( "Peter" => 35, "Jack" => 32,  "Mary" => 28);
//function ageComparator($a, $b) {
//    return $a - $b;
//}
//uasort($people , 'ageComparator');
//print_r($people);

#array_reduce() - Iteratively reduces the array to a single value using a callback function.

//$numbers = array(1, 2, 3, 4, 5);
//
//function sum($carry, $item) {
//    $carry += $item;
//    return $carry;
//}
//
//$result = array_reduce($numbers, 'sum');
//echo $result;  // Outputs: 15

//$letters = range('a', 'e');
////print_r($letters);
//$evenNumbers = range(1, 10, 2);
//print_r($evenNumbers);

//$name = 'sabuz';
//$age = 24;
//$email = 'smskushtia@gmail.com';
//
//$result = compact('name','age','email');
//print_r($result);

//$data = [
//    'name' => 'sabuz',
//    'age' => 23,
//    'email' =>'smskushtia@gmail.com'
//];
//
//extract($data);
//echo "{$name} \n";
//echo "{$age} \n";
//echo "{$email} \n";

//$array = ['name'=>'sabuz','age'=>34,'email'=>'smskushtia@gmail.com'];
//$newArray = array_flip($array);
//print_r($newArray);

$array = [4,3,2,5,6,7];
function callback($n){
    return $n*$n;
}
$newArray = array_map('callback',$array);
print_r($newArray);