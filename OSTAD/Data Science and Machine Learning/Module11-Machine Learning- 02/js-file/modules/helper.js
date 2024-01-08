export function migrationFileName() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    const formattedDateTime = `${year}_${month}_${day}_${hours}${minutes}${seconds}`;
    
    return formattedDateTime;
}

export function tableName(modelName){ // table name will be plural
   
    if(modelName.endsWith('s')){
        return modelName
    }else{
        return modelName.toLowerCase() + 's'
    }
  }

