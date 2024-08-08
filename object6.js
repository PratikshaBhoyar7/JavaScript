//diiff btn  dot and bracket notation.
const person={
    name:"sita",
    age:44,
    "person hobbies":["cooking","gardening","playing"]
}
console.log(person.age);
console.log(person["person hobbies"]);
const key="email";
person[key]="abc@.in";
console.log(person);