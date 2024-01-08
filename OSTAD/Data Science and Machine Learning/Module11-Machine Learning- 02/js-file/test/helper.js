var s = 'HelloWorld'
for (let index = 0; index < s.length; index++) {
    const element = s[index];
    //console.log(element)
    
}
// s = s.replace(/([A-Z])/g, '$1').trim()
// console.log(s)
function test(){
    var strings = 'AppHttpControllers';
    var i=1;
    var character='';
    let result = ''
    while (i <= strings.length){
        character = strings.charAt(i);
        if (!isNaN(character * 1)){
            console.log('character is numeric');
        }else{
            if (character == character.toUpperCase()) {
                result += '\\'+character
                //console.log(result)
                if(result=='pp\Http\C'){
                    console.log('App\Http\Controllers');
                }
            }
            if (character == character.toLowerCase()){
                result += character
            }
        }
        i++;
    }
    
}
test()

