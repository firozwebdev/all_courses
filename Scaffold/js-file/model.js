import fs from "fs";
import { makeMigration } from "./modules/migration.js";
import { makeController } from "./modules/controller.js";
function makeModel(modelName, columns, methods) {
  let data = "<?php\n";
  data = data.concat("namespace AppModels;\n");
  data = data.concat(`use App\\Models\\${modelName};\n`);
  data = data.concat(
    `use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;\n`
  );
  data = data.concat(`use Illuminate\\Database\\Eloquent\\Model;\n`);
  data = data.concat(`class ${modelName} extends Model`);
  data = data.concat(`\n{\n`);
  data = data.concat(`  use HasFactory;\n`);
  data = data.concat(
    `  protected $fillable = [${"'" + columns.join("', '") + "'"}];`
  ); //"'" + data.join("', '") + "'"
  data = data.concat(`\n  public function user(){\n`);
  data = data.concat(`    return $this->belongsTo(User::class);\n`);
  data = data.concat(`  }`);
  data = data.concat(`\n}`);

  fs.writeFile(modelName + ".php", data, (err) => {
    // In case of a error throw err.
    if (err) throw err;
    makeMigration(modelName, columns);
    makeController(modelName + "Controller", methods);
    console.log("All done!");
  });
}

const columns = ["name", "email", "address", "age"];
const methods = ["index", "create", "edit", "store", "update", "destroy"];
makeModel("Traveller", columns, methods);
