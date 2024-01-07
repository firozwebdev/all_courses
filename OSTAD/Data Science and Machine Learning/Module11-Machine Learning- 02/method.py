
def test(methods):
    mt = ''
    mi = ''
    for method in methods:
        if method == 'index':
           mi += "  this is an index method"
           mt += f"public function {method}() \n"
           mt += "{\n"
           mt += f"{mi}"
           mt += "\n} \n"
           mi = ''
        elif method == 'edit':
           mi += "  this is an edit method"
           mt += f"public function {method}() \n"
           mt += "{\n"
           mt += f"{mi}"
           mt += "\n} \n"

        
       
    return mt


methods = ['index','edit']

print(test(methods))
