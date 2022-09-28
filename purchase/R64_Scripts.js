
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
    document.getElementById("label").style.backgroundColor = "#1189F2"
    document.getElementById("PlusPrice").innerHTML = "$20"
    document.getElementById("ProPrice").innerHTML = "$80"
    document.getElementById("PlusPriceDesc").innerHTML = "Billed as $240 Yearly"
    document.getElementById("ProPriceDesc").innerHTML = "Billed as $960 Yearly"

    document.getElementById("PlusPriceM").innerHTML = "$20"
    document.getElementById("ProPriceM").innerHTML = "$80"
    document.getElementById("PlusPriceDescM").innerHTML = "Billed as $240 Yearly"
    document.getElementById("ProPriceDescM").innerHTML = "Billed as $960 Yearly"


    var divList = document.getElementsByClassName("PR_ButtonMonth");
    for(var i = 0; i < divList.length; i++){
        divList[i].style.display = "none";
    }
    var divList = document.getElementsByClassName("PR_ButtonYear");
    for(var i = 0; i < divList.length; i++){
        divList[i].style.display = "block";
    }




  }
  else{ // ----------------- Yearly Prices -----------------
    document.getElementById("label").style.backgroundColor = "#AAAAAA"
    document.getElementById("PlusPrice").innerHTML = "$25"
    document.getElementById("ProPrice").innerHTML = "$100"
    document.getElementById("PlusPriceDesc").innerHTML = "Save 20% With Yearly Pricing"
    document.getElementById("ProPriceDesc").innerHTML = "Save 20% With Yearly Pricing"

    document.getElementById("PlusPriceM").innerHTML = "$25"
    document.getElementById("ProPriceM").innerHTML = "$100"
    document.getElementById("PlusPriceDescM").innerHTML = "Save 20% With Yearly Pricing"
    document.getElementById("ProPriceDescM").innerHTML = "Save 20% With Yearly Pricing"

    var divList = document.getElementsByClassName("PR_ButtonYear");
    for(var i = 0; i < divList.length; i++){
        divList[i].style.display = "none";
    }
    var divList = document.getElementsByClassName("PR_ButtonMonth");
    for(var i = 0; i < divList.length; i++){
        divList[i].style.display = "block";
    }

  }
  
}