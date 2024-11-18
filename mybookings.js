window.addEventListener('load', () =>
{

    const pname = localStorage.getItem('NAME');
    const pnumber = localStorage.getItem('NUMBER');
    const pemail = localStorage.getItem('EMAIL');
    const pgenderm=localStorage.getItem('GENDER');
    const pgenderf=localStorage.getItem('GENDER');

    document.getElementById('pasname').innerHTML = pname;
    document.getElementById('pasnumber').innerHTML = pnumber;
    document.getElementById('pasemail').innerHTML = pemail;
    document.getElementById('pasgender').innerHTML = pgenderm;
    document.getElementById('pasgender').innerHTML = pgenderf;

}
)