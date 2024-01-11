import fs from "fs";
import {
  migrationFileName,
  tableName,
  columnNameAndTypeSeperator,
  smallWord,
  capWord,
  getColWithValue
} from "../helper.js";

export function makeFactory(path,model, seeds) {
  let modelName = capWord(model);
  let ColWithValue = getColWithValue(seeds)
  let data = "<?php\n";
  data = data.concat("namespace Database\\Factories\n");
  data = data.concat("use Illuminate\\Database\\Eloquent\\Factories\\Factory;\n");
  data = data.concat(`use Illuminate\\Support\\Facades\\Hash;\n`);
  data = data.concat(`/**\n`);
  data = data.concat(`* @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\${modelName}>\n`);
  data = data.concat(`*/\n`);
  data = data.concat(`class ${modelName}Factory extends Factory\n`);
  data = data.concat(`{\n`);
  data = data.concat(`  protected static ?string \$password = null;\n`);
  data = data.concat(`\n`);
  data = data.concat(`  /**\n`);
  data = data.concat(`  * Define the model's default state.\n`);
  data = data.concat(`  *\n`);
  data = data.concat(`  * @return array<string, mixed>\n`);
  data = data.concat(`  */\n`);
  data = data.concat(`  public function definition(): array\n`);
  data = data.concat(`  {\n`);
  data = data.concat(`    return [\n`);
  if(modelName === 'User') {
    data = data.concat(`      'name' => fake()->name(),\n`);
    data = data.concat(`      'email' => fake()->unique()->safeEmail(),\n`);
    data = data.concat(`      'email_verified_at' => now(),\n`);
    data = data.concat(`      'password' => static::\$password ??= Hash::make('password'),\n`);
    data = data.concat(`      'remember_token' => Str::random(10),\n`);
    data = data.concat(`      'age' => 34,\n`);
  }else{
    ColWithValue.forEach((element) => {
        data = data.concat(`      '${element.colName}' => ${element.colValue},\n`);
    })
  }

  data = data.concat(`    ];\n`);
  data = data.concat(`  }\n`);
  data = data.concat(`\n`);
  data = data.concat(`  /**\n`);
  data = data.concat(`  * Indicate that the model's email address should be unverified.\n`);
  data = data.concat(`  */\n`);
  data = data.concat(`  public function unverified(): static\n`);
  data = data.concat(`  {\n`);
  data = data.concat(`    return $this->state(fn (array \$attributes) => [\n`);
  data = data.concat(`      'email_verified_at' => null,\n`);
  data = data.concat(`    ]);\n`);
  data = data.concat(`  }\n`);
  data = data.concat(`}\n`);

  fs.writeFile(
    path + modelName + "Factory table.php",
    data,
    (err) => {
      // In case of a error throw err.
      if (err) throw err;

      console.log(modelName + " factory created successfully !");
    }
  );
}

// makeFactory("Customer", [
//   "name:fake()->name()", 
//   "email:fake()->unique()->safeEmail()",
//   "age:fake()->numberBetween(10, 50)",
//   "address:fake()->address()"
// ]);

