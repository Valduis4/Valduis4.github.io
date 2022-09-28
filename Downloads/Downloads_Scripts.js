
var os=0;
var bitDepth=0;
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



function getOS() {
  if (navigator.userAgent.indexOf("WOW64") != -1 || navigator.userAgent.indexOf("Win64") != -1 ){
     bitDepth=64;
  }
  else {bitDepth=32;}
  var userAgent = window.navigator.userAgent,
      platform = window.navigator.platform,
      macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
      windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
      iosPlatforms = ['iPhone', 'iPad', 'iPod'],
      os = null;
  // [Windows,Mac,Linux,Windows 32bit]
  if(macosPlatforms.indexOf(platform) !== -1) { os = 1;} // 'Mac OS'
  else if (iosPlatforms.indexOf(platform) !== -1) {os = 1;}  // 'iOS'
  else if (windowsPlatforms.indexOf(platform) !== -1) { // 'Windows';
    if(bitDepth==32){os=3;}
    else{os=0;}
  }
  else if (/Android/.test(userAgent)) {os=2;} //Android'
  else if (!os && /Linux/.test(platform)) {os=2;} //'Linux'
  // return os;
  document.getElementById("platform").value = os;
}

getOS();

// alert(getOS());

function ClickDownload() {
  var dlIndex = document.getElementById("version").selectedIndex;
  if(dlIndex == 0){
    url = "/SaphirePointTransfer/Row64_V1_2_Installer.exe";
  }else if(dlIndex==1){
    url = "/SaphirePointTransfer/Row64_V1_01_Installer.exe";
  }
  const a = document.createElement('a')
  a.href = url
  a.download = url.split('/').pop()
  document.body.appendChild(a)
  a.click()
  document.body.removeChild(a)

}

function ChangeOS(){

  var osVal = document.getElementById("platform").value;
  var osIndex = document.getElementById("platform").selectedIndex;
  var dlIndex = document.getElementById("version").selectedIndex;

  if(osIndex==0){ // Windows
    if(dlIndex==0){
      document.getElementById("platformForm").action = "/SaphirePointTransfer/Row64_V1_2_Installer.exe";
      document.getElementById("C_Button").href = "/SaphirePointTransfer/Row64_V1_2_Installer.exe";
    }else if(dlIndex==1){
      document.getElementById("platformForm").action = "/SaphirePointTransfer/Row64_V1_01_Installer.exe";
      document.getElementById("C_Button").href = "/SaphirePointTransfer/Row64_V1_01_Installer.exe";
    }
  }
  else{
    document.getElementById("platformForm").action = "/PlatformRequestSubmit/";

  }

  if(osIndex==0){ // Windows
    if(dlIndex==0){
      document.getElementById("PCContainer").style.display = "block";
      document.getElementById("PCContainer1").style.display = "none";
      document.getElementById("PCContainer2").style.display = "none";
      document.getElementById("PCContainer3").style.display = "none";
    } else if(dlIndex==1){
      document.getElementById("PCContainer1").style.display = "block";
      document.getElementById("PCContainer").style.display = "none";
      document.getElementById("PCContainer2").style.display = "none";
      document.getElementById("PCContainer3").style.display = "none";
    } else if(dlIndex==2){
      document.getElementById("PCContainer2").style.display = "block";
      document.getElementById("PCContainer").style.display = "none";
      document.getElementById("PCContainer1").style.display = "none";
      document.getElementById("PCContainer3").style.display = "none";
    } else if(dlIndex==3){
      document.getElementById("PCContainer3").style.display = "block";
      document.getElementById("PCContainer").style.display = "none";
      document.getElementById("PCContainer1").style.display = "none";
      document.getElementById("PCContainer2").style.display = "none";
    }
    document.getElementById("MacContainer").style.display = "none";
    document.getElementById("LinuxContainer").style.display = "none";
    document.getElementById("Win32BitContainer").style.display = "none";
    // document.getElementById("C_Button").innerHTML = "DOWNLOAD"

  }
  else if(osIndex==1){ // Mac
    document.getElementById("PCContainer").style.display = "none";
    document.getElementById("MacContainer").style.display = "block";
    document.getElementById("LinuxContainer").style.display = "none";
    document.getElementById("Win32BitContainer").style.display = "none";
    // document.getElementById("C_Button").innerHTML = "REQUEST YOUR PLATFORM";
  }
  else if(osIndex==2){ // Mac
    document.getElementById("PCContainer").style.display = "none";
    document.getElementById("MacContainer").style.display = "none";
    document.getElementById("LinuxContainer").style.display = "block";
    document.getElementById("Win32BitContainer").style.display = "none";
    // document.getElementById("C_Button").innerHTML = "REQUEST YOUR PLATFORM";
  }
  else if(osIndex==3){ // Win32bit
    document.getElementById("PCContainer").style.display = "none";
    document.getElementById("MacContainer").style.display = "none";
    document.getElementById("LinuxContainer").style.display = "none";
    document.getElementById("Win32BitContainer").style.display = "block";
    // document.getElementById("C_Button").innerHTML = "REQUEST YOUR PLATFORM";
  }

  // alert("ChangeOS to " + osIndex);

}



function clickHamburgerM(){ 
  
  if(menuOverlayM){ // hide the overlay
    document.getElementById('hamImgM').src = './images/HamburgerMobile.png';
    menuOverlayM=false;
    document.getElementById("OverlayMenuLayer").style.display="none";
    document.getElementById("OverlayMenuLayer").style.visibility = "hidden";
    document.getElementById("ContentLayerMobile").style.visibility = "visible";
    document.body.style.overflowY = "auto";
    document.body.style.overflowX = "auto";
  }
  else{ // show the overlay
    var myImage = document.querySelector('hamImg');
    document.getElementById('hamImgM').src = './images/HamburgerCloseMobile.png';
    menuOverlayM=true;
    document.getElementById("OverlayMenuLayer").style.display="block";
    document.getElementById("OverlayMenuLayer").style.visibility = "visible";
    document.getElementById("ContentLayerMobile").style.visibility = "hidden";
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
    document.getElementById("ContentLayerMobile").style.visibility = "visible";
    document.body.style.overflowY = "auto";
    document.body.style.overflowX = "auto";
  }
  else{ // show the overlay
    var myImage = document.querySelector('hamImg');
    document.getElementById('hamImg').src = './images/HamburgerCloseMobile.png';
    menuOverlay=true;
    document.getElementById("OverlayMenuLayer").style.display="block";
    document.getElementById("OverlayMenuLayer").style.visibility = "visible";
    document.getElementById("ContentLayerMobile").style.visibility = "hidden";
    document.body.style.overflowY = "hidden";
    document.body.style.overflowX = "hidden";
  }

}