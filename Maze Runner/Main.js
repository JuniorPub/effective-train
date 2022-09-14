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


function login() {
  var brugernavn = document.querySelector("#brugernavn").value;
  var password = document.querySelector("#password").value;

  if(brugernavn == "penis" && password == "vagina"){
      document.querySelector("#fejl").innerHTML ="Login succesfuld"
  }else if(brugernavn == "" && password == ""){
      document.querySelector("#fejl").innerHTML = "Indtast både brugernavn og kodeord"
  }else if(brugernavn == "penis" && password == ""){
      document.querySelector("#fejl").innerHTML = "Indtast dit password"
  }else if(brugernavn == "" && password == "vagina"){
      document.querySelector("#fejl").innerHTML = "Indtast dit brugernavn"
  }else {
      document.querySelector("#fejl").innerHTML = "Både brugernavn og adgangskode er forkert" 
  }
}


