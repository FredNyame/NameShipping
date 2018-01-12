var icon = document.getElementById("icon");

//Fucntion to open navigation
function openNav(){
var nav = document.getElementById("navbar");
  if(nav.className === "navbar"){
  	nav.classList.add("navopen");
  } else {
  	nav.classList.remove("navopen");
  }
}

//AddEventLitener
icon.addEventListener('click', openNav);