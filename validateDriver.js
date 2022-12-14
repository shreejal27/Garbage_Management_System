
 var nameErr = document.getElementById("nameErr");
 var numErr = document.getElementById("numErr");
 var emailErr = document.getElementById("emailErr");
 var msgErr = document.getElementById("msgErr");
 var submitErr = document.getElementById("submitErr");

function ValidateName()
{
    var name= document.getElementById("name").value;
    if (name==" "){
        document.getElementById("nameErr").innerText="Name Cannot Be Null.";
        return false;
    }
   
    document.getElementById("nameErr").innerText="";
    var nameFormat =/^[A-Za-z]+$/;
    if (!nameFormat.test(name)) {
            nameErr.innerHTML = "Please Enter Alphabets Only";
            return false;
        }
        return true;
}
function ValidateMsg(){
        var msg= document.getElementById("messages").value;
        document.getElementById("msgErr").innerText="";
        var required = 15;
        var left = required - msg.length;
        if(left > 0){
            msgErr.innerHTML= left + " more characters required";
            return false;
        }
        if (msg==""){
            document.getElementById("msgErr").innerText="Message is required";
            return false;
        }
        return true;
}

function ValidateMyForm(){
   if(!ValidateName() || !ValidateNumber() || !ValidateEmail() || !ValidateMsg() ){
    submitErr.style.display='block';
    submitErr.innerHTML="Please fix errors to submit";
    setTimeout(function(){submitErr.style.display='none';}, 3000);
       return false;
   }
   
}


function ValidateEmail()
{
    var email= document.getElementById("email").value;
    if (email==""){
        document.getElementById("emailErr").innerText="Email is required";
        return false;
    }
   
    document.getElementById("emailErr").innerText="";
    var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!mailformat.test(email)) {
            emailErr.innerHTML = "Invalid Email Address.";
            return false;
        }
        return true;
}


function ValidateNumber()
{
    var num= document.getElementById("number").value;
    if (num==""){
        document.getElementById("numErr").innerText="Phone Number is required";
        return false;
    }
    document.getElementById("numErr").innerText="";
    var numFormat = /^[9][6-8]{1}[0-9]{8}$/;
    if (!numFormat.test(num)) {
            numErr.innerHTML = "Invalid number";
            return false;
    }
    return true;
}