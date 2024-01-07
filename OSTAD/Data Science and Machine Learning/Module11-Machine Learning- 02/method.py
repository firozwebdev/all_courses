
def callMethod(method):
    return f"This is for {method}"
def methodMaker(methods):
    mt = ''
    mi = ''
    for method in methods:
        if method == 'index':
           mt += f"public function {method}() \n"
           mt += "{\n"
           mt += callMethod(method)
           mt += "\n} \n"
           mi = ''
        elif method == 'edit':
           mt += f"public function {method}() \n"
           mt += "{\n"
           mt += callMethod(method)
           mt += "\n} \n"
        elif method == 'destroy':
           mt += f"public function {method}() \n"
           mt += "{\n"
           mt += callMethod(method)
           mt += "\n} \n"

        
       
    return mt



def makeController(controllerName,methods):
  
    file = open(f"{controllerName}.php","w")
    data = "<?php\n"
    data += "namespace App\Http\Controllers;\nuse Illuminate\Http\Request;\n"
    data += "class TestController extends Controller"
    data += "\n{\n"
    data += methodMaker(methods) # calling method function
    data += "\n}\n"
    file.write(data)
    file.close()

methods = ['index','create']

makeController("WorldController",methods)



