import './bootstrap';

const hamburger = document.querySelector('#humburger');
const menu = document.querySelector('#menu');
const faSolid = document.querySelector('.fa-solid');

hamburger.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  faSolid.classList.toggle('fa-xmark');
});

const hLinks = document.querySelectorAll('.hLink');

hLinks.forEach((hLink) => {
  hLink.addEventListener('click', toggleMenu);
});

function toggleMenu() {
  menu.classList.add('hidden');
}