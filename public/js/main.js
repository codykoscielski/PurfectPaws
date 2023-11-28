document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('#sidebarToggle')
    const menu = document.querySelector('#navMenu')


    toggleButton.addEventListener('click', function() {
        const isMenuActive = menu.style.display === 'flex'
        menu.style.display = isMenuActive ? 'none' : 'flex'
    });
});
