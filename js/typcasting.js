/*var he= "IE6";
console.log(he>0);*/

function primechck(a){
    if((a<=1)){return false}
    for (let i=2;i<=(a**(0.5));i++){
        if(a%i==0){return false;}
    }
    return true;
}

let prim=primechck(2);
console.log(prim);