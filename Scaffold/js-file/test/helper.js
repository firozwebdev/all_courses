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
export function seperateStrings(arr) {
  //console.log(arr);
  let optionRegx = /\(([^)]+)\)/;
  let typeRegx = /^[^\(]+/
  let columns = [];
  let typeOption = ''
  arr.forEach((element) => {
    //console.log(element);
    let matches = optionRegx.exec(element);
    typeOption = matches ? matches[1] : ''

    let data = element.split(":");
    let dtype = typeRegx.exec(data[1])
    columns.push({
      name: data[0],
      type: dtype[0],
      typeOption: typeOption,
      nullable: data[2] ? true : false,
    });
  });
  return columns;
}
console.log(
  seperateStrings([
    "name:string(15):nullable",
    "email:string",
    "address:string",
    "age:string",
  ])
);
//seperateStrings(["name:string", "email:string"]);

// var regExp = /\(([^)]+)\)/;
// var matches = regExp.exec("I expect five hundred dollars ($500).");
// //matches[1] contains the value between the parentheses
// console.log(matches[1]);
