const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');

if (toggle && menu) {
  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
}
