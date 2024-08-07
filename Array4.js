// Array Destruction.
const Array1=["Item1", "Item2","Item3","Item4","Item5"];
//[Myvar1, ,myvar2]=Array1;
//console.log("Value of myvar1 is", Myvar1 );
//console.log("Value of myvar2 is", myvar2);
[Myvar1, ,myvar2,...NewArray]=Array1;
console.log("Value of myvar1 is", Myvar1 );
console.log("Value of myvar2 is", myvar2);
console.log(NewArray);