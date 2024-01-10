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
    return modelName;
  } else {
    return modelName.toLowerCase() + "s";
  }
}

//extract column name from columns
export function getColumnName(arr) {
  let columnName = [];
  arr.forEach((element) => {
    let data = element.split(":");
    columnName.push(data[0]);
  });
  return columnName;
}

export function columnNameAndTypeSeperator(arr) {
  let optionRegx = /\(([^)]+)\)/;
  let typeRegx = /^[^\(]+/;
  let columns = [];
  let typeOption = "";
  arr.forEach((element) => {
    let matches = optionRegx.exec(element);
    typeOption = matches?.[1] ? matches[1] : "";
    let data = element.split(":");
    let dtype = typeRegx.exec(data[1]);
    columns.push({
      name: data[0],
      type: dtype?.[0] ? dtype[0] : "string",
      typeOption: typeOption,
      nullable: data?.[2] ? true : false,
    });
  });
  return columns;
}

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
        type: data[0],
        name: dtype?.[0] ? dtype[0] : false,
      });
    });
    return columns;
  } else {
    return 0;
  }
}

//console.log(getRelationship(["oneToOne:profile", "hasMany:post"]));
export function capWord(data) {
  const word = data;

  const capitalized = word.charAt(0).toUpperCase() + word.slice(1);
  return capitalized;
}
