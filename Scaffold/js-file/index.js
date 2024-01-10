import fs from "fs";
import { makeModel } from "./modules/model/model.js";

/*
 This below code is for single model 
 with single migration and controller
*/

// const columns = ["name:string(30)", "email", "address", "age"];
// const methods = ["index", "create", "update", "destroy"];
//makeModel("./files/", "User", columns, methods);

/*
This below code is for Multiple models, migrations and controllers
*/

const models = [
  {
    modelName: "User",
    columns: ["name:string(30)", "email:string", "address:text", "age:integer"],
    methods: ["index", "create", "edit", "store", "update", "destroy"],
  },
  {
    modelName: "Client",
    columns: ["name:string(30)", "email:string", , "age:integer"],
    methods: ["index", "create", "edit", "store", "update", "destroy"],
  },
];

models.forEach((model) => {
  //console.log(model);
  fs.mkdir("./files/" + model.modelName + "/", function () {
    makeModel(
      "./files/" + model.modelName + "/",
      model.modelName,
      model.columns,
      model.methods
    );
  });
});
