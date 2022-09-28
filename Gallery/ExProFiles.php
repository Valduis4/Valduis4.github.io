<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, minimum-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-22XVR023RP"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-22XVR023RP');
        </script>
    <!-- END Global GOOGLE -->
    <!-- Old Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-154737984-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- New End Google Analytics -->
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1170404306856125'); 
      fbq('track', 'PageView');
      </script>
      <noscript>
      <img height="1" width="1" 
      src="https://www.facebook.com/tr?id=1170404306856125&ev=PageView
      &noscript=1"/>
      </noscript>
    <!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="flex.css">
    <title>Row64 - Example Projects</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Gallery/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
  <body>
    <script src="R64_Scripts.js"></script>



    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->
                <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>
    <!--################################# END MENU BAR ###################################-->

    <!--#########--><div class="frame"><div class="filler" style="height:20px" id="ExPro"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;">
        <font style="font-size:34px;">Example Projects - Click To Download</font>
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <!--#########--><div class="frame" style="height:30px;background-color:#FFFFFF"></div>
     <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1Q3MEPT5ysuFsqrYoQLFWRkhYBWKUihTt/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_1Bil.png')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1Q3MEPT5ysuFsqrYoQLFWRkhYBWKUihTt/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>Billion Record</h6><p>Load Scale</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1_zgHqcjeg-PAz9uR3Zu-i3xAd8_x9-zk/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_100M.png')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1_zgHqcjeg-PAz9uR3Zu-i3xAd8_x9-zk/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>100 Million Rows</h6><p>Load Speed</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1KVHNc7v47z6RlwlBqyCwXT9G5n1xkG5t/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_30M.png')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1KVHNc7v47z6RlwlBqyCwXT9G5n1xkG5t/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>30 Million Rows</h6><p>Test Load Speed and Filtering</p></div></a></div>
    </div>
    
    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1ycqH_8uC5XHdVwTCFR_p6pco1lsoDq9F/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_10M.jpg')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1ycqH_8uC5XHdVwTCFR_p6pco1lsoDq9F/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>10 Million Rows</h6><p>Row64 Big Data Example</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/11q9YbvG9uEgMkItFbUno2rO7SUz6_wFt/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_TextSearch.jpg')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/11q9YbvG9uEgMkItFbUno2rO7SUz6_wFt/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>Big Data Text Search</h6><p>Product Review Example</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1zAUcwRgq9pUWijGQLxwGN-NUIo_2Sm80/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_Geo_Big.jpg')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1zAUcwRgq9pUWijGQLxwGN-NUIo_2Sm80/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>Geo Big Data Analysis</h6><p>44 Million Cell Towers (requires graphics card)</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1iswkjVaEOu-4UX7l9b2wRPqitnS8X5Ea/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_GeoAnalysis.jpg')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1iswkjVaEOu-4UX7l9b2wRPqitnS8X5Ea/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>Geo Analysis</h6><p>Next gen graphics (requires graphics card)</p></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 197.5px"><?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1Fqvq79N46BPlcat4WF_qUqWf3UKgzAhD/view?usp=sharing">';
      }
      ?><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_EP/Thumbnails/EP_Formulas.jpg')"><p></p></div></div></a></div>
      <div style="--width: 592.5px;">
      <?php
      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Gallery/#ExPro";
        echo '<a href="/Register">';
      }else{
        echo '<a href="https://drive.google.com/file/d/1Fqvq79N46BPlcat4WF_qUqWf3UKgzAhD/view?usp=sharing">';
      }
      ?>
      <div class="textdownload"><h6>Spreadsheet Formulas</h6><p>Pokemon Go Geoanalysis</p></div></a></div>
    </div>

    <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#F7F8F9";
      echo bottom($color);
      ?>

  </body>
</html>