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
    columns: ["name:string", "email:string(20)", "phone_no"],
    methods: ["index", "create", "update", "destroy"],
    relationships: ["oneToOne:profile", "hasMany:post"],
  },
  {
    modelName: "Profile",
    columns: ["user_id:foreignId", "photo:string", "address:text"],
    methods: ["index", "create", "store", "update", "destroy"],
    relationships: ["belongsTo:user"],
  },
  {
    modelName: "Post",
    columns: ["user_id:foreignId", "title:string", "description:text"],
    methods: ["index", "create", "store", "update", "destroy"],
    relationships: ["belongsTo:user"],
  },
];

models.forEach((model) => {
  fs.mkdir("./files/" + model.modelName + "/", function () {
    makeModel(
      "./files/" + model.modelName + "/",
      model.modelName,
      model.columns,
      model.methods,
      model.relationships
    );
  });
});
