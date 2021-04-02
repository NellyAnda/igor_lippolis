let dropDown = document.querySelector('.dropdown');
let topnavbar = document.querySelector('.top_navbar');
let hamButton = document.querySelector('.ham');
let navbar = document.querySelector('.navbar');
let deployedTop = false;
let deployedBottom = false;



dropDown.addEventListener('click', toggleTopMenu); 

function toggleTopMenu(){
  
  if (deployedBottom) {
    navbar.classList.remove('showNav');
    hamButton.classList.remove('showClose');
    hamButton.classList.add('ham');
    deployedBottom = false;
  }

  if (!topnavbar.classList.contains('showTopNav')) { 
    topnavbar.classList.add('showTopNav');
    deployedTop = true;
  } else {
    topnavbar.classList.remove('showTopNav'); 
    deployedTop = false;
  }
 
}

let topMenuLinks = document.querySelectorAll('.topMenuLink');

topMenuLinks.forEach(
  function(topMenuLinks) {
    topMenuLinks.addEventListener('click', toggleTopMenu);
  }
)


hamButton.addEventListener('click', openmenu);

function openmenu(){

  if (deployedTop) {
    topnavbar.classList.remove('showTopNav');
    deployedTop = false;
  }

  if (!navbar.classList.contains('showNav'))  {
    navbar.classList.add('showNav');
    hamButton.classList.add('showClose');
    hamButton.classList.remove('ham');
    deployedBottom = true;
  } else {
    navbar.classList.remove('showNav');
    hamButton.classList.remove('showClose');
    hamButton.classList.add('ham');
    deployedBottom = false;
  }

}

let menuLinks = document.querySelectorAll('.menuLink');

menuLinks.forEach(
  function(menuLink) {
    menuLink.addEventListener('click', openmenu);
  }
)



