// For loop 
const Fruit=["Mango","Banana","Apple","Papaya"];
console.log(Fruit.length);
let Fruits2=[];
for(let i=0; i<Fruit.length-1;i++){
    //console.log(Fruit[i].toUpperCase());
    Fruits2.push(Fruit[i].toUpperCase());
}
console.log("Here is my new updates");
console.log(Fruits2);
console.log(Fruit);