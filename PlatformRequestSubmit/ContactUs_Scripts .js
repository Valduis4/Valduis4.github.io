
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