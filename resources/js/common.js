const navbar = document.querySelector('#commonNavbar')

window.onscroll = () => {
    if (window.scrollY > 1) {
        navbar.classList.add('nav-scroll');
    } else {
        navbar.classList.remove('nav-scroll');
    }
}
