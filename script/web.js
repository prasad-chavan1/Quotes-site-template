let talk = document.getElementById('talkme');
let cancle = document.getElementById('cancle');
let sendmsg = document.getElementById('sendmsg');
let form = document.getElementById('form');
let bgdark = document.getElementById('bg-dark');
// let brkq = document.getElementById('brkquote');


// function popup(){
//     // form.style.zIndex=1;
//     // form.classList.add('animate');
//     window.open('https://www.instagram.com/arnav__quotes/', '_SELF');
// }
function closepopup(){
    form.style.zIndex=0;
    form.classList.remove('animate');
}

talk.onclick = function(){
    popup();
};
cancle.onclick = function(){
    closepopup();
};
sendmsg.onclick = function(){
    closepopup();
};
