import fs from "fs";
function makeModel(modelName,columns){
    let data = "<?php\n";
    data = data.concat( "namespace App/Models;\n");
    data = data.concat(`use App\Models\${modelName};\n`);
    data = data.concat("{\n");
    data = data.concat("}\n");

    fs.writeFile(modelName + ".php", data, (err) => {
        // In case of a error throw err.
        if (err) throw err;
        console.log("working fine");
    });
}