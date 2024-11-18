function confirm()
{
    var checkboxs=document.getElementsByName("cb");
    var okay=false;
    for(var i=0,l=checkboxs.length;i<l;i++)
    {
        if(checkboxs[i].checked)
        {
            okay=true;
            break;
        }
    }
    if(okay)window.location.href="pasdtl.html";
    else alert("Select a seat");
}