export function migrationFileName() {
  const now = new Date();
  const year = now.getFullYear();
  const month = String(now.getMonth() + 1).padStart(2, "0");
  const day = String(now.getDate()).padStart(2, "0");
  const hours = String(now.getHours()).padStart(2, "0");
  const minutes = String(now.getMinutes()).padStart(2, "0");
  const seconds = String(now.getSeconds()).padStart(2, "0");

  const formattedDateTime = `${year}_${month}_${day}_${hours}${minutes}${seconds}`;

  return formattedDateTime;
}

export function tableName(modelName) {
  // table name will be plural

  if (modelName.endsWith("s")) {
    return smallWord(modelName);
  } else {
    return smallWord(modelName) + "s";
  }
}

//extract column name from columns
export function getColumnName(arr) {
  let columnName = [];
  arr.forEach((element) => {
    let data = element.split(":");
    columnName.push(smallWord(data?.[0]));
  });
  return columnName;
}

export function getColWithValue(arr) { // input: columns
  let columnName = [];
  arr.forEach((element) => {
    let data = element.split(":");
    columnName.push({
      colName: smallWord(data?.[0]),
      colValue: smallWord(data?.[1])
    }
      );
  });
  return columnName;
}

// console.log(getColWithValue([
//   "name:fake()->name()", 
//   "email:fake()->unique()->safeEmail()",
//   "age:fake()->numberBetween(10, 50)",
//   "address:fake()->address()"
// ]));

export function columnNameAndTypeSeperator(arr) {
  let optionRegx = /\(([^)]+)\)/;
  let typeRegx = /^[^\(]+/;
  let columns = [];
  let typeOption = "";
  arr.forEach((element) => {
    let matches = optionRegx.exec(element);
    typeOption = matches?.[1] ? smallWord(matches[1]) : "";
    let data = element.split(":");
    let dtype = typeRegx.exec(data[1]);
    // if(dtype?.[0]=="undefined") {
      //   dtype?.[0] = "string";
      // }
      columns.push({
        name: smallWord(data?.[0]),
        type: dtype?.[0] == "undefined" ? "string" : smallWord(dtype?.[0]),
        typeOption: typeOption,
        nullable: data?.[2] ? true : false,
      });
    });
    return columns;
  }
  //console.log(columnNameAndTypeSeperator(["name:string(30)", "email:string", "address:text", "age:integer"]));


//extract relatinship from relationship array
export function getRelationship(arr = []) {
  let columns = [];
  if (arr.length > 0) {
    let optionRegx = /\(([^)]+)\)/;
    let typeRegx = /^[^\(]+/;
    let typeOption = "";
    arr.forEach((element) => {
      let matches = optionRegx.exec(element);
      typeOption = matches?.[1] ? matches[1] : "";
      let data = element.split(":");
      let dtype = typeRegx.exec(data[1]);
      columns.push({
        relationship: data?.[0] ? true : false,
        type: camelWord(data?.[0]),
        name: dtype?.[0] ? capWord(dtype[0]) : false,
      });
    });
    return columns;
  } else {
    return 0;
  }
}

//console.log(getRelationship(["has Many:post", "belongsTo:profile"]));

//console.log(getRelationship(["oneToOne:profile", "hasMany:post"]));
export function capWord(data) {
  const word = data;

  const capitalized = word.charAt(0).toUpperCase() + word.slice(1);
  return capitalized;
}

export function smallWord(data) {
  const lowerCaseString = data.toLowerCase();
  return lowerCaseString;
}

export function pascalWord(data) {
  const pascalWord = data.replace(/(\w)(\w*)/g, function (g0, g1, g2) {
    return g1.toUpperCase() + g2.toLowerCase();
  });

  return pascalWord;
}

export function camelWord(data) {
  const camelWord = data
    .trim()
    .replace(/[-_\s]+(.)?/g, (_, c) => (c ? c.toUpperCase() : ""));

  return camelWord;
}
