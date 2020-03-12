require('./bootstrap');

let buttonFile=document.querySelector('#buttonAvatarFile');
let buttonUrl=document.querySelector('#buttonAvatarUrl');


buttonFile.addEventListener('click',function(){
    
    buttonUrl.nextElementSibling.className+=' d-none';
    buttonFile.nextElementSibling.className=buttonFile.nextElementSibling.className.replace(' d-none','');
});


buttonUrl.addEventListener('click',function(){
    buttonFile.nextElementSibling.className+=' d-none';
    buttonUrl.nextElementSibling.className=buttonUrl.nextElementSibling.className.replace(' d-none','');
});