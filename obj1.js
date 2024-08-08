const Course={
    Subject:"Javascript",
    Duration:"3 month",
    Books: {
        Book1: "Js1"
    },
    enroll(){
        console.log("Welcome to our course");
    },
    fees:4000
}
console.log(Course.Subject);
Course.enroll();
Course.Books;
console.log(Course);
Course.Teacher=5;
console.log(Course);
delete Course.Books;
console.log(Course);