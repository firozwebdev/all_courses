// var s = 'HelloWorld'
// // for (let index = 0; index < s.length; index++) {
// //     const element = s[index];
// //     //console.log(element)

// // }
// // s = s.replace(/([A-Z])/g, '(\)').trim()
// // console.log(s)
// function test(){
//     var strings = 'AppHttpControllers';
//     var i=1;
//     var character='';
//     let result = ''
//     while (i <= strings.length){
//         character = strings.charAt(i);
//         if (!isNaN(character * 1)){
//             console.log('character is numeric');
//         }else{
//             if (character == character.toUpperCase()) {
//                 result += '\\'+character

//             }
//             if (character == character.toLowerCase()){
//                 result += character
//             }

//             //console.log(result)

//         }
//         i++;

//     }

// }
// //test()

//     //console.log("'" + data.join("', '") + "'");
//     function migrationFileName() {
//         const now = new Date();

//         const year = now.getFullYear();
//         const month = String(now.getMonth() + 1).padStart(2, '0');
//         const day = String(now.getDate()).padStart(2, '0');
//         const hours = String(now.getHours()).padStart(2, '0');
//         const minutes = String(now.getMinutes()).padStart(2, '0');
//         const seconds = String(now.getSeconds()).padStart(2, '0');

//         const formattedDateTime = `${year}_${month}_${day}_${hours}${minutes}${seconds}`;

//         return formattedDateTime;
//     }

//   console.log(table_name('customer'))

// seperate two strings
function seperateStrings(arr) {
  //console.log(arr);
  let columns = [];
  let column = {
    name: "",
    type: "",
  };

  arr.forEach((element) => {
    //console.log(element);
    let data = element.split(":");

    //columns.push(columns);

    //console.log(columns);

    columns.push({
      name: data[0],
      type: data[1],
    });
  });
  return columns;
}
console.log(
  seperateStrings([
    "name:string",
    "email:string",
    "address:string",
    "age:string",
  ])
);
//seperateStrings(["name:string", "email:string"]);
