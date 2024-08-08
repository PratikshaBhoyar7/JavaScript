//Destructiong obj
const bank={
    bank1:"sbi",
    bank2:"icici",
    amount:1222,
    branch:"State"
}
//1st way
//const bank1=bank.bank1;
//const bank2=bank.bank2;
//console.log(bank1,bank2);

//2nd way
//let {bank1,bank2}=bank;
//console.log(bank1,bank2);

//3d way if we want to change the name of key
//let {bank1 :Patu,bank2 :Siya} =bank;
//console.log(Patu, Siya);

let {bank1,bank2,...restProps}=bank;
console.log(restProps);


