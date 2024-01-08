import {index, create, store, edit, show, update, destroy} from "./modules/methods.js";
import fs from "fs";
function makeController(controllerName, methods) {
  //const fs = require("fs");
  let data = "<?php\n";
  data = data.concat( "namespace App/Http/Controllers;\nuse Illuminate/Http/Request;");
  data = data.concat(`\nclass ${controllerName} extends Controller\n`);
  data = data.concat("{\n");
  methods.forEach((element) => {
    if (element == "index") {
      data = data.concat(index());
    }
    if (element == "create") {
      data = data.concat(create());
    }
    if (element == "store") {
      data = data.concat(store());
    }
    if (element == "edit") {
      data = data.concat(edit());
    }
    if (element == "show") {
      data = data.concat(show());
    }
    if (element == "update") {
      data = data.concat(update());
    }
    if (element == "destroy") {
      data = data.concat(destroy());
    }
  });

  //console.log(data);
  data = data.concat("}\n");

  fs.writeFile(controllerName + ".php", data, (err) => {
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
