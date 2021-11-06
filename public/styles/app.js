navbar= document.getElementById('navbar');
navElements= document.getElementById('containernav');

window.addEventListener('scroll', function ()
{
    const scroll = this.document.documentElement.scrollTop;

    if (scroll>200){
        navbar.style.height = "10vh";
        navElements.style.height="10vh";
    }
    else
    {
        navbar.style.height="15vh";
        navElements.style.height="15vh";
    }
})