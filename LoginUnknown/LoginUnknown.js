
var menuOverlay = false;
var menuOverlayM = false;

var MIN_WIDTH = 767;
var viewport = document.createElement("meta");
viewport.setAttribute("name", "viewport");
if(screen.width < MIN_WIDTH){
  viewport.setAttribute("content", "width=" + MIN_WIDTH);
} 
else{
  viewport.setAttribute("content", "width=device-width, initial-scale=1");
}
document.head.appendChild(viewport);


function clickHamburgerM(){ 
  
  if(menuOverlayM){ // hide the overlay
    document.getElementById('hamImgM').src = './images/HamburgerMobile.png';
    menuOverlayM=false;
    document.getElementById("OverlayMenuLayer").style.display="none";
    document.getElementById("OverlayMenuLayer").style.visibility = "hidden";
    document.getElementById("ContentLayer").style.visibility = "visible";
    document.body.style.overflowY = "auto";
    document.body.style.overflowX = "auto";
  }
  else{ // show the overlay
    var myImage = document.querySelector('hamImg');
    document.getElementById('hamImgM').src = './images/HamburgerCloseMobile.png';
    menuOverlayM=true;
    document.getElementById("OverlayMenuLayer").style.display="block";
    document.getElementById("OverlayMenuLayer").style.visibility = "visible";
    document.getElementById("ContentLayer").style.visibility = "hidden";
    document.body.style.overflowY = "hidden";
    document.body.style.overflowX = "hidden";
  }
}

function clickHamburger(){ 
  if(menuOverlay){ // hide the overlay
    document.getElementById('hamImg').src = './images/HamburgerMobile.png';
    menuOverlay=false;
    document.getElementById("OverlayMenuLayer").style.display="none";
    document.getElementById("OverlayMenuLayer").style.visibility = "hidden";
    document.getElementById("ContentLayer").style.visibility = "visible";
    document.body.style.overflowY = "auto";
    document.body.style.overflowX = "auto";
  }
  else{ // show the overlay
    var myImage = document.querySelector('hamImg');
    document.getElementById('hamImg').src = './images/HamburgerCloseMobile.png';
    menuOverlay=true;
    document.getElementById("OverlayMenuLayer").style.display="block";
    document.getElementById("OverlayMenuLayer").style.visibility = "visible";
    document.getElementById("ContentLayer").style.visibility = "hidden";
    document.body.style.overflowY = "hidden";
    document.body.style.overflowX = "hidden";
  }

}




function playOverview() {
  document.getElementById("vButton").style.display="none";
}

function hitPlayButton() {
  document.getElementById("vButton").style.display="none";
  document.getElementById("overviewVideo").play();
}


function priceSwitch(){

  if( document.getElementById("switch").checked ){ 
    // ----------------- Monthly Prices -----------------
    document.getElementById("PlusPrice").innerHTML = "$12"
    document.getElementById("ProPrice").innerHTML = "$32"
    document.getElementById("PlusPriceDesc").innerHTML = "Billed as $144 Yearly"
    document.getElementById("ProPriceDesc").innerHTML = "Billed as $384 Yearly"
  }
  else{ // ----------------- Yearly Prices -----------------
    document.getElementById("PlusPrice").innerHTML = "$15"
    document.getElementById("ProPrice").innerHTML = "$40"
    document.getElementById("PlusPriceDesc").innerHTML = "Yearly Price $12/month (-20%)"
    document.getElementById("ProPriceDesc").innerHTML = "Yearly Price $32/month (-20%)"
  }
  
}