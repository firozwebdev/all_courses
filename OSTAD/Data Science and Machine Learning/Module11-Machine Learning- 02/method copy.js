function methodMaker(methods){
    let mi = ''
    let mt = ''
    for (let index = 0;  methods.length; index++) {
        if(methods[index] == 'index'){
            console.log(methods[index])
        }
        
        
    }
}

function makeController(controllerName,methods){
    const fs = require('fs')
    let data = "<?php\n"
    data = data.concat("namespace App/\Http/\Controllers;\nuse Illuminate/\Http/\Request;")
    data  = data.concat(`\nclass ${controllerName} extends Controller\n`)   
    data  = data.concat("{\n") 
    data  = data.concat(methodMaker(methods))  
    data  = data.concat("}\n")   
    
    fs.writeFile('Output.php', data, (err) => {
     
        // In case of a error throw err.
        if (err) throw err;
        console.log('working fine');
    })
}

makeController("HelloController",['edit'])

