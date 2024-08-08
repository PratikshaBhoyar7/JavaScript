//object inside array.
const user=[
    {userId:1,firstName:"Siya", gender:"F"},
    {userId:2,firstName:"Dipti",gender:"F"},
    {userId:3,firstName:"Ram",gender:"M"}
]
//for(let key of user){
   // console.log(key.firstName);
//}

//nested destructring
//const [user1,user2,user3]=user;
//console.log(user1);

const [{firstName}, ,{gender}]=user;
console.log(firstName);
console.log(gender);


