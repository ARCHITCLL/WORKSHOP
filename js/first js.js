function testVar(){
    var x=10;
    if(true){
        var x = 20;
        console.log("inside if block: ",x);
    }
    console.log("Outside if block: ", x);
}
testVar();
console.log(x);