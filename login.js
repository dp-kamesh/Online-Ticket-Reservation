function authenticate(){

var username= document.getElementById("user").value;
var password= document.getElementById("pass").value;


    if(username=="trevor" && password=="wtmip")
    {
       window.location.href="sourcecode.html"
    }

    else if(username=="john" && !password=="")
    {
        window.location.href="sourcecode.html"
    }

    else if(username=="kamesh" && !password=="")
    {
        window.location.href="sourcecode.html"
    }

    else if(username=="keerthi" && !password=="")
    {
        window.location.href="sourcecode.html"
    }

    else{
        alert("AUTHENTICATION FAILED")
    }

    
}