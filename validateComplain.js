
 var fnameErr = document.getElementById("fnameErr");
 var lnameErr = document.getElementById("lnameErr");
 var msgErr = document.getElementById("msgErr");
 var submitErr = document.getElementById("submitErr");

function ValidateFname()
{
    var fname= document.getElementById("fname").value;
    if (fname==""){
        document.getElementById("fnameErr").innerText="Name Cannot Be Null.";
        return false;
    }
   
    document.getElementById("fnameErr").innerText="";
    var fnameFormat =/^[A-Za-z]+$/;
    if (!fnameFormat.test(fname)) {
            fnameErr.innerHTML = "Please Enter Alphabets Only";
            return false;
        }
        return true;
}

function ValidateLname()
{
    var lname= document.getElementById("lname").value;
    if (lname==""){
        document.getElementById("lnameErr").innerText="Name Cannot Be Null.";
        return false;
    }
   
    document.getElementById("lnameErr").innerText="";
    var lnameFormat =/^[A-Za-z]+$/;
    if (!lnameFormat.test(lname)) {
            lnameErr.innerHTML = "Please Enter Alphabets Only";
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

