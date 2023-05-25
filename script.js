const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registrar = document.querySelector('.register-link');
const btn = document.querySelector('.boton');
const iconClose = document.querySelector('.icon-close')
btn.addEventListener('click', () => {
  wrapper.classList.add('active-boton');
});




registrar.addEventListener('click', () => {
  wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
});

iconClose.addEventListener('click', () => {
  wrapper.classList.remove('active-boton');

});