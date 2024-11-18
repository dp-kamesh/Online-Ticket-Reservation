function search(){
    var from=document.getElementById("from").value;
    var to=document.getElementById("to").value;
    var dateofjourney=document.getElementById("doj").value;


    loop1:
    if (from=="")
    {
        alert("enter a starting pont")
        break loop1;
    }

    loop2:
    if(to=="")
    {
        alert("enter your destination")
        break loop2;
    }
    
    loop3:
    if(dateofjourney=="")
    {
        alert("Select a date to journey")
        break loop3;
    }

        

    if(from=="bangalore" && to=="chennai" && !dateofjourney=="")
    {
        window.location.href="booking.html"
    }

    else if(from=="chennai" && to=="bangalore" && !dateofjourney=="")
    {
        window.location.href="cbbooking.html"
    }


    else{
        alert("Our services are only from bangalore to chennai & Viceversa")
    }

    if(dateofjourney=="")
    {
        alert("Select a date to journey")
    }
}

window.onload=function()
{
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
}