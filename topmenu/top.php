<?php
function TopDesktop(){

                $menu = '<li style="width:55.359px;" ><a href="/">Home</a></li>';
                $menu .= '<li style="width:10px;"></li>
                <li style="width:82.766px;"><a href="/Company">Company</a></li>
                <li style="width:10px;"></li>
                <li style="width:65.734px;" ><a href="/eBook">eBook</a></li>
                <li style="width:10px;"></li>
                <li style="width:60px;" ><a href="https://forum.row64.com/" target="_blank" rel="noopener noreferrer">Forum</a></li>
                <li style="width:10px;"></li>
                <li style="width:85.609px;" ><a href="/Downloads">Download</a></li>
                <li style="width:10px;"></li>
                <li style="width:44.031px;" ><a href="/blog">Blog</a></li> 
                <li style="width:10px;"></li>';
                
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    $menu .= '<li style="width:65px;" ><a href="/Logout">Logout</a></li>';
                    $menu .= '<li style="width:10px;"></li>';
                    $menu .= '<li style="width:71.438px"><a class="hoOAqz"href="/Welcome">Account</a></li>';
                } else{
                    $menu .= '<li style="width:51.609px;" ><a href="/Login/">Login</a></li>';
                    $menu .= '<li style="width:10px;"></li>';
                    $menu .= '<li style="width:70px;"><a class= "hoOAqz" href="/Register/">Sign Up</a></li>';
                }
                return $menu;
}

function TopMobile(){
    $list = '<a class="mMenuBar" href="/">Home</a>
        <a class="mMenuBar" href="/Company">Company</a>
        <a class="mMenuBar" href="/eBook">eBook</a>
        <a class="mMenuBar" href="https://forum.row64.com/">Forum</a>
        <a class="mMenuBar" href="/Download">Download</a>
        <a class="mMenuBar" href="/blog">Blog</a>';
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $list .= '<a class="mMenuBar" href="/Welcome">Account</a>';
        $list .= '<a class="mMenuBar" href="/Logout">Logout</a>';
    } else{
        $list .= '<a class="mMenuBar" href="/Login/">Login</a>';
        $list .= '<a class="mMenuBar" href="/Register/">Sign Up</a>';
    }

    return $list;
}

function fulltop($news){
  if($news==true){
    require("/var/www/html/topmenu/News.php");
    $link = "https://row64.com/Blogs/Posts/Pepperdine_Graziadio_Business_School_Students_Pioneer_Course_Streamlining_Data_Science_Using_GPU_Technology.php";
    // $link = $URL;
    $text = "Pepperdine Graziadio Business School Students Pioneer Course Streamlining Data Science Using GPU Technology.";
    // $text = $News;
    $menu = '<div class="rolling" style="--Top-Position:0; height:30px;justify-content: center;">
              <div class="frame" style="background-color: #F7F8F9;height:30px;align-items: center;">
                <a href="'.$link.'" class="NewsT">'.$text.'</a>
              </div>
            </div>';
            $TopP = 30;
  }else{
    $TopP = 0;
    $menu="";
  }
    $menu .= '<div class="rolling" style="--Top-Position:'.$TopP.'">
    <div class="frame">
        <div class="container">
          <div class="a" id="logoTop">
            <a href="/"><img id="headerLogo" src="/images/Horizontal_Logo.webp" alt="" width="124.547px" height="35px" loading="lazy" style="padding: 0px 0px 0px 10px;"></a>
          </div>
          <div class="a" id="logoTopMobile">
              <a href="/"><img id="mobileLogo" src="/images/Horizontal_Logo.webp" alt="" width="309px" height="88px" loading="lazy" style="padding: 0px 0px 0px 10px;"></a>
          </div>
          <div class="menuContainer">
            <nav>
              <ul>
              <li style="width:55.359px;" ><a href="/">Home</a></li>
                <li style="width:10px;"></li>
                <li style="width:125.479px;" ><a href="/#cases">Case Studies</a></li>
                <li style="width:10px;"></li>
                <li style="width:100.729px;" ><a href="https://forum.row64.com/" target="_blank" rel="noopener noreferrer">Community</a></li>
                <li style="width:10px;"></li>
                <li style="width:64.948px;" ><a href="/#PricingLink">Pricing</a></li>
                <li style="width:10px;"></li>
                <!-- <li style="width:44.031px;" ><a href="/Blogs/">Blog</a></li> 
                <li style="width:10px;"></li>-->';
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    $menu .= '<li style="width:65px;" ><a href="/Logout/">Logout</a></li>';
                    $menu .= '<li style="width:10px;"></li>';
                    $menu .= '<li style="width:79.1px"><a class="hoOAqz"href="/Welcome/">Account</a></li>';
                } else{
                    $menu .= '<li style="width:51.609px;" ><a href="/Login/">Login</a></li>';
                    $menu .= '<li style="width:10px;"></li>';
                    $menu .= '<li style="width:74px;"><a class= "hoOAqz" href="/Register/">Sign Up</a></li>';
                }
                $menu .= '</ul>
            </nav>
          </div>
          <div class="menuHamburger" id="menuHamburger" onclick="clickHamburger()" >
            <img id="hamImg" src="/images/Hamburger.png" alt="" width="100%" height="35" loading="lazy">
          </div>
          <div class="menuHamburgerMobile" id="menuHamburgerMobile" onclick="clickHamburgerM()" >
            <img id="hamImgM" src="/images/HamburgerMobile.png" alt="" width="100%" height="191" loading="lazy">
          </div>
      </div>
    </div>

    <div class="frame" >
        <div class="dLine" style="box-shadow: 0px 1px 1px #c9c9c9;"></div>
    </div>
    </div>

    <div id="OverlayMenuLayer" class="OverlayMenuLayer">
      <div class="frame" id="menuStack">
      <a class="mMenuBar" href="/">Home</a>
        <a class="mMenuBar" href="/#cases">Case Studies</a>
        <a class="mMenuBar" href="https://forum.row64.com/">Community</a>
        <a class="mMenuBar" href="/#PricingLink">Pricing</a>
        <a class="mMenuBar" href="/Blogs/">Blog</a>';
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $menu .= '<a class="mMenuBar" href="/Welcome">Account</a>';
        $menu .= '<a class="mMenuBar" href="/Logout">Logout</a>';
      } else{
        $menu .= '<a class="mMenuBar" href="/Login/">Login</a>';
        $menu .= '<a class="mMenuBar" href="/Register/">Sign Up</a>';
      }
      $menu .= '</div>
    </div>';

    return $menu;
}