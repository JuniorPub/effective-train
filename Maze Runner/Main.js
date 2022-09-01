function calc() {
    var a = parseInt(document.querySelector("#value1").value);
    var b = parseInt(document.querySelector("#value2").value);
    var op = document.querySelector("#operator").value;
    var calculate;

    if (op == "add") {
        calculate = a+b;
    } else if (op == "min") {
        calculate = a-b;
    } else if (op == "div") {
        calculate = a/b;
    } else if (op == "mul") {
        calculate = a*b;
    }
    
    document.querySelector("#results").innerHTML = calculate;
}


function validate() {

var username=document.getElementById("username").value;
var password=document.getElementById("password").value;
if(username=="informatik" & password == "1234")
{
    alert("login succesfully");
    return false;
}
else
{
    alert("faill to login")
}
}


