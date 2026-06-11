document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.header--hamburger');
    const menu = document.querySelector('.header--menu');
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
});