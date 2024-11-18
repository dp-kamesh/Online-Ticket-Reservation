const progress = document.getElementById('progressbar');

const totalheight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
    const progressHeight = (window.pageYOffset / totalheight) * 100;
    progress.style.height = progressHeight + "%";
}