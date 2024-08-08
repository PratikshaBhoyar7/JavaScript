//spread operator in obj
const obj1={
    key1:"val1",
    key2:"val2"
};
const obj2={
    key3:"val3",
    key4:"val4"
};
//let newobj={...obj1,...obj2};
//console.log(newobj);
//newobj={...obj1,...obj2,keyunique:"val5"};
//console.log(newobj);

const newobj={..."abcdefghijklmnopqrstuvwxyz"};
console.log(newobj);
 const obj4={..."0123456789"};
 console.log(obj4);