import fs from "fs";
import { makeMigration } from "../migration/migration.js";
import { makeFactory } from "../migration/factory.js";
import { makeController } from "../controller/controller.js";
import {
  getColumnName,
  getRelationship,
  capWord,
  smallWord,
} from "../helper.js";
export function makeModel(path, model, columns, methods, relationships = 0,seeds) {
  let modelName = capWord(model);
  let data = "<?php\n";
  data = data.concat("namespace App\\Models;\n");
  data = data.concat(
    `use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;\n`
  );
  data = data.concat(`use Illuminate\\Database\\Eloquent\\Model;\n`);
  data = data.concat(`class ${modelName} extends Model`);
  data = data.concat(`\n{\n`);
  data = data.concat(`  use HasFactory;\n`);
  data = data.concat(
    `  protected $fillable = [${
      "'" + getColumnName(columns).join("', '") + "'"
    }];`
  ); //"'" + data.join("', '") + "'"
  let relationshipItem = getRelationship(relationships);
  //console.log(relationshipItem);
  if (relationshipItem.length > 0) {
    relationshipItem.forEach((element) => {
      data = data.concat(`\n  public function ${smallWord(element.name)}(){\n`);
      data = data.concat(
        `    return $this->${element.type}(${element.name}::class);\n`
      );
      data = data.concat(`  }`);
    });
  }

  data = data.concat(`\n}`);
  fs.writeFile(path + modelName + ".php", data, (err) => {
    // In case of a error throw err.
    if (err) throw err;
    makeMigration(path, modelName, columns);
    makeController(path, modelName + "Controller", methods);
    makeFactory(path, modelName,seeds);
    console.log(modelName + " created successfully !");
  });
}
