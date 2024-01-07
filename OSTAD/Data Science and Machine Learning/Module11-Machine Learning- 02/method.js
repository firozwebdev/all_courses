function methodMaker(methods){
    let mi = ''
    let mt = ''
    const methodData = []
   
    for (let index = 0;  methods.length; index++) {
        if(methods[index] == 'index'){
           mt = mt.concat("  /**\n")
           mt = mt.concat("  * Display a listing of the resource.\n")
           mt = mt.concat("  */\n")
           mt = mt.concat(`  public function ${methods[index]}() \n`)
           mt = mt.concat("  {\n")
           mt = mt.concat(`   echo \"Method name is ${methods[index]}\";`)
           //mt += mi
           mt = mt.concat("\n  } \n")
           mi = ''
           methodData.push(mt)
          
        } 
       

        if(methods[index] == 'create'){
           mt = mt.concat("  /**\n")
           mt = mt.concat("  * Display a listing of the resource.\n")
           mt = mt.concat("  */\n")
           mt = mt.concat(`  public function ${methods[index]}() \n`)
           mt = mt.concat("  {\n")
           mt = mt.concat(`   echo \"Method name is ${methods[index]}\";`)
           //mt += mi
           mt = mt.concat("\n  } \n")
           mi = ''
           methodData.push(mt)
         
        }
        return methodData
    }
}

function makeController(controllerName,methods){
    const fs = require('fs')
    const mt = []
    let data = "<?php\n"
    data = data.concat("namespace App/\Http/\Controllers;\nuse Illuminate/\Http/\Request;")
    data  = data.concat(`\nclass ${controllerName} extends Controller\n`)
   // mt.push(methodMaker(methods)); 
     data = data.concat(methodMaker(methods))
     console.log(data)
    data  = data.concat("{\n") 
    data  = data.concat()  
    data  = data.concat("}\n")   
    
    fs.writeFile('Output.php', data, (err) => {
     
        // In case of a error throw err.
        if (err) throw err;
        console.log('working fine');
    })
}

makeController("HelloController",['index','create','edit','store','update','destroy'])

