function testConst(){
    const PI = 3.1459;
    console.log("PI: ",PI);

}
//let PI;
testConst();
let PI;
const person={name: "Archit"};
person.name="Sikara";
console.log(person.name[1,5,0]);
console.log(typeof(person.name));

var par=person.name;
console.log(par.slice(1,4));