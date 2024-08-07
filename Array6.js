//Find 10% off on each item in [90,56,34,66]
let val=[90,56,34,66];
for(let i=0;i<val.length;i++){
    let offer=val[i]/10;
    val[i]=val[i]-offer;
  
}
console.log(val);