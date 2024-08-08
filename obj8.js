//compute properties
const key1="Mykey1";
const key2="Mykey2";

const val1="Myval1";
const val2="Myval2";

// create key value pair of Mykey1 : "MyVal1"

const obj={
    [key1]:val1,
    [key2]:val2
}
console.log(obj);

//Another way
const obj1={};
obj1[key1]=val1;
obj1[key2]=val2;
console.log(obj1);