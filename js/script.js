const hamburgerOpen = document.querySelector('.open');
const navBar = document.querySelector('.navbar');
const hamburgerClose = document.querySelector('.close');


hamburgerOpen.addEventListener('click', () => {
  navBar.classList.add('active');
  if(navBar.classList.contains('active')) {
    hamburgerOpen.style.display = 'none';
    hamburgerClose.style.display = 'block';
  }
}); 

hamburgerClose.addEventListener('click', () => {
  navBar.classList.remove('active');
  if(!navBar.classList.contains('active')) {
    hamburgerOpen.style.display = 'block';
    hamburgerClose.style.display = 'none';
  }
}); 



