//how to iterate obj
const person={
    name:"sita",
    age:44,
    "person hobbies":["cooking","gardening","playing"]
}

//for in loop
//for(let key in person){
    //console.log(person[key]);// it gives value
    //console.log(key," : " ,person[key]); // It gives key value
//}


//Object.keys
console.log(Object.keys(person));//It gives keys in array
const val=Array.isArray(Object.keys(person));
console.log(val);

// for off loop
for(let key of Object.keys(person)){
    console.log(person[key]);
}