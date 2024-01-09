import fs from "fs";
import { migrationFileName, tableName } from "./modules/helper.js";


function makeMigration(modelName){
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
    data = data.concat(`    Schema::create('${tableName(modelName)}', function (Blueprint $table) {\n`);
    data = data.concat(`      $table->id();\n`);
    data = data.concat(`      $table->string('name');\n`);
    data = data.concat(`      $table->string('email')->unique();\n`);
    data = data.concat(`      $table->timestamp('email_verified_at')->nullable();\n`);
    data = data.concat(`      $table->string('password');\n`);
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
    data = data.concat(`    Schema::dropIfExists('${tableName(modelName)}');\n`);
    data = data.concat(`  }\n`);
    data = data.concat(`};\n`);

     
    fs.writeFile(migrationFileName() +'_create_'+ modelName.toLowerCase() + "s_table.php", data, (err) => {
        // In case of a error throw err.
        if (err) throw err;
        console.log("working fine");
    });
}

const columns = ['name','email','address','age','fb_id']
makeMigration('Customer')