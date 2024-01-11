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
    model: "User",
    columns: ["name:string", "email:string(20)", "phone_no"],
    methods: ["index", "create", "update", "destroy"],
    relationships: ["oneToOne:profile", "hasMany:post"],
    seeds:["name:fake()->name()", "email:fake()->unique()->safeEmail()", "phone_no:fake()->phoneNumber()"],
  },
  {
    model: "Profile",
    columns: ["photo:string", "address:text"],
    methods: ["index", "create", "store", "update", "destroy"],
    relationships: ["belongsTo:user"],
    seeds:["photo:fake()->imageUrl()", "address:fake()->address()"],
  },
  {
    model: "Post",
    columns: ["title:string", "description:text"],
    methods: ["index", "create", "store", "update", "destroy"],
    relationships: ["belongsTo:user"],
    seeds: ["title:fake()->sentence()", "description:fake()->paragraph()"],
  },
];

models.forEach((model) => {
  fs.mkdir("./files/" + model.model + "/", function () {
    makeModel(
      "./files/" + model.model + "/",
      model.model,
      model.columns,
      model.methods,
      model.relationships,
      model.seeds
    );
  });
});
