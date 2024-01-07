function callIndex() {
  mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Display a listing of the resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function index() \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is index\";`);
  //mt += mi
  mt = mt.concat("\n  } \n");
  mi = "";
  return mt;
}

function callCreate() {
  mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Display a listing of the resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function create() \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is create\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}
function callEdit() {
  mt = "";
  mt = mt.concat("  /**\n");
  mt = mt.concat("  * Show the form for editing the specified resource.\n");
  mt = mt.concat("  */\n");
  mt = mt.concat(`  public function edit($id) \n`);
  mt = mt.concat("  {\n");
  mt = mt.concat(`   echo \"Method name is edit\";`);
  mt = mt.concat("\n  } \n");
  return mt;
}

function makeController(controllerName, methods) {
  const fs = require("fs");
  const mt = [];
  let data = "<?php\n";
  data = data.concat(
    "namespace App/Http/Controllers;\nuse Illuminate/Http/Request;"
  );
  data = data.concat(`\nclass ${controllerName} extends Controller\n`);
  data = data.concat("{\n");
  methods.forEach((element) => {
    if (element == "index") {
      data = data.concat(callIndex());
    }
    if (element == "create") {
      data = data.concat(callCreate());
    }
    if (element == "edit") {
      data = data.concat(callEdit());
    }
  });

  //console.log(data);
  data = data.concat("}\n");

  fs.writeFile("Output.php", data, (err) => {
    // In case of a error throw err.
    if (err) throw err;
    console.log("working fine");
  });
}

makeController("HelloController", [
  "index",
  "create",
  "edit",
  "store",
  "update",
  "destroy",
]);
