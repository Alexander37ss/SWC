//Dropdown Hover Navbar Alumno
const tramitesBtn = document.querySelector('#btnTramites');
const pagosBtn = document.querySelector('#btnPagos');
const calificacionesBtn = document.querySelector('#btnCalificaciones');
const tramitesMenu = document.querySelector('#mega-menu-dropdown');
const nav = document.querySelector('#nav');

tramitesBtn.addEventListener('mouseover', showMenuTramites);
pagosBtn.addEventListener('mouseover', hideMenuTramites);
calificacionesBtn.addEventListener('mouseover', hideMenuTramites);
tramitesMenu.addEventListener('mouseover', showMenuTramites);
nav.addEventListener('mouseleave', hideMenuTramites);

function showMenuTramites(){
    tramitesBtn.classList.add('bg-[#6e1229]');
    tramitesMenu.classList.remove('hidden');
    console.log('1');
};
function hideMenuTramites(){
    tramitesBtn.classList.remove('bg-[#6e1229]');
    tramitesMenu.classList.add('hidden');
    console.log('2');
};