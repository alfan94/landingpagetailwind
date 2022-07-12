
window.onscroll = function()
{
    const header = document.querySelector('header');
    const fledNav = header.offsetTop;
    const totop= document.querySelector('#to-top');
    if (window.pageYOffset > fledNav)
    {
        header.classList.add('navbar-fixed');
        totop.classList.remove('hidden');
        totop.classList.add('flex');
    }else{
        header.classList.remove('navbar-fixed');
        totop.classList.add('flex');
        totop.classList.add('hidden');
    }
};


const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function()
{
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});


//klik diluarhamburder


// window.addEventListener('click',function(e)
// {
//   if(e.target != hamburger && e.target != navMenu){
//     hamburger.classList.remove('hamburger-active');
//     navMenu.classList.add('hidden')
//   }
// });


//dark toggle

const togg=document.querySelector("#dark-toggle");
const html = document.querySelector('html');


togg.addEventListener('click',function()
{
     if(togg.checked)
     {
        html.classList.add('dark');
     }else{
        html.classList.remove('dark');
     }
});