import fs from "fs";
function makeModel(modelName,columns){
    let data = "<?php\n";
    data = data.concat("namespace App\Models;\n");
    data = data.concat(`use App\\Models\\${modelName};\n`);
    data = data.concat(`use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;`);
    data = data.concat(`use Illuminate\\Database\\Eloquent\\Model;\n`);
    data = data.concat(`class ${modelName} extends Model`);
    data = data.concat(`\n{\n`);
    data = data.concat(`  use HasFactory;\n`);
    data = data.concat(`  protected $fillable = [${"'" + columns.join("', '") + "'"}];`); //"'" + data.join("', '") + "'"
    data = data.concat(`\n  public function user(){\n`);
    data = data.concat(`    return $this->belongsTo(User::class);\n`);
    data = data.concat(`  }`);
    data = data.concat(`\n}`);
    
    fs.writeFile(modelName + ".php", data, (err) => {
        // In case of a error throw err.
        if (err) throw err;
        console.log("working fine");
    });
}

const columns = ['name','email','address','age','fb_id']
makeModel('Traveller',columns)