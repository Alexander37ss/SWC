const Dropdown = document.querySelector('#dropdown-nav');
const btnDropdown = document.querySelector('#btn-dropdown');
const btnOpenMenu = document.querySelector('#btn-openmenu');
const btnCloseMenu = document.querySelector('#btn-closemenu');
const Menu = document.querySelector('#menu');

btnDropdown.addEventListener('click', toggleDropdown);
btnOpenMenu.addEventListener('click', openMenu);
btnCloseMenu.addEventListener('click', closeMenu);

function toggleDropdown(){
    Dropdown.classList.toggle('hidden');
}

function closeMenu(){
    Menu.classList.add('hidden');
}

function openMenu(){
    Menu.classList.remove('hidden');
}