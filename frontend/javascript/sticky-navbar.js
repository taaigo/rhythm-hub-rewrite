const navbar = document.querySelector('#navbar');
let navbartop = navbar.offsetTop;

function sticky_navbar()
{
    if (window.scrollY >= navbartop)
    {
        navbar.classList.add('sticky');
    }
    else
    {
        navbar.classList.remove('sticky');
    }
}
window.addEventListener('scroll', sticky_navbar);