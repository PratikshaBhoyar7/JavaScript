const College= {
    Student:500,
    Department : {
        Dep1: "MCA",
        Dept2:"Civil",
        Dept3: "CS"

    },
    Teacher: 50,
    Enroll(){
        console.log("Welcome to Our College !");
    },
    Principal:"Dipti"
}
console.log(College);
delete College.Principal;
College.Rooms=7;
console.log(College);
College.Enroll();