// clone array
let array1=["Mango","Banana","Pineapple","Chiku"];

//let array2=array1;
// Spread Operator 
//let array2=[...array1]

//let array2=array1.slice(0);  ---> Slice Method

//let array2=[].concat(array1);
//console.log(array1===array2);

let array3=["item1","item2"];
let array2=[...array1, ...array3]
console.log(array1);
console.log(array2);

