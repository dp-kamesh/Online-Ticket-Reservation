function next(){
    const name=document.getElementById("pname").value;
    const number=document.getElementById("pnumber").value;
    const email=document.getElementById("pemail").value;
    const genderm=document.getElementById("pgenderm").value;
    const genderf=document.getElementById("pgenderf").value;

    localStorage.setItem("NAME",name);
    localStorage.setItem("NUMBER",number);
    localStorage.setItem("EMAIL",email);
    localStorage.setItem("GENDER",genderm);
    localStorage.setItem("GENDER",genderf);

    
    return;

}