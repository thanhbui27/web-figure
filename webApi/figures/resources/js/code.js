var menu = document.querySelector('.menu-bar');
var navbar =  document.querySelector('.navbar');
menu.addEventListener('click',()=>{
  console.log(1)
  navbar.classList.toggle('activeMenuBar');
})