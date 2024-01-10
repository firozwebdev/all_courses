import fs from "fs";
import {
  migrationFileName,
  tableName,
  columnNameAndTypeSeperator,
  smallWord,
  capWord,
} from "../helper.js";

export function makeMigration(path, model, columns) {
  let modelName = capWord(model);
  let data = "<?php\n";
  data = data.concat("use Illuminate\\Database\\Migrations\\Migration;\n");
  data = data.concat(`use Illuminate\\Database\\Schema\\Blueprint;\n`);
  data = data.concat(`use Illuminate\\Support\\Facades\\Schema;\n`);
  data = data.concat(`return new class extends Migration\n`);
  data = data.concat(`{\n`);
  data = data.concat(`  /**\n`);
  data = data.concat(`  * Run the migrations.`);
  data = data.concat(`  */\n`);
  data = data.concat(`  public function up(): void\n`);
  data = data.concat(`  {\n`);
  data = data.concat(
    `    Schema::create('${tableName(model)}', function (Blueprint $table) {\n`
  );
  data = data.concat(`      $table->id();\n`);
  let colNameType = columnNameAndTypeSeperator(columns);
  colNameType.forEach((element) => {
    data = data.concat(
      `      $table->${smallWord(element.type)}('${smallWord(element.name)}'${
        element.typeOption ? "," + element.typeOption : ""
      })${element.nullable ? "->nullable()" : ""};\n`
    );
  });

  data = data.concat(`      $table->string('password');\n`);
  data = data.concat(
    `      $table->timestamp('email_verified_at')->nullable();\n`
  );
  data = data.concat(`      $table->rememberToken();\n`);
  data = data.concat(`      $table->timestamps();\n`);
  data = data.concat(`    });\n`);
  data = data.concat(`  }\n`);
  data = data.concat(`\n`);
  data = data.concat(`  /**\n`);
  data = data.concat(`  * Reverse the migrations.\n`);
  data = data.concat(`  */\n`);
  data = data.concat(`  public function down(): void\n`);
  data = data.concat(`  {\n`);
  data = data.concat(`    Schema::dropIfExists('${tableName(model)}');\n`);
  data = data.concat(`  }\n`);
  data = data.concat(`};\n`);

  fs.writeFile(
    path + smallWord(migrationFileName() + "_create_" + model + "s_table.php"),
    data,
    (err) => {
      // In case of a error throw err.
      if (err) throw err;

      console.log(model + " migration created successfully !");
    }
  );
}
