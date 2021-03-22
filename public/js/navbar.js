
let hamButton = document.querySelector('.ham');
let navbar = document.querySelector('.navbar');


hamButton.addEventListener('click', openmenu);

function openmenu(){
  navbar.classList.toggle('showNav');
  hamButton.classList.toggle('showClose');
}

let menuLinks = document.querySelectorAll('.menuLink');

menuLinks.forEach(
  function(menuLink) {
    menuLink.addEventListener('click', openmenu);
  }
)



let dropDown = document.querySelector('.dropdown');
let topnavbar = document.querySelector('.top_navbar');


dropDown.addEventListener('click', opentopmenu);

function opentopmenu(){
  topnavbar.classList.toggle('showTopNav');
}

let topMenuLinks = document.querySelectorAll('.topMenuLink');

topMenuLinks.forEach(
  function(topMenuLinks) {
    topMenuLinks.addEventListener('click', opentopmenu);
  }
)
